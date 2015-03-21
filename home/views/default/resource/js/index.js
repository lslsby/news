function setTab(id) {
    var menu = document.getElementsByName("menu");
    for (var i = 0; i < menu.length; i++) {
        if (menu[i].id == id) {
            menu[i].className = "hover";
            var pageId = menu[i].id.substr(4);
            var count = 0;
            switchTab(pageId, count)
        } else {
            menu[i].className = "";
        }
    }
}

function loadMore() {
    var menu = document.getElementsByName("menu");
    for (var i = 0; i < menu.length; i++) {
        //看当前的鼠标停留在哪个标签上
        if (menu[i].className == "hover") {
            var loadMore = document.getElementById("get_more");
            var pageId = menu[i].id.substr(4);
            var count = loadMore.className;
            var url = "/news/index.php/index/loadMore/pageId/" + pageId + "/count/" + count;
            Ajax("html", true).get(url, function(data) {
                var obj = eval(data);
                for (var i = 0; i < obj.length; i++) {
                    addNode(loadMore, obj[i]);
                }
                loadMore.className = parseInt(loadMore.className) + 3;
            });
            break;
        }
    }
}

function switchTab(pageId, count) {
    var url = "/news/index.php/index/switchTab/pageId/" + pageId + "/count/" + count;
    Ajax("html", false).get(url, function(data) {
        var remove = document.getElementsByName("mayRemove");
        // alert(remove.length);
        while (remove.length > 0) {
            var node = remove[0];
            node.parentNode.removeChild(node);
        }
        var loadMore = document.getElementById("get_more");
        var obj = eval(data);
        for (var i = 0; i < obj.length; i++) {
            addNode(loadMore, obj[i]);
        }
        loadMore.className = 3;

    });
}

function addNode(loadMore, value) {

    var li = document.createElement("li");
    li.setAttribute("name", "mayRemove");

    var article = document.createElement("div");
    article.className = "article";

    var title = document.createElement("a");
    title.className = "title";
    title.target = "_blank";
    title.href = value.id;
    title.innerHTML = value.title;
    article.appendChild(title);

    var avatar = document.createElement("span");
    avatar.className = "avatar maleskine-author";
    article.appendChild(avatar);

    var br = document.createElement("br");
    article.appendChild(br);

    var content = document.createElement("a");
    content.className = "content";
    content.target = "_blank";
    content.href = value.id;
    content.innerHTML = value.message;
    article.appendChild(content);

    var artitle_info = document.createElement("div");
    artitle_info.className = "artitle-info";

    var author = document.createElement("span");
    author.className = "author";
    author.innerHTML = "作者: " + value.author + " ";
    artitle_info.appendChild(author);

    var span = document.createElement("span");
    var fa = document.createElement("i");
    fa.className = "fa fa-comments-o";
    fa.innerHTML = " ";
    span.appendChild(fa);

    var span2 = document.createElement("span");
    span2.innerHTML = " 10 ";
    span.appendChild(span2);

    artitle_info.appendChild(span);

    var time = document.createElement("span");
    time.className = "time";
    time.innerHTML = "时间: " + value.time;
    artitle_info.appendChild(time);

    article.appendChild(artitle_info);

    li.appendChild(article);
    var thumbnails = document.getElementById("thumbnails");
    thumbnails.insertBefore(li, loadMore);
}

function socialContact(id, over) {
    var obj = document.getElementById(id);

    if (over) {
        obj.style.display = "block";
    } else {
        obj.style.display = "none";
    }
}
