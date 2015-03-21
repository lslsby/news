<?php /* Smarty version Smarty-3.1.8, created on 2015-03-22 03:55:15
         compiled from "./home/views/default\index\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81550c6e4ed57c60-96778106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb1737e6c8309847c9131438c195942c163504f' => 
    array (
      0 => './home/views/default\\index\\show.tpl',
      1 => 1426967711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81550c6e4ed57c60-96778106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_550c6e4f07f004_74749988',
  'variables' => 
  array (
    'res' => 0,
    'detail' => 0,
    'login' => 0,
    'user' => 0,
    'advertise' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c6e4f07f004_74749988')) {function content_550c6e4f07f004_74749988($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/sdju.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/show.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/index.js"></script>
    <title><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</title>
</head>
<body>
    <div id="main">
        <div id="content">
            <div style="PADDING-LEFT: 20px; PADDING-RIGHT: 20px" id="">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="" style="PADDING-BOTTOM: 10px; HEIGHT: 25px; VERTICAL-ALIGN: middle">
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="HEIGHT: 40px; FONT-SIZE: 24px; VERTICAL-ALIGN: middle; font-weight:bold; text-align:center">
                                <?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>

                            </td>
                        </tr>

                        <tr>
                            <td style="HEIGHT: 25px; VERTICAL-ALIGN: middle; BORDER-TOP: #cccccc 1px dashed; PADDING-TOP: 2px">
                                <table cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td style="PADDING-TOP: 1px">
                                                发布作者：
                                            </td>

                                            <td class="" style="PADDING-TOP: 1px">
                                                <?php echo $_smarty_tpl->tpl_vars['detail']->value['author'];?>

                                            </td>

                                            <td class="">
                                                  <font color="#000000">
                                                        &nbsp;&nbsp;发布时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['time'];?>

                                                  </font>
                                            </td>

                                            <td class="">
                                                  <font color="#000000">
                                                  </font>
                                            </td>

                                            <td class="">
                                                  <font color="#000000">
                                                        &nbsp;&nbsp;评论【
                                                    <span class="">
                                                          445
                                                    </span>
                                                        】
                                                  </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <?php if ($_smarty_tpl->tpl_vars['detail']->value['haveImg']=="true"){?>
                            <tr>
                                <td class="" style="PADDING-BOTTOM: 10px; HEIGHT: 25px; VERTICAL-ALIGN: middle">
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle; margin:0px auto; text-align: center">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['img'];?>
">
                                </td>
                            </tr>
                        <?php }?>

                        <tr>
                            <td class="" style="PADDING-BOTTOM: 10px; HEIGHT: 25px; VERTICAL-ALIGN: middle">
                            </td>
                        </tr>

                        <tr class="">
                            <td id="" class="" style="BORDER-BOTTOM: #cccccc 1px dashed; LINE-HEIGHT: 1.8; TEXT-INDENT: 25px; FONT-SIZE: 14px">
                                <?php echo $_smarty_tpl->tpl_vars['detail']->value['message'];?>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="comment" style="padding-left:125px">

                    <h2>
                        评论
                    </h2>
                    
                    <!--
                    <table class="ostable" style="width:650">
                        <tbody>
                            <tr>
                                <td class="portrait">
                                  <img align="absmiddle" class="SmallPortrait" alt="玻璃瓶" src="/news/database/img/background/default.jpg">
                                </td>
                                <td class="body">
                                  <div class="ctitle">
                                    1楼：玻璃瓶发表于 2015-03-10 21:06:03
                                  </div>
                                  <div class="post">
                                      你好，健康资讯搜索信息接口的请求参数可否增加一个分类参数字段？分类参数的值传资讯分类接口返回的ID字段的值。即先按分类ID搜索，再按keyword搜索。
                                  </div>       
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>
                     </table>
                     -->

                    <br>
                    <div class="comment_portrait" style="float:left">
                        <img class="LargePortrait" align="absmiddle" title="yi18" alt="yi18" src="/news/database/img/background/avatar.jpg">
                    </div>

                    <div class="comment_form" style="float:left">
                        <textarea id="wmd-input" placeholder="" style="width:650px;height:80px;" name="memo">
                        </textarea>
                        <p>
                            <button class="blg_submit_btn" style="float:right;" type="submit">
                                发表评论
                            </button>
                            <span id="cmt_tip" class="NoData">
                            </span>
                        </p>
                    </div>
                </div>
        </div>

        </div>
         <div class="footer">
                <br>
                <br>
                <a target="_blank" href="http://www.yi18.net/">
                @感谢医药吧提供新闻接口支持
                </a>
        </div>

        <div id="footer" style="background-color:#a78852; width:100%; height:120px; font-size:12px">
            <tr>
                <td>
                    <div style=" clear:both; margin: 0px auto; overflow: hidden; width: 1000px;">
                        <div id="f_con2">
                            <table cellspacing="0" cellpadding="0" bordercolor="#999999" border="0" style="WIDTH: 670px; BORDER-COLLAPSE: collapse; HEIGHT: 92px">
                                <tbody>
                                    <tr>
                                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle">
                                            <img src="/news/database/img/background/sdju.png">
                                        </td>
                                        <td class="link_18" style="TEXT-ALIGN: left; LINE-HEIGHT: 2; PADDING-LEFT: 10px; VERTICAL-ALIGN: middle">上海电机学院 &copy;版权所有 沪ICP备05052050 
                                            <br>临港新城校区：上海市浦东新区临港新城橄榄路1350号 邮编：201306&nbsp; 电话：38223822 传真：38223300 
                                            <br>闵行校区：上海市闵行区江川路690号 邮编：200240 电话：64300980&nbsp;&nbsp;&nbsp; 
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                    &nbsp;
                </td>
            </tr>
        </div>
        
         <div id="social_contact">
            <table cellspacing="0" cellpadding="0" bordercolor="#999999" border="0" style="WIDTH: 148px; BORDER-COLLAPSE: collapse; HEIGHT: 92px">
                <tbody>
                    <tr>
                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle;">
                            关注我们!
                        </td>
                    </tr>
                    <tr>
                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle">
                            <a href="http://weibo.com/u/2997539640" target="_blank">
                                <img onmouseover="socialContact('qrcode_sina', true)" onmouseout="socialContact('qrcode_sina', false)" src="/news/database/img/background/sina.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle">
                            <a href="https://mp.weixin.qq.com/cgi-bin/loginpage?t=wxm2-login&lang=zh_CN" target="_blank">
                            <img onmouseover="socialContact('qrcode_wechat', true)" onmouseout="socialContact('qrcode_wechat', false)" src="/news/database/img/background/wechat.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle; background-color:#a78852">
                            如果你想请我喝杯奶茶,请用支付宝扫描!
                        </td>
                    </tr>
                    <tr>
                        <td style="TEXT-ALIGN: center; VERTICAL-ALIGN: middle">
                            <a href="" target="_blank">
                                <img onmouseover="socialContact('qrcode_Icey', true)" onmouseout="socialContact('qrcode_Icey', false)" src="/news/database/img/background/icey_x.jpg">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table> 

            <div id="qrcode_sina" style="z-index: 13; position: fixed; width: 300px; top: 100px; height: 300px; right: 120px; display: none">
                <div id="s82104472_c" style="Z-INDEX: 5; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; OVERFLOW: hidden; TOP: 0px; LEFT: 0px">
                    <div id="s82104472_content" style="">
                        <img width="300" height="300" src="/news/database/qrcode/qrcode_sina.jpg">
                    </div>
                </div>
            </div>

            <div id="qrcode_wechat" style="z-index: 13; position: fixed; width: 300px; top: 160px; height: 300px; right: 120px; display: none">
                <div id="s16891472_c" style="Z-INDEX: 5; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; OVERFLOW: hidden; TOP: 0px; LEFT: 0px">
                    <div id="s16891472_content" style="">
                        <img width="300" height="300" src="/news/database/qrcode/qrcode_wechat.jpg">
                    </div>
                </div>
            </div>

            <div id="qrcode_Icey" style="z-index: 13; position: fixed; width: 308px; top: 230px; height: 308px; right: 120px; display: none">
                <div id="s16891472_c" style="Z-INDEX: 5; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; OVERFLOW: hidden; TOP: 0px; LEFT: 0px">
                    <div id="s16891472_content" style="">
                        <img width="308" height="308" src="/news/database/qrcode/qrcode_Icey.png">
                    </div>
                </div>
            </div>
        </div>

      <div id="register_login" style="position:absolute; top:20px; right:10px; font-size:22px">
            <?php if ($_smarty_tpl->tpl_vars['login']->value=="false"){?>
                <a style="color:#555555;text-decoration: none;" href="/news/index.php/login/login/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" target="_self">
                    登录
                </a>
                &nbsp;
                <a style="color:#555555;text-decoration: none;" href="/news/index.php/login/register/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" target="_self">
                    注册
                </a>
            <?php }else{ ?>
                <span style="color:#fff000"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
,您好!</span>
                <br>
                <a style="color:#555555;text-decoration:none" href="/news/index.php/login/leave/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" target="_self">
                    &nbsp;&nbsp;退出
                </a>
            <?php }?>
        </div>

         <div id="advertisement" style="position:fixed; width=200px; height:450px; left:0px; top:100px; background-color:#dbed86">
                <a href="<?php echo $_smarty_tpl->tpl_vars['advertise']->value['url'];?>
" target="_blank">
                    <span onclick="this.parentNode.style.display='none'" style="cursor:pointer;float:right;width:35px;background:#500;border:1px solid #555;color:white;font-size:14px">关闭X</span>
                    <br>
                    <img style="float:none; width:150px; height:250px" src="<?php echo $_smarty_tpl->tpl_vars['advertise']->value['img'];?>
">
                    <br>
                    <span style="float:none; TEXT-ALIGN: center; font-size:20px; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['advertise']->value['name'];?>
</span>
                    <br>
                    <img style="flaot:none; width:150px; height:150px" src="<?php echo $_smarty_tpl->tpl_vars['advertise']->value['qrcode'];?>
">
                </a>
        </div>
    </div>
</body>
</html>
<?php }} ?>