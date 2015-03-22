<?php

class LoginAction extends Common {
    function login() {
        if ($_GET["page"] == "main") {
            $_SESSION["page"] = "main";
        }else {
            $_SESSION["id"] = $_GET["id"];
        }
        $this->display();
    }

    function loginButton() {
        $GLOBALS["debug"] = 0;
        $_SESSION[session_id()]["login"] = "true";
        $user = D("user");
        $record = $user->where(array("email" => $_POST["email"]))->select();
        $_SESSION[session_id()]["user"] = $record[0];
        //如果是从主页面登录过来的，则直接跳到主页面
        if ($_SESSION["page"] == "main") {
            unset($_SESSION["page"]);
            $this->success("登录成功！", 3, "index/index");
        } else {
            $id = $_SESSION["id"];
            unset($_SESSION["id"]);
            $this->redirect("index/show/id/" . $id);
        }
    }

    function validateLogin() {
        $user = D("user");
        if (isset($_POST["password"])) {
            $record = $user->where(array("email" => $_POST["email"], "password" => $_POST["password"]))->select();
            if (count($record) == 1) {
                echo "yes";
            } else {
                echo "no";
            }
        } else {
            $record = $user->where(array("email" => $_POST["email"]))->select();
            if (count($record) == 1) {
                echo "yes";
            } else {
                echo "no";
            }
        }
    }

    function register() {
         if ($_GET["page"] == "main") {
            $_SESSION["page"] = "main";
        }else {
            $_SESSION["id"] = $_GET["id"];
        }
        $this->display();
    }

    function registerButton() {
        $GLOBALS["debug"] = 0;
        $array["username"] = $_POST["username"];
        $array["email"] = $_POST["email"];
        $array["register_time"] = time();
        $array["password"] = $_POST["password"];
        $user = D("user");
        $user->insert($array);
        //如果是从主页面登录过来的，则直接跳到主页面
        if ($_SESSION["page"] == "main") {
            $this->success("注册成功！", 3, "index/index");
        } else {
            $id = $_SESSION["id"];
            $this->redirect("index/show/id/" . $id);
        }
    }

    function validateRegister() {
        $GLOBALS["debug"] = 0;
        if ($_POST["tag"] == "vcode") {
            if ($_SESSION[session_id()]["vcode"] == strtoupper($_POST["value"])) {
                echo "yes";
            } else {
                echo "no";
            }
            // echo $_SESSION[session_id()]["vcode"];
            // echo session_id();
        } else {
            if (trim($_POST["value"]) == '') {
                echo "no";
                return;
            }
            if ($_POST["tag"] == "email") {
                if (!filter_var($_POST["value"], FILTER_VALIDATE_EMAIL)) {
                    echo "no";
                    return;
                }
            }
            $user = D("user");
            $array = $user->where(array($_POST["tag"]=>$_POST["value"]))->select();
            // echo count($array);

            if (count($array) > 0) {
                echo "no";
            } else {
                echo "yes";
            }
        }
    }

    function leave() {
        unset($_SESSION[session_id()]["login"]);
        unset($_SESSION[session_id()]["user"]);
        session_destroy();
        //如果是从主页面登录过来的，则直接跳到主页面
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $this->redirect("index/show/id/" . $id);
        } else {
            unset($_SESSION["page"]);
            $this->success("退出成功！", 3, "index/index");
        }
    }

    function isLogin() {
        $GLOBALS["debug"] = 0;
        if (isset($_SESSION[session_id()]["login"])) {
            echo "yes";
        } else {
            echo "no";
        }
    }
}
?>
