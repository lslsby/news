function validate(id, async) {
    var success = true;
    var span1 = document.getElementById(id + "_true");
    var span2 = document.getElementById(id + "_false");

    if (typeof(async) == "undefined") {
        async = true;
    }

    var email = document.getElementById("email").value;

    if (id.indexOf("email") != -1) {
        Ajax("html", async).post("/news/index.php/login/validateLogin", "email=" + email, function(data){
            if (data.indexOf("yes") != -1) {
                span1.style.display = "block";
                span2.style.display = "none";
                success = true;
            } else {
                span1.style.display = "none";
                span2.style.display = "block";
                success = false;
            }
        });
    } else if (id.indexOf("password") != -1) {
        var password = document.getElementById("password").value;
        password = hex_md5(password);
        var str = "email=" + email + "&password=" + password;
        Ajax("html", async).post("/news/index.php/login/validateLogin", str, function(data){
            if (data.indexOf("yes") != -1) {
                span1.style.display = "block";
                span2.style.display = "none";
                success = true;
            } else {
                span1.style.display = "none";
                span2.style.display = "block";
                success = false;
            }
        });
    } else if (id.indexOf("vcode") != -1) {
        var vcode = document.getElementById("vcode").value;
        Ajax("html", async).post("/news/index.php/login/validateRegister", "tag=vcode" + "&value=" + vcode, function(data){
            if (data.indexOf("yes") != -1) {
                span1.style.display = "block";
                span2.style.display = "none";
                success = true;
            } else {
                span1.style.display = "none";
                span2.style.display = "block";
                success = false;
            }
        });
    }
    return success;
}

function login() {
    var arr = new Array("email", "password", "vcode");
    var success = true;

    for (var i = 0; i < arr.length; i++) {
        success = validate(arr[i], false);
    }

    if (!success) {
        alert("您填写的信息有误!");
        return;
    }

    var str = "email=" + document.getElementById("email").value;

    Ajax("html", true).post("/news/index.php/login/loginButton", str, function(data) {
        document.write(data);
    });
    
}
