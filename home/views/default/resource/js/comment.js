function comment() {
    var value = document.getElementById("wmd-input").value;
    var re = /\s*\S+/;
    var r = value.search(re);
    if (r) {
        alert("您没有输入任何评论!");
    } else {
        Ajax("html", true).post("/news/index.php/login/isLogin", "", function(data){
            if (data.indexOf("yes") != -1) {
                var user_id = document.getElementById("user_id").className;
                var cur_id = document.getElementById("cur_id").className;
                var str = "userid=" + user_id + "&newid=" + cur_id + "&content=" + value;
                Ajax("html", true).post("/news/index.php/comment/comment", str, function(data){
                    document.write(data);
                }); 
            } else {
                alert("请先登录后在评论!");
            }
        });
    }
}
