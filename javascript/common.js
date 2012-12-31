$(window).scroll(function () {
    if ($(window).scrollTop() > 30) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});