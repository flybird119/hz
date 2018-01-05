<?php
session_start();
ini_set('date.timezone','Asia/Shanghai');
error_reporting(0);

require_once "./lib/WxPay.Api.php";
require_once './lib/WxPay.Notify.php';
require_once '../include/func_conn.php';
require_once './log.php';

//初始化日志
$logHandler= new CLogFileHandler("/logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);


class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
        //Log::DEBUG("返回的data:" . json_encode($data));
		$notfiyOutput = array();
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
        $mysqli = get_conn();
		$payNo = $data["transaction_id"];
		$sql_check = "select payNo from orders where payNo = '$payNo'";
        //Log::DEBUG("$sql_check");
		$res = $mysqli->query($sql_check);
		if($res->num_rows>0){
		    $res->free();
		    close_conn($mysqli);
		    return true;
        }
        $res->free();
        //Log::DEBUG("商户信息:" . $data["cash_fee"]);
        //Log::DEBUG("-------调试信息-------:");
		$att = json_decode($data["attach"]);
        //Log::DEBUG("-------------:");
        //Log::DEBUG("id:".$att->id);
		$mb = $att->mb;
        //Log::DEBUG("mb:".$mb);
		$tim = date("Y-m-d H:i:s");
        //Log::DEBUG("tim:".$tim);
		$exp = date("Y-m-d H:i:s",time()+$att->duration*3600*24);
        //Log::DEBUG("exp:".$exp);
		$gid= $att->id;
        //Log::DEBUG("id:".$gid);
		$price = intval($data["cash_fee"])/100;
        //Log::DEBUG("price:".$price);
		$sql = "insert into orders (mobile,tim,exp,gid,payNo,price) values ('$mb','$tim','$exp','$gid','$payNo','$price')";
        Log::DEBUG("sql:".$sql);
		$mysqli->query($sql);
		if($mysqli->affected_rows===0){
            Log::DEBUG("--------------:");
            Log::DEBUG("交易成功，但生成订单出错！付款码为:".$payNo);
            Log::DEBUG("--------------:");
        }
        close_conn($mysqli);
        return true;
	}
}

$notify = new PayNotifyCallBack();
$notify->Handle(false);
