<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; Contact</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://www.chasewoodford.com/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="contact">
<div class="wrapper">
    <div class="content-wrapper">
        <?php
        include ('../header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('../blog/wp-blog-header.php');
            ?>
            <article class="grid-8">
                <header>
                    <h3 class="page-title-bar">
                        <div class="page-title">say hello</div>
                    </h3>
                </header>
                <section>
                    <p class="lead-font">
                        I'm always happy to chat. Feel free to drop me a line.
                    </p>
                    <p>
                        I do my best to get back to everyone who takes the time to get in touch with me. And though I do have a full time job, I always entertain conversations about taking on freelance work, helping out with open source projects or anything else that may be on your mind. There's nothing better than talking a little shop.
                    </p>
                    <form id="ajax-contact-form" class="well formcontainer">
                        <fieldset class="info_fieldset">
                            <p id="comment-notes">
                                Required fields are marked <span class="required">*</span>
                            </p>
                            <div id="note"></div>
                            <div id="fields">
                                <div class="form-label">
                                    <label for="name">Name</label><span class="required">&nbsp;*</span>
                                </div>
                                <div class="form-input">
                                    <input id="name" class="textbox" type="text" tabindex="1" name="name" value="" spellcheck="false" autofocus /><br />
                                </div>
                                <div class="form-label">
                                    <label for="email">Email</label><span class="required">&nbsp;*</span>
                                </div>
                                <div class="form-input">
                                    <input id="email" class="textbox" type="email" tabindex="2" name="email" value="" spellcheck="false" /><br />
                                </div>
                                <div class="form-label">
                                    <label for="comments">Comments</label>
                                </div>
                                <div class="form-textarea">
                                    <textarea id="comments" class="textbox textbox2" tabindex="3" name="message" cols="45" rows="8" spellcheck="true"></textarea>
                                </div>
                                <div>
                                    <input class="right btn btn-large btn-primary" type="submit" tabindex="4" value="Send Message" />
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <?php
                    include ('../social.php');
                    ?>
                </section>
            </article>
        </div>
    </div>
</div>

<?php
include ('../blog/wp-content/themes/v2/footer.php');
?>