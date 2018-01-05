$(document).ready(function () {
    $(".btn_wrong_post").click(function () {
        $("#post_form").submit();
    });
    $(".btn_wrong_set").click(function () {
        window.location.href="wrong_set.php";
    });
});
