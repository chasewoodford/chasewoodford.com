<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; Portfolio</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://www.chasewoodford.com/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="work">
<div class="wrapper">
    <div class="content-wrapper">
        <?php
        include ('../../header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('../../blog/wp-blog-header.php');
            ?>
            <article>
                <header>
                    <h3>
                    <span class="portfolio-category">
                        portfolio > digital
                    </span>
                    <a class="title-bar" href="http://www.darawarren.com" title="see it live" target="_blank">darawarren.com</a>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">
                        <a class="left screenshot" href="http://www.darawarren.com" title="see it live" target="_blank">
                            <img class="main" src="/images/screenshot-daraWarren.png" alt="darawarren.com">
                        </a>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">Dara Warren</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">darawarren.com</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">April 2013</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Website</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">HTML, CSS, Web Fonts</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title"></div>
                                <div class="table-data">
                                    <a href="http://www.darawarren.com" title="see it live" target="_blank"><i class="icon-globe" aria-hidde="true"></i>&nbsp;<span>see it live &raquo;</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p>
                        A friend of mine approached me for help building her website. She is a brilliant, creative person I got to know initially through work. She recently went part-time so that she could devote more time to her work as an artist. Specifically, writing. She writes children's and young-adult's literature.
                    </p>
                    <p>
                        She had begun shopping her writing around with agents and publishers and was receiving a lot of positive feedback. But she noticed one thing that most of the authors she admired had that she didn't&mdash;a web presence.
                    </p>
                    <p>
                        There were times agents would ask how they could find her on the web or publishers could see more of her work and, unfortunately, she could offer them nothing more than her e-mail address. So she called on me to help her create a site where she could introduce herself and, most importantly, showcase her work. In her words, having a website made her "feel like less of a phony".
                    </p>
                    <p>
                        Working on this project was extremely rewarding&mdash;learning about the ebb and flow of the publishing industry vicariously through a good friend; learning how to make the biggest impact with minimal resources; seeing first hand how website design affects client empowerment and confidence.
                    </p>
                    <br/>
                    <p class="lead">
                        { GoDaddy website builder }
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-daraWarren-001.png" alt="GoDaddy website builder"/>
                        The client had purchased a domain through GoDaddy. Specifically, GoDaddy's Website Builder Personal, a five-page website deal. With the package you get no access to root files or template code, no FTP access, no database storage and no hosting beyond the images you upload through the WYSIWYG (What You See Is What You Get, or 'wiz-ee-wig') editor. And literally, what you see is what you get, or put another way, you get what you pay for. GoDaddy's website builder was quite a challenge to work with.
                    </p>
                    <p>
                        As a designer, it is difficult to work with for several reasons. You're required to pick a template before adding content to your site. Each template has unique features. But the problem is, the base template&mdash;the fonts, colors and styles&mdash;is not directly editable. Some styles are editable using the WYSIWYG editor's built-in toolbars, but options for customization are limited. Likewise, the drag-and-drop modules for forms, images, blocks of text, etc. also allow for very little customization. For example, the contact form is the contact form; no adding or removing labels or inputs without some serious CSS/JavaScript hacking. Pretty much every change to the template we wanted to make required a ton of extra code to make happen. We ultimately ended up re-writing the template from top to bottom, and the limited functionality of the website builder basically doubled the amount of time it took to design the site.
                    </p>
                    <p>
                        As a developer, the website builder is difficult to work with for several other reasons. Because we wanted to customize the site, we had to build our own CSS file to overwrite all the template styles. However, the styles from our custom stylesheet won't apply to the site until it is published. Meaning, we can't adjust our stylesheet and see changes instantly, or even when in preview mode. Each time we made a change to the stylesheet we had to publish and re-load the site outside of GoDaddy's website builder to see the changes in action. Having to do this a hundred times a day really takes the wind out of the sails. Not to mention "hot-coding" like this is a really poor practice. Likewise, having the site look one way inside the website builder and completely different outside means developing blindly, in a guess-and-check fashion, which also really slows things down. The website builder, like most WYSIWYG editors, relies heavily on absolute positioning. Also bad news. This means even the slightest change to content potentially throws off the entire design. This also means you have to place elements in weird places in the WYSIWYG editor to account for styles from your custom stylesheet that will later align the elements correctly once applied outside the website builder. One of the other issues I found with GoDaddy's website builder was the automated mobile view, that could either be enabled or disabled, but not customized and was only slightly editable. Meaning you have the choice of displaying your page in either a poorly conceived, mistmatching design loosely optimized for mobile devices or as it would display in a desktop browser with no optimization for mobile at all.
                    </p>
                    <p>
                        I'd never recommend GoDaddy as a domain/hosting option for any client. In all honesty, I turn down most projects that even hint at using WYSIWYG editors, especially a GoDaddy hosted one, but made an exception here for a friend in need. I learned a lot from the experience, but would not put even my worst enemy through the same.
                    </p>
                    <br/>
                    <p class="lead">
                        { web fonts and theming }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-daraWarren-002.png" alt="Custom web fonts"/>
                        The site features custom web fonts from <a target="_blank" href="http://www.google.com/fonts">Google Fonts<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>: Merriweather and Noticia Text for headers, Open Sans for paragraph text and Strait for small text. The load on the page is relatively small (847 B, ~110ms) and adds a kick of style to some otherwise plain, text-heavy pages. I'm a huge fan of using custom fonts to spice up pages when paired appropriately and used tastefully. It especially made sense to use them in this case, where the writing is really what we want to call attention to.
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-daraWarren-003.png" alt="Close up of theming elements"/>
                        Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Donec non enim in turpis pulvinar facilisis. Ut felis.
                    </p>
                    <br/>
                    <p>
                        To learn more about how this site was designed and developed, <a href="/contact">contact me</a>.
                    </p>
                </section>
                <div class="clearfix"></div>
            </article>
            <?php
            include ('../portfolio-previews.php');
            ?>
        </div>
    </div>
</div>
<?php
include ('../../blog/wp-content/themes/v2/footer.php');
?>