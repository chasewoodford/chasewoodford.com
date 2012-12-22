$(window).scroll(function () {
    if ($(window).scrollTop() > 20) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});