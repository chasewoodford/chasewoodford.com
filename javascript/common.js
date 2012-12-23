$(window).scroll(function () {
    if ($(window).scrollTop() > 40) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});