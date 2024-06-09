<?php
//Template Name: what
get_header();

function get_custom_data()
{
    return '
    <div class="text">
    <h1 class="layer link3" data-valu="0.21">
        WHAT!
    </h1>
</div>';
}
?>

<div class="profile-sidebar " id=" p-slider">
    <div class="profile-left">
        <img class="menu-p-img" src="<?php echo get_template_directory_uri(); ?>/img/who-2.png" alt="">

    </div>
    <div class="profile-right">
        <span class="p-position">#Co-Founder</span>
        <h2 class="profile-name">Clare</h2>
        <p class="profile-position">Co-Founder</p>

        <h2>ABOUT</h2>
        <p class="content">It is a long established fact that a reader will be distracted by the readable content of
            a page when
            looking at its layout.It is a long established fact that a reader will beIt is a long established fact
            that a reader will be distracted by the readable content of a page when looking at its layout.It is a
            long established fact that a reader will be distracted by the readable content of a page when looking at
            its layout.It is a long established fact that a reader will beIt is a long established fact that a
            reader will be distracted by the readable content of a page when looking at its layout.</p>

        <h3>EXPERIENCE</h3>
        <p>6 years of experience</p>

        <div class="profile-social">
            <div class="profile-social-left">
                <h3>Social Links</h3>
            </div>
            <div class="profile-social-right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="">
            </div>
        </div>

        <button id="close-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
    </div>
</div>





<section class="services">
    <div class="services-container">
        <div class="service-cards">
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/1.png" alt="">
                    <span>web Develop</span>
                </div>
                <div class="card-bottom">
                    <p>Websites are more than just codes, they’re a digital footprint of your brand’s essence.
                        Partner with us to achieve the perfect blend of innovation and functionality for your brand.
                    </p>
                    <?php
                    function generate_portfolio_link1()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template2') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link1(); ?>
                </div>
            </div>
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/2.png" alt="">
                    <span>app Develop</span>
                </div>
                <div class="card-bottom">
                    <p>Customize every tap and swipe with us, for effortless navigation across Android, IOS, and
                        beyond! With a laser focus on user-centric designs, let us transform your apps from good to
                        extraordinary!</p>
                    <?php
                    function generate_portfolio_link2()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template2') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link2(); ?>
                </div>
            </div>
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/3.png" alt="">
                    <span>ui/ux Designs</span>
                </div>
                <div class="card-bottom">
                    <p>UI/UX is not just about pretty visuals; trust us to harmonize functionality and design across
                        platforms for consistent interaction and create the perfect interface for maximum
                        engagement.</p>
                    <?php
                    function generate_portfolio_link3()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template3') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link3(); ?>
                </div>
            </div>
        </div>
        <div class="service-cards">
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/4.png" alt="">
                    <span>Video Editing</span>
                </div>
                <div class="card-bottom">
                    <p>Weaving your footage into compelling stories with transitions as smooth as your brand’s
                        journey, and helping you capitalize on your content with full impact is our vision. Because
                        we understand that every tiny detail matters, and every second counts.</p>

                    <?php
                    function generate_portfolio_link4()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template1') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link4(); ?>
                </div>
            </div>
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/5.png" alt="">
                    <span>Graphic Design</span>
                </div>
                <div class="card-bottom">
                    <p>Our expert team of graphic designers brings your visions to life, by helping you create an
                        innovative and strategic brand identity with seamless colors, logos, and typography, and the
                        perfect execution of your unique stories.</p>


                    <?php
                    function generate_portfolio_link5()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template5') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link5(); ?>
                </div>
            </div>
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/6.png" alt="">
                    <span>SEO</span>
                </div>
                <div class="card-bottom">
                    <p>Let us speak the language of the search engines for you! Our SEO services are the compass you
                        need to guide your content toward the pinnacle of search results. Making sure your brand
                        pops up when and where it matters the most.</p>
                    <?php
                    function generate_portfolio_link6()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template2') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link6(); ?>
                </div>
            </div>
        </div>
        <div class="service-cards">
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/7.png" alt="">
                    <span>3D & 2D Anime</span>
                </div>
                <div class="card-bottom">
                    <p>With the ambition to give your brand a whole new dimension, with our 3D/2D animation
                        services. We transform your content into three-dimensional masterpieces with realism and
                        depth. Let us create engagement from movement!</p>
                    <?php
                    function generate_portfolio_link7()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template7') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link7(); ?>
                </div>
            </div>
            <div class="service-card">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/8.png" alt="">
                    <span>Podcast</span>
                </div>
                <div class="card-bottom">
                    <p>The ebb and flow of your words and engagement is essential to us. We meticulously craft your
                        audio journeys with the perfect intros, outros, and promotional messages, that reflect your
                        brand’s true essence, creating a holistic auditory experience.</p>
                    <?php
                    function generate_portfolio_link8()
                    {

                        $link = '<a href="' . esc_url(home_url('/work') . '#' . 'template1') . '" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '" alt="">';
                        $link .= '<img class="top-img" src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                        echo $link;
                    }
                    ?>

                    <?php generate_portfolio_link8(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services mob-services">
    <div class="services-container">
        <div class="service-cards">
            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/1.png" alt="">
                    <span>web Develop</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">Websites are more than just codes, they’re a digital
                                footprint of your brand’s <span class="dots">...</span> <span><a> view
                                        more</a></span> </span>


                            <span class="what-more-text">
                                Websites are more than just codes, they’re a digital footprint of your brand’s
                                essence.
                                Partner with us to achieve the perfect blend of innovation and functionality for
                                your brand.</span>


                            <!-- onclick="navigateToSection('work.html' ,'template1')" -->
                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>


                    </div>
                    <?php
                    function generate_portfolio_small_link1()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template2\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link1(); ?>
                </div>
            </div>

            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/2.png" alt="">
                    <span>app Develop</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">Customize every tap and swipe with us, for effortless
                                navigation<span class="dots">...</span>
                                <a>view more</a></span></span>
                            <span class="what-more-text">across Android, IOS, and
                                beyond! With a laser focus on user-centric designs, let us transform your apps from
                                good to extraordinary!</span>
                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    
                    <?php
                    function generate_portfolio_small_link2()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template2\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link2(); ?>
                </div>
            </div>

            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/3.png" alt="">
                    <span>ui/ux Designs</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">
                                UI/UX is not just about pretty visuals; trust us to harmonize functionality<span
                                    class="dots">...</span>
                                <a> view more</a></span>
                            </span>
                            <span class="what-more-text">
                                and design across platforms for consistent interaction and create the perfect
                                interface for maximum engagement.
                            </span>


                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    <?php
                    function generate_portfolio_small_link3()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template5\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link3(); ?>
                </div>
            </div>

            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/4.png" alt="">
                    <span>Video Editing</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">
                                Weaving your footage into compelling stories with transitions as smooth<span
                                    class="dots">...</span>
                                <a>view more</a></span>
                            </span>

                            <span class="what-more-text">
                                as your brand’s journey, and helping you capitalize on your content with full impact
                                is our vision. Because we understand that every tiny detail matters, and every
                                second counts.
                            </span>


                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>

                    </div>
                    <?php
                    function generate_portfolio_small_link4()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template1\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link4(); ?>
                </div>
            </div>
            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/5.png" alt="">
                    <span>Graphic Design</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">
                                Our expert team of graphic designers brings your visions to life,<span
                                    class="dots">...</span>
                                <a>view more</a></span>
                            </span>
                            <span class="what-more-text">
                                by helping you create an innovative and strategic brand identity with seamless
                                colors, logos, and typography, and the perfect execution of your unique stories.
                            </span>

                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    <?php
                    function generate_portfolio_small_link5()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template5\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link5(); ?>
                </div>
            </div>
            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/6.png" alt="">
                    <span>SEO</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">
                                Let us speak the language of the search engines for you! Our SEO services<span
                                    class="dots">...</span>
                                <a> view more</a></span>
                            </span>

                            <span class="what-more-text">
                                are the compass you
                                need to guide your content toward the pinnacle of search results. Making sure your
                                brand
                                pops up when and where it matters the most.
                            </span>
                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    <?php
                    function generate_portfolio_small_link6()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template2\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link6(); ?>
                </div>
            </div>

            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/7.png" alt="">
                    <span>3D & 2D Anime</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p><span class="show-top-text">
                                With the ambition to give your brand a whole new dimension, with our 3D/2D<span
                                    class="dots">...</span>
                                <a> view more</a></span>
                            </span>
                            <span class="what-more-text">
                                animation
                                services. We transform your content into three-dimensional masterpieces with realism
                                and
                                depth. Let us create engagement from movement!
                            </span>

                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    <?php
                    function generate_portfolio_small_link7()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template7\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link7(); ?>
                </div>
            </div>
            <div class="service-card" onclick="toggleWhatText(event)">
                <div class="card-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/wh img/8.png" alt="">
                    <span>Podcast</span>
                </div>
                <div class="card-bottom">
                    <div>
                        <p>
                            <span class="show-top-text">
                                The ebb and flow of your words and engagement is essential to us.<span
                                    class="dots">...</span>
                                <a> view more</a></span>
                            </span>
                            <span class="what-more-text">
                                We meticulously craft your
                                audio journeys with the perfect intros, outros, and promotional messages, that
                                reflect your
                                brand’s true essence, creating a holistic auditory experience.
                            </span>

                            <img class="dropdown" src="<?php echo get_template_directory_uri(); ?>/img/dropdown.png"
                                alt="">
                        </p>
                    </div>
                    <?php
                    $section = 'work';
                    $template = 'template8';
                    ?>
                    <?php
                    function generate_portfolio_small_link8()
                    {
                    $link = '<a onclick="navigateToSection(\'work\', \'template1\')" class="link">';
                        $link .= '<img src="' . esc_url(get_template_directory_uri() . '/img/button-1.png') . '"
                            alt="">';
                        $link .= '<img class="top-img"
                            src="' . esc_url(get_template_directory_uri() . '/img/red-button.svg') . '" alt="">';
                        $link .= 'See our portfolios';
                        $link .= '</a>';

                    echo $link;
                    }
                    ?>

                    <?php generate_portfolio_small_link8(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="roadmap">
    <div class="roadmap-container link">
        <h2>Our Roadmap</h2>
        <div class="roadmap-contain">
            <div class="roadmap-cards m160 m-r145">
                <img class="roadmap-arrow" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-1.png" alt="">
                <h2>Ideology</h2>
                <ul>
                    <li>Defining the brand essence</li>
                    <li>Setting the content goals and storyline</li>
                    <li>Delivering utmost quality with precision</li>
                </ul>
            </div>
            <div class="roadmap-cards  m-r145">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-2.png" alt="">
                <h2>BRAINSTORMING</h2>
                <ul>
                    <li>Setting the wheels in motion</li>
                    <li>Understanding the clientele with consultation</li>
                    <li>Fostering collaborative brainstorming sessions</li>
                </ul>
                <img class="roadmap-arrow-180" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png"
                    alt="">
            </div>
            <div class="roadmap-cards m160 m-r145">
                <img class="roadmap-arrow" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-3.png" alt="">
                <h2>Analyzing</h2>
                <ul>
                    <li>Deciphering the idea step by step</li>
                    <li>Reviewing content performance</li>
                    <li>Conducting SEO insights</li>
                </ul>
            </div>
            <div class="roadmap-cards  m-r145">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-4.png" alt="">
                <h2>Research & Prep.</h2>
                <ul>
                    <li>Visual asset planning</li>
                    <li>Profiling the target audience</li>
                    <li>Strategic channel selection</li>
                </ul>
                <img class="roadmap-arrow-180" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png"
                    alt="">
            </div>
            <div class="roadmap-cards m160 m-r145">
                <img class="roadmap-arrow" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-5.png" alt="">
                <h2>EXECUTION</h2>
                <ul>
                    <li>Crafting engaging content</li>
                    <li>Integrating interactive elements</li>
                    <li>Strategizing cross-channel promotion</li>
                </ul>
            </div>
            <div class="roadmap-cards  m-r145">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-6.png" alt="">
                <h2>ADDING MAGIC</h2>
                <ul>
                    <li>Adding engagement-boosting hooks</li>
                    <li>Adding authenticity with content</li>
                    <li>Evoking emotions through story-telling</li>
                </ul>
                <img class="roadmap-arrow-180" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png"
                    alt="">
            </div>
            <div class="roadmap-cards m160 m-r145">
                <img class="roadmap-arrow" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-7.png" alt="">
                <h2>FINAL TOUCHES</h2>
                <ul>
                    <li>Checking consistency and quality</li>
                    <li>Fine-tuning content for readability optimization</li>
                    <li>Checking cross-linking strategy and formats</li>
                </ul>
            </div>
            <div class="roadmap-cards  m-r145">
                <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap-8.png" alt="">
                <h2>DELIVERY</h2>
                <ul>
                    <li>Client review and approval</li>
                    <li>Content scheduling and posting</li>
                    <li>Feedback analysis for improvements</li>
                </ul>
                <img class="roadmap-arrow-180" src="<?php echo get_template_directory_uri(); ?>/img/roadmap2.png"
                    alt="">
            </div>

        </div>
        <div class="progress-bar">
            <div class="progress-bar__inner"></div>
        </div>
        <div class="progressbar__number">
            <div>01/08</div>
            <div>02/08</div>
            <div>03/08</div>
            <div>04/08</div>
            <div>05/08</div>
            <div>06/08</div>
            <div>07/08</div>
            <div>08/08</div>
        </div>
    </div>
</section>


<!-- testimonials -->
<section class="portfolio what-test">
    <div class="container">
        <span>Trusted By</span>
        <div class="portfolio-sec link">
            <span class="mob-quote mob-quote1">“</span>
            <span class="mob-quote mob-quote2">“</span>
            <div class="portfolio-left">
                <span>#Trustees</span>
                <div class="portfolio-main-img link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio3.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio4.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio5.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio6.png" alt="">
                </div>

                <div class="portfolio-img-show link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio3.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio4.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio5.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Portfolio6.png" alt="">
                </div>
            </div>
            <div class="portfolio-right link">
                <div class="heading">
                    <p>Client <span>Praises</span></p>
                    <div class="review-sec">
                        <!-- <img class="quotes quote1" src="./img/quote-1.png" alt=""> -->
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>They are extremely efficient. They have a very good creative vision and they
                                understand our needs. They're very timely and get deliveries on time.


                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Ryan Turner</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>We've been working with Creative Riots for the past few months. Not only do they
                                meet deadlines, but also many times we find that they send the material before the
                                deadline, which helps a lot.

                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Daniela Horovitz</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>The work was of very good quality. They were very punctual, had great customer
                                service, and were competitively priced.
                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Mitchell Omer</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>This guy has been nothing but awesome since we brought him on as part of our team. He
                                really takes care of everything. Thank you, NV, appreciate you, man.
                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Craig Pretzinger</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>They've always gone above and beyond no matter what we've needed. They always rise to
                                the occasion, the quality has been fantastic. Communication has been great. They've
                                saved us an incredible amount of time. Thank you Creative Riots

                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Jason Feltman</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                        <div class="review-slide">
                            <span class="quotes quote1">“</span>
                            <p>All I do is record the video. They grab it and edit it for my podcast, YouTube,
                                Reels, they do everything. They're absolutely amazing.
                            </p>
                            <!-- <img class="quotes quote2" src="./img/quote-2.png" alt=""> -->
                            <span class="quotes quote2">“</span>


                            <div class="review">
                                <h2>Allie Bjerk
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script type="text/javascript">


    let currentOpenCard = null;

    function toggleWhatText(event) {
        const serviceCard = event.currentTarget; // Get the clicked "service-card" element

        // Find the "dots" and "what-more-text" elements directly within the clicked "service-card"
        const text = serviceCard.querySelector(".what-more-text");
        const dots = serviceCard.querySelector(".dots");

        // If a card is currently open and not the same as the clicked card, close it
        if (currentOpenCard && currentOpenCard !== serviceCard) {
            const currentText = currentOpenCard.querySelector(".what-more-text");
            const currentDots = currentOpenCard.querySelector(".dots");

            currentOpenCard.classList.remove("open");
            currentText.classList.remove("open");
            currentDots.classList.remove("open");
        }

        // Toggle the "open" class on the clicked card's elements
        serviceCard.classList.toggle("open");
        text.classList.toggle("open");
        dots.classList.toggle("open");

        // Update the currently open card
        currentOpenCard = serviceCard;
    }

    function closeCurrentCard() {
        if (currentOpenCard) {
            const currentText = currentOpenCard.querySelector(".what-more-text");
            const currentDots = currentOpenCard.querySelector(".dots");

            currentOpenCard.classList.remove("open");
            currentText.classList.remove("open");
            currentDots.classList.remove("open");
            currentOpenCard = null; // Reset the currently open card
        }
    }




    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
        console.log(e)
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
    $(document).ready(function () {
        $('#nav-icon').click(function () {
            $(this).toggleClass('open');

        });

    });
    document.querySelector(".hamburger").addEventListener("click", function () {
        document.querySelector(".menu").classList.toggle("active");
        document.querySelector(".menu").style.display = "flex";
    });

    gsap.registerPlugin(TweenMax);
    // Attach the handleWindowResize function to the window resize event
    window.addEventListener('resize', handleWindowResize);

    document.addEventListener('DOMContentLoaded', function () {

        const navbar = document.querySelectorAll('.left-navbar');
        const footer = document.querySelectorAll('.footer');

        // Function to check scroll position and toggle navbar visibility
        function toggleNavbarVisibility() {
            footer.forEach((footer) => {
                const scrollPosition = window.scrollY;

                const footerOffsetTop = footer.offsetTop;
                if (scrollPosition >= footerOffsetTop - window.innerHeight) {
                    navbar.forEach((navbar) => {
                        navbar.style.opacity = '0';
                        navbar.style.transition = ".25s";
                    })
                } else {
                    navbar.forEach((navbar) => {
                        navbar.style.opacity = '1';
                        navbar.style.transition = ".25s";
                    })
                }
            })
        }

        // Attach the toggle function to the scroll event
        window.addEventListener('scroll', toggleNavbarVisibility);

    });

    var timeline = gsap.timeline()
    var tab1 = gsap.timeline()
    var tab2 = gsap.timeline()
    var tab3 = gsap.timeline()
    var tab4 = gsap.timeline()
    tab1.from(".navbar .logo", {
        delay: 1,
        opacity: 0,
    })
    tab2.from(".navbar .contact", {
        delay: 1,
        opacity: 0,
    })
    tab2.from(".left-nav .social-sec", {
        delay: 0.2,
        x: -100,
        stagger: 0.3,
    })
    tab3.from(".left-nav .social-sec .social-icon", {
        delay: 2.2,
        x: -100,
        stagger: -0.2,
    })
    tab4.from(".container .layer h1", {
        delay: 1.7,
        opacity: 0,
    })
    timeline.from(".nav ul li", {
        y: -100,
        delay: 2.2,
        stagger: 0.2,

    })



    document.addEventListener('DOMContentLoaded', function () {

        const rightNavbar = document.querySelector('.right-navbar');
        const listItems = rightNavbar.querySelectorAll('li');
        const herosec = document.querySelectorAll('.parallax-container');
        // GSAP animation for hover on list items


        listItems.forEach((li) => {
            li.addEventListener('mouseenter', () => {
                gsap.to(li, { scale: 1.2, duration: 0.3 });
            });

            li.addEventListener('mouseleave', () => {
                gsap.to(li, { scale: 1, duration: 0.3 });
            });
        });

        // Function to check scroll position and toggle navbar visibility
        function toggleHeroSection() {
            herosec.forEach((herosec, index) => {
                const scrollPosition = window.scrollY;

                const heroSectionTop = herosec.offsetTop;
                const heroSectionBottom = heroSectionTop + herosec.clientHeight;

                if (scrollPosition >= heroSectionTop - window.innerHeight && scrollPosition <= heroSectionBottom) {
                    gsap.to(rightNavbar, { opacity: 0, duration: 0.25 });
                } else {
                    gsap.to(rightNavbar, { opacity: 1, duration: 0.25 });
                }
            });
        }

        // Staggered animation for list items on hover
        const listItemsTimeline = gsap.timeline({ paused: true });
        listItemsTimeline.from(listItems, 0.3, { opacity: 0.3, stagger: 0.1, ease: "power2.inOut" }, 0.05);
        listItemsTimeline.reverse(); // Initial state

        // Hover event for .right-navbar
        rightNavbar.addEventListener('mouseenter', () => {
            listItemsTimeline.play();
        });

        rightNavbar.addEventListener('mouseleave', () => {
            listItemsTimeline.reverse();
        });

        // Attach the toggle function to the scroll event
        window.addEventListener('scroll', toggleHeroSection);

    });
</script>



<?php get_footer(); ?>