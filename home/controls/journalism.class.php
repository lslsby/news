<?php
class Journalism {
    function journalism() {
        // set_time_limit(0);
        $url = 'http://api.yi18.net/news/list?page=';
        $read = @file_get_contents("page.txt");
        $page = empty($read) ? 1 : $read;
        $newUrl = $url . $page;

        $str = file_get_contents($newUrl);
        // file_put_contents('fja.txt', $str);
        $json = json_decode($str, true);
        $success = $json['success'];
        $array = $json['yi18'];

        echo 'success = ' . $json['success'] . '<br>';
        echo 'count() = ' . count($json['yi18']) . '<br>';

        while ($success && count($array) > 0) {
            echo 'page = ' . $page . '<br>';
            file_put_contents("page.txt", $page);
            $jour = D("journalism");
            $category = D("category");
            $message = D("message");
            foreach($array as $value) {
                //先取出图片，保存到制定的位置
                $photoUrl = 'http://www.yi18.net/';
                if (!empty($value['img'])) {
                    $src = $photoUrl . $value['img'];
                    $des = PROJECT_PATH . 'database/' . $value['img'];
                    copy($src, $des);
                }

                $value['time'] = strtotime($value['time']);
                $tmp = $category->field('id')->where(array('name' => $value['tag']))->select();
                // echo $tmp[0]['id'] . '<br>';
                $value['tag'] = $tmp[0]['id'];
                // var_dump($jour);
                // var_dump($value);
                $jour->insert($value);

                //得到新闻的具体类容
                $url_mess = "http://api.yi18.net/news/show?id=" . $value["id"];
                $mess = file_get_contents($url_mess);
                $json_mess = json_decode($mess, true);
                $value_mess = $json_mess['yi18'];
                // echo $value_mess["message"];
                @$message->insert($value_mess);
            }
            $page++;
            $newUrl = $url . $page;

            $str = file_get_contents($newUrl);
            $json = json_decode($str, true);
            $success = $json['success'];
            $array = $json['yi18'];
        }
    }

    // function message() {
        // $data = D("journalism");
        // $id = $data->field("id")->select();
        // $readId = file_get_contents("currentId.txt");
        // $current = empty($readId) ? $id[0]['id'] : $readId;
    // }

    function category() {
        $url = 'http://api.yi18.net/news/newsclass';
        $str = file_get_contents($url);
        $json = json_decode($str, true);
        $success = $json['success'];
        $array = $json['yi18'];

        if ($success && count($array) > 0) {
            $category = D("category");
            foreach ($array as $value) {
                $category->insert($value);
            }
        }
    }

    function update() {
        $id = file_get_contents("id.txt");
        echo $id . "<br>";
        $url_mess = "http://api.yi18.net/news/show?id=" . $id;
        echo $url_mess . "<br>";
        $mess = file_get_contents($url_mess);
        echo $mess;
        $json = json_decode($mess, true);
        $success = $json['success'];
        $array = $json['yi18'];
        $jour = D("journalism");
        $category = D("category");
        $message = D("message");
        while ($success && (count($array) > 0)) {
            
            if (isset($array["success"]) && !$array["success"]) {
                break;
            }

            //先取出图片，保存到制定的位置
            $photoUrl = 'http://www.yi18.net/';
            if (!empty($array['img'])) {
                $src = $photoUrl . $array['img'];
                $des = PROJECT_PATH . 'database/' . $array['img'];
                copy($src, $des);
            }

            $array['time'] = strtotime($array['time']);
            $tmp = $category->field('id')->where(array('name' => $array['tag']))->select();
            $array['tag'] = $tmp[0]['id'];
            $jour->insert($array);

            //得到新闻的具体类容
            @$message->insert($array);

            $id++;

            $url_mess = "http://api.yi18.net/news/show?id=" . $id;
            $mess = file_get_contents($url_mess);
            $json = json_decode($mess, true);
            $success = $json['success'];
            $array = $json['yi18'];
        }
        file_put_contents("id.txt", $id);

    }
}
?>
