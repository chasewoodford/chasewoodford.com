<footer id="footer" class="grid-8">


        <div class="copyright" role="contentinfo" style="clear:both">
            <p style="float:left;margin:0;padding:0;">
                &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
                <span class="bullet">&#8226;</span>
                <a href="<?php bloginfo('url'); ?>/feed?cat=-10">RSS&nbsp;<i class="icon-rss"></i></a>
            </p>
        </div>

</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/javascript/jquery-1.7.min.js"><\/script>')</script>
<script src="/javascript/common.js" type="text/javascript"></script>
<script src="/javascript/prism.js"></script>
<script src="/javascript/contact_form.js"></script>
<script src="/javascript/chirp.min.js"></script>
<script>Chirp({
    user: 'chase1263070', //Twitter username
    max: 1, //Maximum number of tweets to show
    count: 1, //Total tweets to retrieve
    retweets: false, //Show/Don't show retweets
    replies: false,  //Show/Don't show replies
    cacheExpire: 1000 * 60 * 2, //Number of milliseconds to cache tweets
    target: 'tweet-container', //Where the tweet gets loaded
    templates: {
        tweet: '<div class="quote-before icon-quote-right-alt"></div><div class="tweet"><p>{{html}}</p></div><div class="quote-after icon-quote-left-alt"></div><div class="attribute">{{time_ago}}&nbsp;via&nbsp;{{source}}</div><div class="twitter-button"><a href="https://twitter.com/chase1263070" class="twitter-follow-button attribute" data-show-count="false" data-lang="en">Follow @chase1263070</a></div>'
    }
})</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28396921-1']);
    _gaq.push(['_setDomainName', 'chasewoodford.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</html>