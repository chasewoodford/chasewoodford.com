<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; Designer &amp; Developer</title>

    <link rel="icon" href="/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="home">
<div class="wrapper">
    <?php include ('./header.php') ?>
    <div class="grid-8 hero" role="main">
        <?php require('./blog/wp-blog-header.php') ?>
        <?php
        query_posts( 'cat=-10,-51&posts_per_page=1&orderby=post_date&order=DESC' );
        while ( have_posts() ) : the_post();
        ?>
        <article class="grid-8 main-content hero clearfix">
            <header>
                <h3>
                    <span class="blog-category clearfix">
                        <?php the_category(', ') ?>&nbsp;>
                    </span>
                    <a class="title-bar" href="<?php the_permalink() ?>" title="view full post"><?php the_title(); ?></a>
                </h3>
            </header>
            <section class="content">
                <?php the_excerpt(); ?>
            </section>
        </article>
        <?php
        endwhile;
        ?>
        <article id="tweet-container" class="grid-10 well"></article>
    </div>
</div>
<?php include ('./blog/wp-content/themes/v2/footer.php') ?>
<?php

function buildBaseString($baseURI, $method, $params) { $r = array(); ksort($params); foreach($params as $key=>$value){ $r[] = "$key=" . rawurlencode($value); } return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r)); }


function buildAuthorizationHeader($oauth) { $r = 'Authorization: OAuth '; $values = array(); foreach($oauth as $key=>$value) $values[] = "$key=\"" . rawurlencode($value) . "\""; $r .= implode(', ', $values); return $r; }


$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";


$oauth_access_token = "YOURVALUE"; $oauth_access_token_secret = "YOURVALUE"; $consumer_key = "YOURVALUE"; $consumer_secret = "YOURVALUE";


$oauth = array( 'oauth_consumer_key' => $consumer_key, 'oauth_nonce' => time(), 'oauth_signature_method' => 'HMAC-SHA1', 'oauth_token' => $oauth_access_token, 'oauth_timestamp' => time(), 'oauth_version' => '1.0');


$base_info = buildBaseString($url, 'GET', $oauth); $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret); $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true)); $oauth['oauth_signature'] = $oauth_signature;


// Make Requests $header = array(buildAuthorizationHeader($oauth), 'Expect:'); $options = array( CURLOPT_HTTPHEADER => $header, //CURLOPT_POSTFIELDS => $postfields, CURLOPT_HEADER => false, CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false);


$feed = curl_init(); curl_setopt_array($feed, $options); $json = curl_exec($feed); curl_close($feed);


$twitter_data = json_decode($json);

print_r($twitter_data);

?>
