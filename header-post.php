<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Riots</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Debug: <?php echo get_template_directory_uri(); ?>/css/style.css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Hurricane&family=Istok+Web&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MDD6789GX2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());


    gtag('config', 'G-MDD6789GX2');
    </script>	
</head>

<body>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M5FDS5PL');</script>
        <!-- End Google Tag Manager -->


        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5FDS5PL"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Creative Riots",
        "url": "https://creativeriots.co/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
        }
        }
        </script>


        
    <!-- STAY NAVBAR -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <div class="soon">
        <h2>COMING SOON</h2>
        <i class="fa-solid fa-code"></i>
    </div>
    <div class="loader">
        <div class="multi-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


    <div class="left-navbar" id="navbar-side">
        <div class="left-nav">
            <div class="color-mode">
            </div>
            <div class="social-sec">
                <div class="social-icons">
                    <div class="social-icon link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="">
                        <a target="_blank" href="https://www.linkedin.com/company/creative-riots/">
                            <span></span> LinkedIn</a>
                    </div>
                    <div class="social-icon link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="">
                        <a target="_blank" href="https://twitter.com/creativeriots"> <span></span> Twitter</a>
                    </div>
                    <div class="social-icon link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="">
                        <a target="_blank" href="https://www.facebook.com/DanovProductions"> <span></span> Facebook</a>
                    </div>
                    <div class="social-icon link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="">
                        <a target="_blank" href="https://www.youtube.com/@danovproduction4405"> <span></span>
                            Youtube</a>
                    </div>
                    <div class="social-icon link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="">
                        <a target="_blank" href="https://www.instagram.com/creative_riots/"> <span></span>
                            Instagram</a>
                    </div>
                </div>
                <div class="nav-left-line">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nav-left-line.png" alt="">
                </div>
                <div class="social-icon-text">Follow Us</div>
            </div>
        </div>
    </div>
    <!-- STAY NAVBAR EXIT -->

    <!-- RIGHT NAVBAR -->
    <div class="right-navbar">
        <div class="right-nav-container">
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="link <?php if (is_front_page())
                           echo 'active'; ?>">INTRO <span></span></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/who')); ?>" class="link <?php if (is_page('who'))
                           echo 'active'; ?>">WHO <span></span></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/what')); ?>" class="link <?php if (is_page('what'))
                           echo 'active'; ?>">WHAT <span></span></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/work')); ?>" class="link <?php if (is_page('work'))
                           echo 'active'; ?>">WORK <span></span></a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="link <?php if (is_page('contact'))
                           echo 'active'; ?>">CONTACT <span></span></a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"> </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gsap.js"> </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gsap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/font-awesome.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrollTrigger.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lenis.js"></script>

    <section class=".section1 post-container">
        <div class="navbar">
            <div class="logo">
                <a href="<?php echo site_url(); ?>" class="link"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
            </div>
            <div class="nav">
                <a href="<?php echo site_url(); ?>" class="link mobile-nav-logo"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
                <ul class="menu">

                    <li>
                        <?php wp_nav_menu(array('theme_location' => 'primary-menu')) ?>
                    </li>
                    <li>
                        <div class="followus">
                            <h2>Follow Us</h2>
                            <div class="followus-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"
                                        alt=""></a>
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"
                                        alt=""></a>
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"
                                        alt=""></a>
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png"
                                        alt=""></a>
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="hamburger" id="nav-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
        
    </section>