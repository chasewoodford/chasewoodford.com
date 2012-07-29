<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/compiled/home.css">
</head>
<body id="top">
<div>
    <img src="images/logo.png" alt="Chase Woodford &#124; Designer &amp; Developer"/>
</div>
<h1>chasewoodford.com</h1>
<p>
    This site was taken down because <%=reason%>. It will be back up <%=deadline%>. In the meantime, you can find me on Twitter @chase1263070.
</p>

<?php get_header(); ?>

<div id="post-area">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="stumblr-title"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
            <div class="stumblr-content">
                <?php if ( has_post_thumbnail() ) { ?><div class="stumblr-image"><?php the_post_thumbnail( 'stumblr-large-image' );  ?></div><?php } ?>
                <?php the_content(''); ?>
            </div>

            <div class="stumblr-meta">
                <p><span class="stumblr-date"><?php the_time(get_option('date_format')); ?></span> <span class="stumblr-category"> <?php the_category(', ') ?></span></p>
            </div>
            <div class="clear"></div></div><!-- end post -->

        <?php endwhile; ?>

    <?php else : ?>
    <?php endif; ?>

    <?php stumblr_pagination(); ?>
    <?php echo paginate_links( $args ) ?>

</div>

<?php get_footer(); ?>



<!--<div id="contact">-->
<!--<div class="content">-->
<!--<p>-->
<!--Shoot me a note! <a class="inline" href="#top" onclick="leavingContact();">Click here to go back</a>.-->
<!--</p>-->
<!--<div id="form">-->
<!--<form id="ajax-contact-form" action="javascript:alert('success!');">-->
<!--<fieldset class="info_fieldset">-->
<!--<div id="note"></div>-->
<!--<div id="fields">-->
<!--<label for="name">Name</label>-->
<!--<input id="name" class="textbox" type="text" tabindex="1" name="name" value="" spellcheck="false" /><br />-->
<!--<label for="email">Email</label>-->
<!--<input id="email" class="textbox" type="email" tabindex="2" name="email" value="" spellcheck="false" /><br />-->
<!--<label for="comments">Comments</label>-->
<!--<textarea id="comments" class="textbox textbox2" tabindex="3" name="message" rows="10" cols="50" spellcheck="true"></textarea>-->
<!--<input class="formSend btn btn-large btn-primary" type="submit" tabindex="4" value="Send Message" />-->
<!--<input class="formClear btn btn-large btn-danger" type="reset" tabindex="5" value="Clear" />-->
<!--</div>-->
<!--</fieldset>-->
<!--</form>-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash; end contact &ndash;&gt;-->
<!--<footer id="footer">-->
<!--<div id="quickLinks">-->
<!--<p>-->
<!--<a href="#" onClick="quickLinks();">Quick links &#187;</a>-->
<!--</p>-->
<!--</div>-->
<!--<div id="copyright" role="contentinfo">-->
<!--<p>-->
<!--&copy; 2012 chasewoodford.com-->
<!--</p>-->
<!--</div>-->
<!--<div id="belowFooter">-->
<!--<ul>-->
<!--<li><a href="https://twitter.com/#!/chase1263070" title="Twitter"><i class="social">t</i></a></li>-->
<!--<li><a href="http://www.linkedin.com/in/chasewoodford" title="LinkedIn"><i class="social">i</i></a></li>-->
<!--<li><a href="http://www.last.fm/music/Chase+Woodford/Long+Story+Short" title="last.fm"><i class="social">6</i></a></li>-->
<!--<li><a href="http://pinterest.com/chasewoodford/" title="Pinterest"><i class="social">&</i></a></li>-->
<!--<li><a href="#" title="Download resume"><i class="social">c</i></a></li>-->
<!--<li><a href="#contact" title="Contact me"><i class="social">?</i></a></li>-->
<!--</ul>-->
<!--</div>-->
<!--</footer>&lt;!&ndash; end footer &ndash;&gt;-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="javascript/jquery-1.7.min.js"><\/script>')</script>
<script src="javascript/contact_form.js"></script>
<script src="javascript/jquery-scrollTo-1.4.2-min.js"></script>
<script src="javascript/jquery-localscroll-1.2.7-min.js"></script>
<script src="javascript/js.js"></script>
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