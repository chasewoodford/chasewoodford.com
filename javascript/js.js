$(document).ready(function () {
    var a = window.innerWidth;
    if (a >= "500") {
        $(".contact").attr("href", "#contact");
        $(this).localScroll()
    } else {
        $(".contact").attr("href", "mailto:chase@chasewoodford.com")
    }
});

function quickLinks() {
    document.getElementById("footer").style.margin = "-330px";
    document.getElementById("belowFooter").style.visibility = "visible";
    setTimeout(toggle, 500)
}
function toggle() {
    $("#top").one("click", function () {
        document.getElementById("footer").style.margin = "-230px 0 0 0";
        document.getElementById("belowFooter").style.visibility = "hidden"
    })
}
function warp(a) {
    $(this).toggle(function () {
        $("#nav").removeClass("fadeIn").addClass("fadeOut");
        $("html").addClass("whiteOut")
    }, function () {
        return false
    });
    setTimeout(function () {
        window.location = "./" + a + "/index.html"
    }, 1000)
};