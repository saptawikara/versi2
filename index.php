<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Saptawikara Project, Freelance Web Designer Portfolio</title>
    <meta name="description" content="Front end web designer/developer skilled in HTML, CSS and CMS integration. I create clean, professional, functional websites." />
    <meta name="keywords" content="Freelance web designer, website design UK, website design Kent, web designer, web design" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <script src="assets/googleapis/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <link href="assets/css/style.css" rel="stylesheet" id="timeofdaystyle">
    <link href="assets/css/style-dark.css" rel="stylesheet" id="timeofdaystyle">
    <link href="assets/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!--
<link href="maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <script type="text/javascript" src="assets/typekit/hsq6jsn.js"></script>
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="#portfolio" title="Portfolio">Portfolio</a></li>
            <li><a href="#about" title="Who Am I">Who Am I</a></li>
            <li><a href="#contact" title="Contact Me">Contact Me</a></li>
        </ul>
    </nav>

    <header>
        <ul>
            <li id="logo"><a href="www_toby-powell_default.html" title="Toby Powell - Freelance Web designer">toby powell</a></li>
            <li id="clock">
                <canvas class="CoolClock:toby"></canvas>
            </li>
            <li id="expand">
                <div id="oneN"></div>
                <div id="twoN"></div>
                <div id="threeN"></div>
            </li>
        </ul>
    </header>

    <section id="slider">
        <div id="sequence">
            <ul class="sequence-canvas">


                <li class="animate-in">
                    <div class="slide1">
                        <p>
                            <p>design and build of Jogjakata Indonesia Website</p>
                        </p>
                    </div>
                    <div class="pic pic1">
                        <img src="assets/images/uploads/pics/slider.png" alt="home slider"></div>
                </li>

                <!-- Slider start -->
                <?php 
              //  for($i=1;$i<4;$i++){
                ?>
                <li class="animate-in">
                    <div class="slide2<?php //echo $i; ?>">
                        <p>
                            <p>Read Thai Learning Cards IOS App</p>
                            <p>
                            <a target="_blank" title="Get the app" href="#">
                                <img src="assets/images/uploads/pics/apple_badge.png" alt="Get the app"></a>
                            </p>
                        </p>
                    </div>
                    <div class="pic pic2">
                        <img src="assets/images/uploads/pics/apps.jpg" alt="home slider">
                    </div>
                </li>
                <?php
             //   }   
                ?>
                <!-- slider end -->
            </ul>

        </div><a href="javascript:;" class="sequence-prev"><i
class="fa fa-chevron-left"></i></a>
        <a href="javascript:;" class="sequence-next"><i
class="fa fa-chevron-right"></i></a>
        <ul class="sequence-pagination">
            <li>&bull;</li>
            <li>&bull;</li>
        </ul>
    </section>

    <section id="intro_para">
        <h3>Hi, I'm Toby. I'm a front end web designer/developer and 3d visualiser, skilled in HTML, CSS and CMS integration. I create clean, professional, functional websites.</h3>
    </section>
    
    <section class="wrapper">
        <section id="portfolio">
            <h1 class="secHeading">Portfolio</h1>
            <ul id="og-grid" class="og-grid">

                <?php
                for($i=0;$i<10;$i++){
                ?>
                <li>
                    <a href="#" data-largesrc="assets/images/uploads/pics/cs-preview.png" data-title="Bootstrap Themes" data-description="In my spare time I like to build Bootstrap themes as a side project. This keeps my bootstrap framework skills fresh and allows me to see what kind of themes I can come up with, as well as make a bit of extra pocket money on the side">
                        <img src="assets/images/uploads/pics/CityStrap-thumb.jpg" alt="Bootstrap Themes"><span class="overlay"><p>Bootstrap Themes<br> <span
class="more_button">SEE MORE</span></p>
                        </span>
                    </a>
                </li>
                <?php
                }
                ?>
                
   
                
            </ul>
        </section>
    </section>
    <section id="about">
        <section id="vid_wrapper">
            <video autoplay="true" loop="loop" preload="auto" muted="muted" id="videoLoop">
                <source src="http://www.toby-powell.com/videos/bkk.webm" type="video/webm" />
                <source src="http://www.toby-powell.com/videos/bkk.mp4" type="video/mp4" />
                <source src="http://www.toby-powell.com/videos/bkk.ogv" type="video/ogg" />
            </video>
        </section>
        <section class="cs_intro center">
            <p>I’m Toby Powell, a front-end web designer and 3d Visualiser based in East Sussex. I’m into all things web, 3d and mobile. I’ve spent the last 4 years in Thailand, during which time i designed, built and maintained the Vogue Thailand website.</p>
        </section>
        <section id="setup">
            <div class="text">
                <h1>Who Am i?</h1>
                <p>I spend my days crafting websites and creating 3d models. I work for all size of companies from small local businesses right up to huge international brands like Vogue. I’ve just spent 4 years living in Thailand. I speak, read and write very basic Thai. I moved back to the UK inSeptember 2015 and am now settled in Seaford, East Sussex.</p>
                <p> I’m constantly learning web technologies and other design related topics, currently playing around with Javascript and JQuery. I’m a skilled in many areas of design and development. Some of my skills include:</p>
                <ul>
                    <li> HTML5, CSS3, SASS</li>
                    <li>Expression Engine</li>
                    <li>Wordpress</li>
                    <li>Shopify E-commerce platform</li>
                    <li>Working with JQuery plugins</li>
                    <li>Responsive Web Design</li>
                    <li>Bootstrap and Foundation frameworks</li>
                    <li>Jekyll</li>
                    <li>Liquid</li>
                    <li>Markdown</li>
                    <li>Modo</li>
                    <li>Unreal Engine</li>
                    <li>ZBrush</li>
                    <li>Photoshop, Illustrator, Sketch</li>
                </ul>
            </div>
            <img src="assets/images/uploads/pics/macStuff.png" alt="Who Am i?">
            <div class="clear"></div>
        </section>
        <section id="design">
            <div class="text">
                <h2>Design process</h2>
                <p> My Design process always starts with a pencil and paper, scribbling ideas and concepts, thinking about the problem and the solution.</p>
                <p> Once I have an idea of what I want to achieve, I’ll then sit down at my computer and start with wire frames and low level mockups. Then add the imagery, typography design and details.</p>
                <p> One of the things I love about my Job, is the great tools I get to work with every day, here are some of the tools I use in my work.</p>
                <p> I use <a href="http://www.adobe.com/products/photoshop.html" target="_blank" title="Photoshop">Photoshop</a> and <a href="http://bohemiancoding.com/sketch/" title="Sketch" target="_blank">Sketch</a> for my layout and design. I use <a href="http://www.thefoundry.co.uk/products/modo/" target="_blank" title="Modo">Modo</a> and <a href="http://pixologic.com/" title="ZBrush" target="_blank">ZBrush</a> for my 3d work.</p>
            </div>
            <img src="assets/images/uploads/pics/design2.png" alt="Who Am i?">
            <div class="clear"></div>
        </section>
        <section id="dev">
            <img src="assets/images/uploads/pics/dev.png" alt="Who Am i?">
            <div class="text">
                <h2>Development process</h2>
                <p> For development, I write HTML5 and CSS3. I use SASS - a CSS extension. For those interested, the text editor I use is <del>Coda</del> <a href="http://www.sublimetext.com/" title="Sublime Text">Sublime Text</a>, I use it along side <a target="_blank" href="https://incident57.com/codekit/" title="Codekit">CodeKit</a> and <a href="http://www.mamp.info/en/" target="_blank" title="MAMP">MAMP</a> to build sites locally. These are the basic tools I use on every job and are my daily set up. I’m also learning Javascript and JQuery.</p>
                <p> I’ve released my own IOS app: Read Thai Learning Cards, written in objective-c and built in x-code. It’s a learning app for reading thai.</p>
                <p> When time permits I like to create Bootstrap themes to earn a bit of extra pocket money and keep my skills fresh.</p>
                <p> I’m currently available for work and taking on new projects, so please contact me.</p>
            </div>
            <div class="clear"></div>
        </section>
    </section>
    <section id="contact">
        <section class="wrapper" id="contact">
            <h1 class="secHeading">Contact me</h1>
            <p class="center">I'm Currently available for work. If you have a project you'd like to discuss, then please email me via the form below.</p>
            <form id="contact_form" class="contact_form" method="post" action="www_toby-powell_default.html">
                <div class='hiddenFields'>
                   
                </div>
                <p>
                    <input type="text" id="name" name="name" size="40" maxlength="35" placeholder="Your name*" />
                </p>
                <p>
                    <input type="email" id="email" name="from" size="40" maxlength="35" placeholder="Your email*" />
                </p>
                <input type="hidden" id="subject" name="subject" value="Website enquiry from toby-powell.com" />
                <p>
                    <textarea placeholder="Project details*" id="message" name="message" rows="5"></textarea>
                </p>
                <p class="css-select-moz">
                    <select name="required[]" class="css-select">
                       <?php 
                       for($i=0;$i<5;$i++){
                        
                        $a+=100000;
                        $b+=500000;
                        $a1=number_format(($a),0,",",".");
                        $b1=number_format(($b),0,",",".");
                       ?>
                        <option value="Budget: &pound;1500 - &pound;2000">Budget: Rp. <?php echo $a1; ?> - Rp. <?php echo $b1; ?></option>
                       <?php
                   }
                       ?>
                    </select>
                </p>
                <p id="captcha">Please enter the word you see in the image below:</p>
                <p><img src="assets/images/captchas/1476843726.93.jpg" width="140" height="30" style="border:0;" alt=" " />
                    <br />
                    <input type="text" name="captcha" value="" maxlength="20" />
                </p>
                <p>
                    <input type="submit" name="submit" value="submit form" />
                </p>
                <p id="ajax-message"></p>
            </form>
        </section>
    </section>
    <footer>
<p>&copy; Copyright saptawikara.com 2016 This site was hand coded with HTML5, CSS3, Javascript.</p>
<p id="sn-links"><a href="http://uk.linkedin.com/in/tobypowell" title="Linked-in">
    <i class="fa fa-linkedin"></i></a><a href="https://facebook.com/saptawikara" title="Facebook">
    <i class="fa fa-facebook"></i></a><a href="https://twitter.com/saptawikara" title="Twitter">
    <i class="fa fa-twitter"></i></a><a href="http://instagram.com/saptawikara" title="Instagram">
    <i class="fa fa-instagram"></i></a></p>
    </footer>
    <!-- <div class="cssa"><a href="http://www.cssawards.net/nominee/toby-powell/" target="_blank">toby-powell.com featured on CSS Awards</a></div> -->
    <script src="assets/js/jquery.sequence-min.js"></script>
    <!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
    <!--<script src="assets/js/coolclock.js"></script> -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/grid.js"></script>
    <script src="assets/js/bjqs-1.3.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/min/scripts-ck.js"></script>
    <!--<script src="assets/js/contact-form-ajax.js"></script> -->
</body>
</html>