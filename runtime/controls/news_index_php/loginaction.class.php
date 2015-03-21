<?php
class LoginAction extends Common {
    function login() {
        $this->display();
    }

    function loginButton() {

    }

    function validateLogin() {

    }

    function register() {
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
        $this->success("注册用户成功！", 5, "index/index");
    }

    function validateRegister() {
        $GLOBALS["debug"] = 0;
        if ($_POST["tag"] == "vcode") {
            if ($_SESSION[session_id()]["vcode"] == strtoupper($_POST["value"])) {
                echo "yes";
            } else {
                echo "no";
            }
            echo $_SESSION[session_id()]["vcode"];
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
}
?>
