<?php
	class Index {
    
        private $curPageTag = 1;
        private $curPageCount = 3;

		function index(){
			// echo "<b>欢迎使用《细说PHP》中的BroPHP框架1.0, 第一次访问时会自动生成项目结构：</b><br>";
			// echo '<pre>';
			// echo file_get_contents('D:/AppServ/www/news/runtime/_news_index.php');
			// echo '</pre>';

            $GLOBALS["debug"] = 0;

            // 新闻的菜单
            $category = D("category");
            $menu = $category->select();
            for ($i = 0; $i < count($menu); $i++) {
                $menu[$i]["id"] = "menu" . $menu[$i]["id"];
            }
            $this->assign("menu", $menu);

            $journalism = D("journalism");
            $news = $journalism->limit($this->curPageCount)->where(array("tag" => $this->curPageTag))->order("id desc")->select();

            $news = $this->formatInfo($news);
            $this->assign("news", $news);

            $this->assign("count", $this->curPageCount);
            // var_dump($news);

            $this->addAdvertise();

            //处理是否登录信息
            if (isset($_SESSION[session_id()]["login"])) {
                $this->assign("login", true);
                $this->assign("user", $_SESSION[session_id()]["user"]);
            } else {
                $this->assign("login", false);
            }

            $this->display();
		}		

        private function addAdvertise() {
            //随机的选择一个广告
            $advertise = D("advertisement");
            $num = $advertise->field("count(*) as num")->select();
            $num = $num[0];
            // echo $num["num"];
            $rand = rand(1, $num["num"]);
            $one = $advertise->where(array("id"=>$rand))->select();
            $one = $one[0];
            // var_dump($one);
            $this->assign("advertise", $one);
        }

        private function formatInfo($info) {
            $message = D("message");
             for ($i = 0; $i < count($info); $i++) {
                $mes = $message->where("id = " . $info[$i]["id"])->select();
                $info[$i]["message"] = substr(strip_tags(html_entity_decode($mes[0]["message"])), 0, 500);
                // echo $news[$i]["message"] . "<br>";
                $info[$i]["id"] = "/news/index.php/index/show/id/" . $info[$i]["id"];
                $info[$i]["img"] = "/news/database/" . $info[$i]["img"];
                $info[$i]["time"] = date("F j, Y, g:i a", $info[$i]["time"]);
            }

            return $info;
        }
        
        function show() {
            $GLOBALS["debug"] = 0;
            $id = $_GET["id"];
            $journalism = D("journalism");
            $message = D("message");
            $detail = $journalism->where(array("id"=>$id))->select();
            $detail = $detail[0];
            $array = $message->where(array("id"=>$id))->select();
            $array = $array[0];
            $detail["message"] = $array["message"];
            $detail["message"] = html_entity_decode($detail["message"]);
            // var_dump($detail);
            if (!empty($detail["img"])) {
                $detail["haveImg"] = "true";
            } else {
                $detail["haveImg"] = "false";
            }
            $detail["img"] = "/news/database/" . $detail["img"];
            $detail["time"] = date("F j, Y, g:i a", $detail["time"]);

            $this->assign("detail", $detail);

            $this->addAdvertise();

            //分配一个编辑器
            $this->assign("ck", Form::editor("content"));
            $this->display();
        }

        function loadMore() {
            $GLOBALS["debug"]=0; 
            $journalism = D("journalism");
            $count = $_GET["count"];
            $tag = $_GET["pageId"];
            $news = $journalism->limit($count, 3)->where(array("tag" => $tag))->order("id desc")->select();
            $news = $this->formatInfo($news);
            $news = json_encode($news);
            echo $news;
        }

        function switchTab() {
            $GLOBALS["debug"]=0; 
            $this->loadMore();
        }
	}
