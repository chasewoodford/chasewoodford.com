// Chirp
Chirp({
    user: 'chase1263070', //Twitter username
    max: 1, //Maximum number of tweets to show
    count: 1, //Total tweets to retrieve
    retweets: false, //Show/Don't show retweets
    replies: false,  //Show/Don't show replies
    cacheExpire: 1000 * 60 * 2, //Number of milliseconds to cache tweets
    target: 'tweet-container', //Where the tweet gets loaded
    templates: {
        tweet: '<div class="quote-before icon-quote-right-alt"></div><div class="tweet"><p>{{html}}</p></div><div class="quote-after icon-quote-left-alt"></div><div class="left attribute twitter-attribute">{{time_ago}}&nbsp;via&nbsp;{{source}}</div><div class="right twitter-button"><a href="https://twitter.com/chase1263070" class="twitter-follow-button attribute" data-show-count="false" data-lang="en">Follow @chase1263070</a></div>'
    }
})

// add class to header after scroll to add dropshadow effect
$(window).scroll(function () {
    if ($(window).scrollTop() > 30) {
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