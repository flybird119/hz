$(".btn_buy").click(function () {
    var tmp = this.id;
    callpay();
});
function callpay()
{
    if (typeof WeixinJSBridge === "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', jsApiCall);
            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
        }
    }else{
        jsApiCall();
    }
}
function jsApiCall(){
    var t=JSON.parse($("#pid").text());
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest',
         t,
        function(res){
            if (res.err_msg == "get_brand_wcpay_request:ok") {
                alert("支付成功,开始学习吧！");
                window.location.href="../sucess.php";
            }
        });
}