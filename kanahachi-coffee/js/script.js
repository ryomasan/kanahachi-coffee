$(function () {
    $('#contents div[id != "home"]').hide();
    $("a").click(function () {
        $("#contents div").hide();
        $($(this).attr("href")).show();
        return false;
    })
})

