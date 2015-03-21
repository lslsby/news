<?php /* Smarty version Smarty-3.1.8, created on 2015-03-21 22:46:52
         compiled from "./home/views/default\login\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19421550d1f202c3602-68117574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f38c3bf103c4e0455f5d6940d4b1dd20006bab' => 
    array (
      0 => './home/views/default\\login\\register.tpl',
      1 => 1426949156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19421550d1f202c3602-68117574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_550d1f203ae0e6_27696478',
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d1f203ae0e6_27696478')) {function content_550d1f203ae0e6_27696478($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="login-alone">
    <head>
        <title>用户注册</title>
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
/js/register.js"></script>

        <style>
        
#register {
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
            用户注册
        </div>
        <div class="logina-main main clearfix">
            <div class="tab-con">
                <div id="form-login">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr style="text-align:center">
                                <th>用户名:</th>
                                <td width="300">
                                    <input id="username" onblur='validate("username")' type="text" style="width:250px" name="username" placeholder="请输入一个昵称" autocomplete="off" value="">
                                </td>
                                <td>
                                    <span id="username_true" style="color:#4fca64;display:none">该用户名可以使用</span>
                                    <span id="username_false" style="color:#ff0000;display:none">该用户名已被使用过或为空</span>
                                </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>邮箱:</th>
                                <td width="300">
                                    <input id="email" onblur='validate("email")' type="text" style="width:250px" name="email" placeholder="电子邮箱" autocomplete="off" value="">
                                </td>
                                <td>
                                    <span id="email_true" style="color:#4fca64;display:none">该邮箱可以使用</span>
                                    <span id="email_false" style="color:#ff0000;display:none">该邮箱已被使用过或不合法</span>

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
                            <tr style="text-align:center">
                                <th>重复密码:</th>
                                <td width="300">
                                    <input id="repeat_password" onblur='validate("repeat_password")' type="password" style="width:250px" name="repeat_password" placeholder="请再次输入密码" autocomplete="off">
                                </td>
                                <td>
                                    <span id="repeat_password_true" style="color:#4fca64;display:none">两次密码一致</span>
                                    <span id="repeat_password_false" style="color:#ff0000;display:none">两次密码不一致或为空</span>
                                </td>
                            </tr>
                            <tr id="tr-vcode" style="" >
                                    <th>
                                        验证码:
                                    </th>
                                    <td width="245">
                                        <div class="valid">
                                            <input type="text" onblur='validate("vcode")' id="vcode" placeholder="请输入验证码">
                                                <img class="vcode" src="/news/index.php/vcode/vcode" onclick="switchAnother(this)" width="85" height="35" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="vcode_true" style="color:#4fca64;display:none">验证正确</span>
                                        <span id="vcode_false" style="color:#ff0000;display:none">验证码不正确</span>
                                    </td>
                            </tr>
                            <tr style="text-align:center">
                                <th>
                                </th>
                                <td width="300px">
                                    <input id="register" onclick="register()" style="width:120px;background-color:#67bbf1;margin-left:40px" type="submit" value="注  册">
                                </td>

                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="refer" value="site/">
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