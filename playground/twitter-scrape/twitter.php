<?php
# Load Twitter class
require_once('TwitterOAuth.php');

# Define constants
define('TWEET_LIMIT', 5);
define('TWITTER_USERNAME', 'chase1263070');
define('CONSUMER_KEY', '7X0e2zqol68AgRCcEAOGGFwZ3');
define('CONSUMER_SECRET', 'DWm1JypdFwgq3rpLdBYjHUUeJgZoq54A9wxih240gWPNcOVtNJ');
define('ACCESS_TOKEN', '55896667-BTHjdBfBxdkTeJi0PBR4gmHWLLAY5xspDq03jwaqp');
define('ACCESS_TOKEN_SECRET', 'IcSgYyzshYfocBA23gMesq5SOsfBfSWw9BHTiml2lCw8x');

# Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

# Migrate over to SSL/TLS
$twitter->ssl_verifypeer = true;

# Load the Tweets
$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => TWEET_LIMIT));

# Example output
if(!empty($tweets)) {
foreach($tweets as $tweet) {

# Access as an object
$tweetText = $tweet['text'];

# Make links active
$tweetText = preg_replace("#(http://|(www.))(([^s<]{4,68})[^s<]*)#", '<a href="http://$2$3" target="_blank">$1$2$4</a>', $tweetText);

# Linkify user mentions
$tweetText = preg_replace("/@(w+)/", '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweetText);

# Linkify tags
$tweetText = preg_replace("/#(w+)/", '<a href="http://search.twitter.com/search?q=$1" target="_blank">#$1</a>', $tweetText);

# Output
echo $tweetText;

}
}