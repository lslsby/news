<?php /* Smarty version Smarty-3.1.8, created on 2015-03-22 02:23:39
         compiled from "./home/views/default\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7699550d8c72248eb6-87908781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0983ca697e550e3399728340bee9be7cdfe1837c' => 
    array (
      0 => './home/views/default\\login\\login.tpl',
      1 => 1426962212,
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
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/login.js"></script>

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
                                    <input id="email" onblur='validate("email")' type="text" style="width:250px" name="email" placeholder="电子邮箱" autocomplete="off" value="">
                                </td>
                                <td>
                                    <span id="email_true" style="color:#4fca64;display:none">该账号可以使用</span>
                                    <span id="email_false" style="color:#ff0000;display:none">该账号不存在</span>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>密码:</th>
                                <td width="300">
                                    <input id="password" onblur='validate("password")'type="password" style="width:250px" name="password" placeholder="请输入密码" autocomplete="off">
                                </td>
                                <td>
                                    <span id="password_true" style="color:#4fca64;display:none">密码正确</span>
                                    <span id="password_false" style="color:#ff0000;display:none">密码错误!</span>
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
                                            <input id="vcode" type="text" onblur='validate("vcode")' name="vcode">
                                            <img class="vcode" src="/news/index.php/vcode/vcode" onclick="switchAnother(this)" width="85" height="35" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="vcode_true" style="color:#4fca64;display:none">验证正确</span>
                                        <span id="vcode_false" style="color:#ff0000;display:none">验证码不正确</span>
                                    </td>
                                    <td>
                                    </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>
                                </th>
                                <td width="300px">
                                    <input class="login" onclick='login()' style="width:120px;background-color:#67bbf1;margin-left:40px" type="submit" value="登  录">
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

     <script>
        function switchAnother(obj) {
            obj.src = "/news/index.php/vcode/vcode/" + Math.random();
        }
    </script>
</html>
<?php }} ?>