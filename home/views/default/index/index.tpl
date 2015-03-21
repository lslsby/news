<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<{$res}>/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<{$res}>/css/sdju.css" />
    <script type="text/javascript" src="<{$public}>/js/ajax3.0.js"></script>
    <script type="text/javascript" src="<{$res}>/js/index.js"></script>
    <title>健康新闻发布系统</title>
</head>
<body>
    <div id="main">
        <div id="all">
            <div id="tab">
                <div class="menubox">
                    <ul>
                        <{foreach from=$menu item="value"}>
                            <{if $value.id eq "menu1"}>
                                <li id="<{$value.id}>" onmouseover=setTab("<{$value.id}>") name="menu" class="hover"><{$value.name}></li>
                            <{else}>
                                <li id="<{$value.id}>" onmouseover=setTab("<{$value.id}>") name="menu" class=""><{$value.name}></li>
                            <{/if}>
                        <{/foreach}>
                    </ul>
                </div>

                <div id="contentbox">
                    <div>
                        <ul id="thumbnails">
                            <{foreach from=$news item="value"}>
                            <li name="mayRemove">
                                <div class="article">
                                    <a class="title" target="_blank" href="<{$value.id}>"><{$value.title}></a>
                                    <span class="avatar maleskine-author">
                                        <!--<img src="<{$value.img}>" alt="0"> -->
                                    </span>
                                    <br>
                                    <a class="content" target="_blank" href="<{$value.id}>"><{$value.message}></a>

                                    <div class="artitle-info">
                                        <span  class="author">作者: <{$value.author}>    </span>
                                        <span>
                                            <i class="fa fa-comments-o"> </i>
                                            <span>10</span>
                                        </span>
                                        <span class="time">时间: <{$value.time}></span>
                                    </div>
                                </div>
                            </li>
                            <{/foreach}>
                            <li id="get_more" style="border-bottom:none" class="<{$count}>"></li>
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
            <a href="<{$advertise.url}>" target="_blank">
                <span onclick="this.parentNode.style.display='none'" style="cursor:pointer;float:right;width:35px;background:#500;border:1px solid #555;color:white">关闭X</span>
                <br>
                <img style="float:none; width:150px; height:250px" src="<{$advertise.img}>">
                <br>
                <span style="float:none; TEXT-ALIGN: center; font-size:20px; font-weight:bold"><{$advertise.name}></span>
                <br>
                <img style="flaot:none; width:150px; height:150px" src="<{$advertise.qrcode}>">
            </a>
        </div>
    </div>
</body>
</html>
