<?php
class Comment {
    function comment() {
        $comment = D("comment");
        $_POST["time"] = time();
        $comment->insert($_POST);
        $this->redirect("index/show/id/" . $_POST["newid"]);
    }
}
?>
