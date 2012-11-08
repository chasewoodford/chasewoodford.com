<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
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
                        say hello
                    </h3>
                </header>
                <section class="content">
                        <p class="lead left">
                            I'm always happy to chat. Feel free to drop me a line.
                        </p>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                        <form id="ajax-contact-form">
                            <fieldset class="info_fieldset">
                                <div id="note"></div>
                                <div id="fields">
                                    <div style="display:inline;float:left; width:18%">
                                        <label for="name">Name</label>
                                    </div>
                                    <div style="display:inline;float:left; width:80%">
                                        <input id="name" class="textbox" type="text" tabindex="1" name="name" value="" spellcheck="false" autofocus /><br />
                                    </div>
                                    <div style="display:inline;float:left; width:18%">
                                        <label for="email">Email</label>
                                    </div>
                                    <div style="display:inline;float:left; width:80%">
                                        <input id="email" class="textbox" type="email" tabindex="2" name="email" value="" spellcheck="false" /><br />
                                    </div>
                                    <div style="display:inline;float:left; width:18%">
                                        <label for="comments">Comments</label>
                                    </div>
                                    <div style="display:inline;float:left; width:80%">
                                        <textarea id="comments" class="textbox textbox2" tabindex="3" name="message" rows="4" cols="50" spellcheck="true"></textarea>
                                    </div>
                                    <div>
                                        <input class="formSend btn btn-large btn-primary" type="submit" tabindex="4" value="Send Message" />
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    <?php
                    include ("../social.php");
                    ?>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>