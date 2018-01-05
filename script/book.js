$(document).ready(function () {
    $(".catagory").click(function () {
        var pre = "#list_" + this.id;
        $(pre).slideToggle("slow");
    });

    $(".list_div").click(function () {
        var tmp = this.id;
        $.ajax({
            url: "include/check_login.php",
            type: "get",
            data: '',
            async: false,
            success: function (data) {
                r = JSON.parse(data);
                if (r["status"] === "no") {
                    sessionStorage.setItem("url", "book_content.php?id=" + get_chapter(tmp) + "#" + get_section(tmp));
                    $("#login").modal("show");
                }
                else {
                    if((r["priv"]!==null && r["priv"].indexOf("A")>=0) || get_chapter(tmp)==="010101"){
                        window.location.href = "book_content.php?id=" + get_chapter(tmp) + "#" + get_section(tmp);
                    }
                    else{
                        $("#buy").modal("show");
                    }
                }
            }
        });

    });

});

function get_chapter(str) {
    return str.substr(0, 6);
}

function get_section(str) {
    return str.substr(6, 2);
}

