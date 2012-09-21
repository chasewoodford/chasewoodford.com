<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="contact">
<div class="wrapper">
    <div class="main-content">
        <?php
        include ("../header.php");
        ?>

        <div class="grid-8">
            <?php
            require('../blog/wp-blog-header.php');
            ?>

            <article class="grid-8 hero post type-post">
                <header>
                    <h3 class="title-background post-title">
                        contact
                    </h3>
                </header>
                <section class="content">
                    <span class="stumblr-other-right">
                        Link to social media
                    </span>
                    <p>
                        I generally don't take on freelance projects unless they are really awesome. But I'm always happy to chat it up free of charge. Drop me a line!
                    </p>
                    <div>
                        <form id="ajax-contact-form">
                            <fieldset class="info_fieldset">
                                <div id="note"></div>
                                <div id="fields">
                                    <div style="float:left; width:50%">
                                        <label for="name">Name</label>
                                        <input id="name" class="textbox" type="text" tabindex="1" name="name" value="" spellcheck="false" autofocus /><br />
                                        <label for="email">Email</label>
                                        <input id="email" class="textbox" type="email" tabindex="2" name="email" value="" spellcheck="false" /><br />
                                    </div>
                                    <div style="float:left; width:50%">
                                        <label for="comments">Comments</label>
                                        <textarea id="comments" class="textbox textbox2" tabindex="3" name="message" rows="10" cols="50" spellcheck="true"></textarea>
                                    </div>
                                    <div style="float:left; width: 100%;">
                                        <input class="formSend btn btn-large btn-primary" type="submit" tabindex="4" value="Send Message" />
                                        <input class="formClear btn btn-large btn-danger" type="reset" tabindex="5" value="Clear" />
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>