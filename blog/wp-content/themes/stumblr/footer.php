<footer class="grid-8" style="position: relative; clear: both; height: 40px; margin-bottom: 0; margin-top: -40px;">
     <div class="copyright" role="contentinfo">
        <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>&nbsp;&#8226;&nbsp;RSS</p>
     </div>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/javascript/jquery-1.7.min.js"><\/script>')</script>
<script src="/javascript/contact_form.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script src="/javascript/chirp.min.js"></script>
<script>Chirp({
    user: 'chase1263070', //Twitter username
    max: 1, //Maximum number of tweets to show
    count: 100, //Total tweets to retrieve
    retweets: false, //Show/Don't show retweets
    replies: false,  //Show/Don't show replies
    cacheExpire: 1000 * 60 * 2, //Number of milliseconds to cache tweets
    target: 'tweet-container', //Where the tweet gets loaded
    templates: {
        tweet: '<div class="quote-before">&#8220;</div><div class="tweet"><p>{{html}}</p></div><div class="quote-after">&#8221;</div><div class="attribute">{{time_ago}}&nbsp;via&nbsp;{{source}}</div><div class="twitter-button"><a href="https://twitter.com/chase1263070" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @chase1263070</a></div>'
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