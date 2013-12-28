// After scroll, add class to header to init dropshadow
$(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});

// Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-28396921-1']);
_gaq.push(['_setDomainName', 'chasewoodford.com']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();