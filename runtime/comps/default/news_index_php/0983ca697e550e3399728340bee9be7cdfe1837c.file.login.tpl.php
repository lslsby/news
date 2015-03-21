<?php /* Smarty version Smarty-3.1.8, created on 2015-03-21 23:23:29
         compiled from "./home/views/default\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7699550d8c72248eb6-87908781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0983ca697e550e3399728340bee9be7cdfe1837c' => 
    array (
      0 => './home/views/default\\login\\login.tpl',
      1 => 1426951395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7699550d8c72248eb6-87908781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_550d8c722da0b8_96645147',
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d8c722da0b8_96645147')) {function content_550d8c722da0b8_96645147($_smarty_tpl) {?><!DOCTYPE html>
<html class="login-alone">
    <head>
        <title>用户登陆</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/register_screen.css" media="screen, projection" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/register_base.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/register_login.css">
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/md5.js"></script>

   <style>
        
#login {
       border: 1px solid #2899e1;
        border-radius: 2px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        height: 30px;
        line-height: 28px;
        padding: 0;
        text-align: center;
        text-decoration: none;
        vertical-align: top;
    }
        </style>

    </head>
    <body>
        <div class="logina-logo" style="height: 55px; font-size: 30px; font-weight:bold;">
            用户登陆
        </div>
        <div class="logina-main main clearfix">
            <div class="tab-con">
                <div id="form-login">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr style="text-align:center">
                                <th>账户:</th>
                                <td width="300">
                                    <input id="email" type="text" style="width:250px" name="email" placeholder="电子邮箱/手机号" autocomplete="off" value="">
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>密码:</th>
                                <td width="300">
                                    <input id="password" type="password" style="width:250px" name="password" placeholder="请输入密码" autocomplete="off">
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr id="tr-vcode" style="" >
                                    <th>
                                        验证码:
                                    </th>
                                    <td width="245">
                                        <div class="valid">
                                            <input type="text" name="vcode">
                                            <img class="vcode" src="/news/index.php/vcode/vcode" width="85" height="35" alt="">
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>
                                </th>
                                <td width="300px">
                                    <input class="login" style="width:120px;background-color:#67bbf1;margin-left:40px" type="submit" value="登  录">
                                </td>

                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="copyright"></div>
        </div>
    </body>
</html>
<?php }} ?>