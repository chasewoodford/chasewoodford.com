
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
<div class="pulse">
    <img src="images/logo.png" alt="Chase Woodford &#124; Designer &amp; Developer"/>
</div>
<h1>chasewoodford.com</h1>
<p class="parking">
    This site was taken down because <&#37;=reason&#37;>. It will be back up <&#37;=deadline&#37;>.
</p>

<?php
require('./blog/wp-blog-header.php');
?>

<?php
$posts = get_posts('numberposts=1&order=DSC&orderby=post_title');
foreach ($posts as $post) : start_wp(); ?>
    <?php the_date(); echo "<br />"; ?>
    <?php the_title(); ?>
    <?php the_excerpt(); ?>
    <?php
endforeach;
?>

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

<?php
include ("./blog/wp-content/themes/stumblr/footer.php");
?>
</body>