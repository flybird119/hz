<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:34
  from "/web/jianxue/web/app/robot/JB3208T/templates/screen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dbfe571132_29768842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34be05a557c755084766860cfdcb7c21d83c3923' => 
    array (
      0 => '/web/jianxue/web/app/robot/JB3208T/templates/screen.tpl',
      1 => 1513161215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38dbfe571132_29768842 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/web/jianxue/web/app/libs/plugins/modifier.date_format.php';
?>
<div class="screen">

    <div class="scrn_top">
        <table class="scrn_top_tb boardcast_top  hidden">
            <tr>
                <td>手动控制</td>
                <td>机号</td>
                <td>回路</td>
                <td>点号</td>
                <td>分区</td>
                <td>消防广播</td>
                <td>总数</td>
            </tr>
        </table>

        <table class="err_top hidden">
            <tr>
                <td>故障信息</td>
                <td>总数</td>
                <td id="err_count">1</td>
            </tr>
        </table>

        <table class=" scrn_top_tb menu_top hidden">
            <tr>
                <td>
                    <div class="dropdown">
                        <a href = "" class="dropdown-toggle" data-toggle="dropdown">系统设置</a>

                        <ul class="dropdown-menu m_list" role="menu">
                            <li>
                                1回路配置
                            </li>
                            <li>
                                2属性配置
                            </li>
                            <li>
                                3通讯端口
                            </li>
                            <li>
                                4时间设置
                            </li>
                            <li>
                                5气体灭火
                            </li>
                            <li>
                                6系统声光
                            </li>
                            <li>
                                7火警确认
                            </li>
                            <li>
                                8打印设置
                            </li>
                            <li>
                                9密码修改
                            </li>

                        </ul>

                    </div>

                </td>
                <td>系统调试</td>
                <td>信息系统</td>
                <td>联动信息</td>
                <td>记录信息</td>
            </tr>
        </table>



    </div>


    <div class="scrn_mid ">

        <table class="scrn_mid_tb err_mid hidden">
            <tr>
                <td width="10%">1</td>
                <td width="85%">
                    <table class="err_tb_mid">
                        <tr>
                            <td width="19%">机号1</td>
                            <td width="19%">CRT口</td>
                            <td width="19%"></td>
                            <td width="19%"></td>
                            <td width="19%">故障</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <table class="scrn_mid_tb alarm_mid  hidden">
            <tr>
                <td width="10%">1</td>
                <td width="85%">
                    <table class="err_tb_mid">
                        <tr>
                            <td width="19%">机号1</td>
                            <td width="19%">CRT口</td>
                            <td width="19%"></td>
                            <td width="19%"></td>
                            <td width="19%">故障</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>





    </div>


    <div class="scrn_bottom">
        <table class="scrn_bottom_tb">
            <tr>
                <td width="10%"></td>
                <td width="10%">单机</td>
                <td width="15%"></td>
                <td width="15%" id="manual_auto_status">自动状态</td>
                <td width="48%" id="tim"></td>
            </tr>
        </table>
    </div>
</div><?php }
}
