$(document).ready(function () {
    var b = window.innerWidth;
    if (b >= "500") {
        $(".contact").attr("href", "#contact");
        $(this).localScroll();
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

function warp(b) {
    $(this).toggle(function () {
        $("#nav").removeClass("fadeIn").addClass("fadeOut");
        $("html").addClass("whiteOut")
    }, function () {
        return false
    });
    if (b == "blog") {
        setTimeout(function () {
            window.location = "./" + b + "/index.php"
        }, 1000)
    } else {
    setTimeout(function () {
        window.location = "./" + b + "/index.html"
    }, 1000)}
};