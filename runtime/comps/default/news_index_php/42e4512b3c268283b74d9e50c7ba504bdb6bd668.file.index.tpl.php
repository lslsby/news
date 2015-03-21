<?php /* Smarty version Smarty-3.1.8, created on 2015-03-21 14:41:23
         compiled from "./home/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:733455094700b36aa3-17140481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e4512b3c268283b74d9e50c7ba504bdb6bd668' => 
    array (
      0 => './home/views/default\\index\\index.tpl',
      1 => 1426882192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '733455094700b36aa3-17140481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55094700c08258_37623983',
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'menu' => 0,
    'value' => 0,
    'news' => 0,
    'count' => 0,
    'advertise' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55094700c08258_37623983')) {function content_55094700c08258_37623983($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/sdju.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/index.js"></script>
    <title>健康新闻发布系统</title>
</head>
<body>
    <div id="main">
        <div id="all">
            <div id="tab">
                <div class="menubox">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value){
$_smarty_tpl->tpl_vars["value"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value['id']=="menu1"){?>
                                <li id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" onmouseover=setTab("<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
") name="menu" class="hover"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</li>
                            <?php }else{ ?>
                                <li id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" onmouseover=setTab("<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
") name="menu" class=""><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>

                <div id="contentbox">
                    <div>
                        <ul id="thumbnails">
                            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value){
$_smarty_tpl->tpl_vars["value"]->_loop = true;
?>
                            <li name="mayRemove">
                                <div class="article">
                                    <a class="title" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                    <span class="avatar maleskine-author">
                                        <!--<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" alt="0"> -->
                                    </span>
                                    <br>
                                    <a class="content" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['message'];?>
</a>

                                    <div class="artitle-info">
                                        <span  class="author">作者: <?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
    </span>
                                        <span>
                                            <i class="fa fa-comments-o"> </i>
                                            <span>10</span>
                                        </span>
                                        <span class="time">时间: <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</span>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                            <li id="get_more" style="border-bottom:none" class="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"></li>
                        </ul>

                        <div class="load-more" onclick="loadMore()">
                            <button class="ladda-button" data-method="get" data-color="maleskine" data-size="medium" data-remote="" data-type="script" data-style="slide-left">
                            <span class="ladda-label">点击查看更多</span>
                            <span class="ladda-spinner"></span>
                            </button>
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
            </div>

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

        <div id="" style="background-color:#a78852; width:100%; height:120px">
            <tr>
                <td>
                <!-- <td valign="top" id="table_footer"> -->
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

            <!--
            <div style="position:relative; z-index:3; width:100%; height:120px; bottom: 0px">
                <img style="width:100%; height:150px" src="/news/database/img/background/background.jpg">
            </div>
            -->
        </div>

        <div id="advertisement" style="position:fixed; width=200px; height:450px; left:0px; top:100px; background-color:#dbed86">
            <a href="<?php echo $_smarty_tpl->tpl_vars['advertise']->value['url'];?>
" target="_blank">
                <span onclick="this.parentNode.style.display='none'" style="cursor:pointer;float:right;width:35px;background:#500;border:1px solid #555;color:white">关闭X</span>
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