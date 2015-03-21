function validate(id, async) {
    var obj = document.getElementById(id);
    var value = obj.value;
    var success = true;
    var span1 = document.getElementById(id + "_true");
    var span2 = document.getElementById(id + "_false");

    if (typeof(async) == "undefined") {
        async = true;
    }

    if (id.indexOf("repeat_password") != -1) {
        var pas = document.getElementById("password").value;
        if (value == pas && value.length != 0 && pas.length != 0) {
            span1.style.display = "block";
            span2.style.display = "none";
            success = true;
        } else {
            span1.style.display = "none";
            span2.style.display = "block";
            success = false;
        }
    } else {
        // alert(id);
        // alert(value);
        Ajax("html", async).post("/news/index.php/login/validateRegister", "tag=" + id + "&value=" + value + "&random=" + Math.random(), function(data) {
            // alert(data);
            // alert(typeof(data));
            if (data.indexOf("yes") != -1) {
                span1.style.display = "block";
                span2.style.display = "none";
                success = true;
            } else {
                span1.style.display = "none";
                span2.style.display = "block";
                success = false;
            }
        }) ;
    }

    return success;
}

function register() {
    var arr = new Array("username", "email", "repeat_password", "vcode");
    var value = new Array();
    var success = true;

    for (var i = 0; i < arr.length; i++) {
        success = validate(arr[i], false);
        // alert(arr[i] + " " + success);
        var obj = document.getElementById(arr[i]);
        value[i] = obj.value;
        if (arr[i] == "repeat_password") {
            arr[i] = "password";
            value[i] = hex_md5(obj.value);
        }
    }

    if (!success) {
        alert("您填写的信息有误!");
        return;
    }

    var str = "";
    for (var i = 0; i < value.length; i++) {
        str = str + arr[i] + "=" + value[i] + "&";
    }

    // alert(str);

    Ajax("html", true).post("/news/index.php/login/registerButton", str, function(data) {
        // alert(data);
        document.write(data);
    });

}
