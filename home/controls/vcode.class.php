<?php
class Vcode {
    function vcode() {
        $vcode = new Vcode();
        // echo $_SESSION[session_id()]["vcode"];
        echo $vcode;
        $_SESSION[session_id()]["vcode"] = $_SESSION["code"];
    }
}
?>
