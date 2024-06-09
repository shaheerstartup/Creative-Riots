<?php
//Template Name: who
get_header('who');

function get_custom_data()
{
    return '<div class="parallax-contain" id="parallaxContainer" style="width: 100%;height: 100vh;">
    <section class="animation-container" style="display: flex; object-fit: contain; width: 100%;
height: 100vh;
overflow: hidden;">
<img class="banner blr" src="https://creativeriots.co/wp-content/themes/creativeriots/background.jpg" alt="">
        <div class="frame">
            <div class="hands active">
                <img class="hand" src="https://creativeriots.co/wp-content/themes/creativeriots/hands4.svg" alt="">
                <div class="content">
                    <img src="https://creativeriots.co/wp-content/themes/creativeriots/background.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="top-scroll-div">Scroll Down <img src="https://creativeriots.co/wp-content/themes/creativeriots/img/scroll.svg" alt=""> <img class="mouse-img"
            src="https://creativeriots.co/wp-content/themes/creativeriots/img/mouse.png" alt=""></div>
</div>';
}
?>


<section class="about" id="about">
    <div class="about-container">
        <div class="about-top">
            <div class="about-top-left">
                <span>Who are</span>
                <h2>Creative <br>
                    Riots</h2>
                <p>We are more than just a marketing agency, but a force to be reckoned with!</p>
            </div>
            <div class="about-top-right">
                <h2>WE ARE THE CREATIVE RIOTS</h2>
                <p>We are visionary storytellers, innovative designers, and strategic craftsmen dedicated to
                    disrupting the<span class="dots">...</span>
                    <span id="we-creative-riots-text">
                        ordinary and redefining the rules of traditional marketing. At Creative Riots, we
                        thrive on challenge and bringing your boldest ideas to life with crazy good visuals and
                        groundbreaking campaigns that incite a riot of inspiration and engagement.
                    </span><button onclick="toggleText()" id="we-creative-riots">view more</button>
                </p>
            </div>
        </div>
        <div class="about-bottom">
            <div class="about-bottom-left">
                <h2>Paving the Way for the Future of Agencies in Pakistan
                </h2>
            </div>
            <div class="about-bottom-right">
                <h2>Reliable marketing pioneers for quality projects</h2>
                <p>Let us navigate the landscape of marketing with an unmatched commitment to quality. and transform
                    your<span class="dots2">...</span>

                    <span id="paving-future-text">
                        brand into an unforgettable force in the digital realm. Join us and revolutionize your
                        creativity with our genius and propel your brand’s future to new heights.
                    </span>
                    <button onclick="toggleText2()" id="paving-future">view more</button>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="owner" id="owner">
    <div class="owner-container">
        <div class="owner-sec" id="yamin">
            <div class="owner-sec-left">
                <h2>About CEO</h2>
                <p>Our creative visionary and leader, Yamin started his journey with a degree in filmmaking and
                    moved to marketing leadership. He took upon the responsibility to blend his creative intuition
                    with strategic acumen<span class="dots3">...</span>

                    <span id="owner-text">to build and guide his talented team at Creative Riots.
                        His distinct background and experience in filmmaking and direction infused with his hustle
                        for excellence helps us create art. <br>
                        As the embodiment of Creative Riot's spirit, Yamin continues to redefine the intersection of
                        creativity and leadership, leaving an indelible mark on our agency's story and the stories
                        we tell for our clients!</span>
                    <button onclick="toggleText3()" id="owner-text-btn">view more</button>
                </p>
            </div>
            <div class="owner-sec-right our-team-card link" id="yamin" onclick="disableScroll()">
                    <div class="our-team-card-inner">
                        <img class="our-team-frame" src="<?php echo get_template_directory_uri(); ?>/img/Yamin.jpg" alt="">
                        <p class="frame-paragraph our-team-card-p">Meet the brains behind Creative Riots, Yamin, who
                            brings a cinematic perspective to our agency with his enriched background in filmmaking,
                            direction, and a passion for storytelling. He is more than just a great leader, he’s a
                            visionary guide who shapes our agency with his unparalleled vision, striving for creative
                            excellence through and through.
                        </p>
                    </div>
                    <div class="team-heading">
                        <h2>Yamin NV</h2>
                        <div class="team-social-icons">
                            <a class="ln" href="https://www.linkedin.com/in/yamin-nv-480305168/"><img class="link2"
                                    src="./img/linkedin.svg" alt=""></a>
                            <a class="fb" href="https://www.facebook.com"><img class="link2" src="./img/facebook.svg"
                                    alt=""></a>
                            <a class="in" href="https://www.instagram.com/yamin_cr/"><img class="link2"
                                    src="./img/instagram.svg" alt=""></a>
                        </div>
                    </div>
                    <p class="profile-pos" style="left: -35% !important;">CEO</p>
                    <div class="exp-div">
                        <span class="experience">8 Years of Experience</span>
                        <span class="profile-hash" style="left: -19% ;">#CEO</span>
                    </div>
                    <span>#CEO</span>
                </div>
        </div>
    </div>
</section>

<section class="our-team-2" id="team">
    <div class="our-team-2-container">
        <div class="top">
            <h2>Our Team</h2>
            <p>Take a glimpse at how our team functions! Bound by a shared purpose, we share a collective vision and
                a unified vision to drive every project forward. We foster an environment where ideas flow freely,
                where<span class="dots4">...</span><span id="our-team-txt">each person's perspective is valued, and
                    where brainstorming sparks creativity.
                    We embrace
                    accountability from source to execution, making sure that timelines, quality, and objectives are
                    met
                    every time. <br>
                    The foundation of our collaboration is our customers. We listen carefully, understand their
                    needs,
                    and incorporate their vision into our plans. At Creative Riots, each team member is a vital
                    note,
                    contributing to a melody of excellence. Our teamwork is a journey of creativity, innovation, and
                    client-centric passion, harmonizing to create campaigns that resonate, inspire, and make a
                    lasting
                    impact</span>
                <button onclick="toggleText4()" id="our-team-txt-btn">view more</button>
            </p>
        </div>
        <div class="bottom">
                <div class="team-cards">
                    <div class="our-team-card link2" id="sheroze" onclick="disableScroll()">
                        <div class="our-team-card-inner">
                            <span class="overlay"></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Sheroze.jpg" alt="">
                            <img class="our-team-frame" src="<?php echo get_template_directory_uri(); ?>/img/Sheroze.jpg" alt="">
                            <p class="frame-paragraph our-team-card-p">As a supporting pillar to our CEO, Shahroze helps
                                bridge the gap
                                between visions and their tangible execution. With his animation expertise and strategic
                                insights, Shahroze ensures that each project we undertake aligns seamlessly with our
                                overarching objectives, helping creativity flourish and ideas take flight at the
                                Creative Riots.
                            </p>
                        </div>
                        <div class="team-heading">
                            <h2>Shahroze Khan</h2>
                            <div class="team-social-icons">
                                <a class="ln" href="https://www.linkedin.com/in/shahroze-khan-content-creator/"><img
                                        class="link2" src="./img/linkedin.svg" alt=""></a>
                                <a class="fb" href="https://www.facebook.com/Shahroze.vfxeditor"><img class="link2"
                                        src="./img/facebook.svg" alt=""></a>
                                <a class="in" href="https://www.instagram.com/shehrozekhan_/"><img class="link2"
                                        src="./img/instagram.svg" alt=""></a>
                            </div>
                        </div>
                        <p class="profile-pos" style="">Creative Director</p>
                        <div class="exp-div">
                            <span class="experience">11 Years of Experience</span>
                            <span class="profile-hash" style="left: -19% ;">#CRD</span>
                        </div>
                    </div>
                    <div class="our-team-card link2" id="khurram" onclick="disableScroll()">
                        <div class="our-team-card-inner">
                            <span class="overlay"></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/khurram.jpg" alt="">
                            <img class="our-team-frame" src="<?php echo get_template_directory_uri(); ?>/img/khurram.jpg" alt="">
                            <p class="frame-paragraph our-team-card-p">With over seven years of experience, our software
                                development head
                                orchestrates a symphony of technology and creativity to craft digital marvels. Khurram’s
                                expertise extends beyond coding. He, not only wields a masterful command over an
                                advanced skill set that includes Java, SwiftUI, React Native, and Flutter, but he is
                                also a meticulous problem solver and innovator!
                            </p>
                        </div>
                        <div class="team-heading">
                            <h2>Khurram waqar</h2>
                            <div class="team-social-icons">
                                <a class="ln" href="https://www.linkedin.com/in/khurram-waqar-56300448/"><img
                                        class="link2" src="./img/linkedin.svg" alt=""></a>
                                <a class="fb" href="https://www.facebook.com/imkhurramwaqar" alt=""></a>
                                <a class="in" href="https://www.instagram.com/khurramsays/" alt=""></a>
                            </div>
                        </div>
                        <p class="profile-pos">Chief Web Officer (CWO)</p>
                        <div class="exp-div">
                            <span class="experience">7 Years of Experience</span>
                            <span class="profile-hash" style="left: -22% ;">#CWO</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<div class="profile-sidebar" id="p-slider">
        <div class="profile-left">
            <img class="menu-p-img" src="<?php echo get_template_directory_uri(); ?>/img/who-2.png" alt="">
            <span class="p-position"></span>
            <h2 class="profile-name">Clare</h2>
            <p class="profile-position">Co-Founder</p>
            <button id="close-btn" class="close-btn" onclick="enableScroll()"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg"
                    alt=""></button>
            <img class="scrollup" src="<?php echo get_template_directory_uri(); ?>/img/scrollup.svg" alt="">
        </div>
        <div class="profile-right">
            <span class="p-position">Creative Riots</span>
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
            <p class="p-experience">6 years of experience</p>

            <div class="profile-social">
                <div class="profile-social-left">
                    <h3>Social Links</h3>
                </div>
                <div class="profile-social-right">
                    <a class="ln link" href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""></a>
                    <a class="fb link" href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""></a>
                    <a class="in link" href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""></a>
                </div>
            </div>

            <button id="close-btn" onclick="enableScroll()" class="close-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg"
                    alt=""></button>
        </div>
    </div>

<script type="text/javascript">

    function toggleText() {
        let dots = document.querySelector(".dots"); // Corrected ID

        let showMoreText = document.getElementById("we-creative-riots-text");

        let buttonText = document.getElementById("we-creative-riots");
        showMoreText.style.display == "none"

        if (showMoreText.style.display == "none") {

            // Show the text between the span elements
            showMoreText.style.display = "inline";

            // Hide the dots after the text
            dots.style.display = "none";

            // Change the text on button to 'view less'
            buttonText.innerHTML = "view less";
        } else {

            // Hide the text between the span elements
            showMoreText.style.display = "none";

            // Show the dots after the text
            dots.style.display = "inline-flex";

            // Change the text on button to 'view more'
            buttonText.innerHTML = "view more";
        }
    }

    function toggleText2() {
        let dots = document.querySelector(".dots2"); // Corrected ID

        let showMoreText = document.getElementById("paving-future-text");

        let buttonText = document.getElementById("paving-future");
        showMoreText.style.display == "none"

        if (showMoreText.style.display == "none") {

            // Show the text between the span elements
            showMoreText.style.display = "inline";

            // Hide the dots after the text
            dots.style.display = "none";

            // Change the text on button to 'view less'
            buttonText.innerHTML = "view less";
        } else {

            // Hide the text between the span elements
            showMoreText.style.display = "none";

            // Show the dots after the text
            dots.style.display = "inline-flex";

            // Change the text on button to 'view more'
            buttonText.innerHTML = "view more";
        }
    }

    function toggleText3() {
        let dots = document.querySelector(".dots3"); // Corrected ID

        let showMoreText = document.getElementById("owner-text");

        let buttonText = document.getElementById("owner-text-btn");
        showMoreText.style.display == "none"

        if (showMoreText.style.display == "none") {

            // Show the text between the span elements
            showMoreText.style.display = "inline";

            // Hide the dots after the text
            dots.style.display = "none";

            // Change the text on button to 'view less'
            buttonText.innerHTML = "view less";
        } else {
            // Hide the text between the span elements
            showMoreText.style.display = "none";

            // Show the dots after the text
            dots.style.display = "inline-flex";

            // Change the text on button to 'view more'
            buttonText.innerHTML = "view more";
        }
    }

    function toggleText4() {
        let dots = document.querySelector(".dots4"); // Corrected ID

        let showMoreText = document.getElementById("our-team-txt");

        let buttonText = document.getElementById("our-team-txt-btn");
        showMoreText.style.display == "none"

        if (showMoreText.style.display == "none") {

            // Show the text between the span elements
            showMoreText.style.display = "inline";

            // Hide the dots after the text
            dots.style.display = "none";

            // Change the text on button to 'view less'
            buttonText.innerHTML = "view less";
        } else {

            // Hide the text between the span elements
            showMoreText.style.display = "none";

            // Show the dots after the text
            dots.style.display = "inline-flex";

            // Change the text on button to 'view more'
            buttonText.innerHTML = "view more";
        }
    }

    gsap.registerPlugin(ScrollTrigger);

        // Function to check the screen width and update the image source
        function updateImageSrc() {
            const bg = document.querySelector('.bg');
            const land = document.querySelector('.land');
            const leftHill = document.querySelector('.left-hill');
            const rightHill = document.querySelector('.right-hill');
            const glow = document.querySelector('.glow');
            const logo = document.querySelector('.parallax-imgae');
            const elements = document.querySelector('.elements');

            // Check the screen width using media query
            if (window.matchMedia("(max-width: 550px)").matches) {
                bg.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/BG-min.webp";
                land.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Surface-min.webp";
                leftHill.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Left hill-min.webp";
                rightHill.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Right hill-min.webp";
                glow.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Glow-mob.png";
                logo.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Logo-mob.png";
                elements.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Elements-min.png";

            } else {
                bg.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/BG-min.png";
                land.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Surface-min.png";
                leftHill.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Left hill-min.png";
                rightHill.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Right hill-min.png";
                glow.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Glow-mob.png";
                logo.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Logo-mob.png";
                elements.src = "https://creativeriots.co/wp-content/themes/creativeriots/img/PARALLAX/Elements-min.png";
            }
        }

        // Call the function on page load and when the window is resized
        window.addEventListener('load', updateImageSrc);
        window.addEventListener('resize', updateImageSrc);

        // Call the function on page load and when the window is resized
        window.addEventListener('load', updateImageSrc);
        window.addEventListener('resize', updateImageSrc);

        gsap.registerPlugin(ScrollTrigger);

        const hand = document.querySelector('.hand');
        const handbg = document.querySelector('.hands .content img');

        if (window.matchMedia("(max-width: 767px)").matches) {
            hand.src = 'https://creativeriots.co/wp-content/themes/creativeriots/mob2.svg';
            handbg.src ='https://creativeriots.co/wp-content/themes/creativeriots/mob.png'
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Select the parallax container by ID
            const parallaxContainer = document.querySelector('.parallax');

            // Select sections to disable scrolling (if needed)
            const sectionsToDisableScroll = document.querySelectorAll('.disable-scroll');

            // Create a timeline for animations
            const animationTimeline = gsap.timeline({
                onComplete: enableScrollingForOtherSections, // Enable scrolling when the animations are complete
            });
            const paperTimeline1 = gsap.timeline({});

            paperTimeline1.to(['.parallax-contain .paper1'], {
                // scale: 1.5,
                delay: 1.5,
                top: '-20rem',
                right: '-250rem',
                duration: 0.7,
                ease: "power2.inOut"
            });

            const paperTimeline2 = gsap.timeline({});

            paperTimeline2.to(['.parallax-contain .paper2'], {
                // scale: 1.5,
                delay: 1.5,
                bottom: "-20rem",
                left: '-250rem',
                duration: 0.7,
                ease: "power2.inOut"
            });


            paperTimeline1.from(['.parallax-contain .top-scroll-div'], {
                delay: 0,
                right: '-20rem',
                duration: 0.7,
                ease: "none"
            });

            const masterTimeline = gsap.timeline({});
            masterTimeline.add(paperTimeline1, 0); // Add paperTimeline1 at time 0
            masterTimeline.add(paperTimeline2, 0); // Add paperTimeline2 at time 0

            // Play both paper1 and paper2 animations at the same time
            masterTimeline.play();

            // Animations for image1, leftMountain, and rightMountain (start when in view)
            animationTimeline.to(['.blr'], {
                // scale: 1.5,
                // duration: 1,
                filter: "blur(12px)",
                scrollTrigger: {
                    trigger: parallaxContainer,
                    start: "top top",
                    end: "+=100%", // Extend the animation to cover the entire parallax container
                    scrub: true,
                    onEnter: disableScrollingForSections, // Disable scrolling for specific sections when entering
                    passive: true, // Use passive event listener
                },
            });

            animationTimeline.to(['.hands'], {
                scale: 1,
                bottom: '-4vh',
                opacity: 1,
                duration: 1,
                scrollTrigger: {
                    trigger: parallaxContainer,
                    start: "top top",
                    end: "+=100%",
                    scrub: true,
                    onEnter: disableScrollingForSections,
                    passive: true,
                    ease: 'quart.inOut',
                },
            });

            animationTimeline.to(['.hands .content img'], {
                scale: 1,
                opacity: 1,
                duration: 1,
                scrollTrigger: {
                    trigger: parallaxContainer,
                    start: "top top",
                    end: "+=100%",
                    scrub: true,
                    onEnter: disableScrollingForSections,
                    passive: true,
                    ease: 'quart.inOut',
                },
            });

            // Create ScrollTrigger for the timeline
            ScrollTrigger.create({
                animation: animationTimeline,

                trigger: parallaxContainer,

                start: "top top",
                end: "+=100%",

                pin: true,

                onComplete: () => {
                    // Unpin element after animation
                    ScrollTrigger.unset(parallaxContainer);
                }
            });

            // Function to disable scrolling for specific sections
            function disableScrollingForSections() {
                sectionsToDisableScroll.forEach(section => {
                    section.style.overflow = 'hidden';
                });
            }

            // Function to enable scrolling for other sections when animations are complete
            function enableScrollingForOtherSections() {
                sectionsToDisableScroll.forEach(section => {
                    section.style.overflow = 'auto'; // You can adjust this based on your styling
                });
            }
        }, { passive: true }); // Use passive for the 'DOMContentLoaded' event


        const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)

        document.addEventListener("DOMContentLoaded", function () {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (screenWidth <= 550) {
                const section = document.querySelector('.profile-right');
                const swipeContainer = document.querySelector('.profile-left');
                const sectionHeight = section.clientHeight - 130;
                let isDragging = false;
                let startY = 0;
                let startTranslateY = 0;

                const maxTopPosition = sectionHeight - 500;

                gsap.set(section, { y: 0 });

                const hammerSection = new Hammer(section);
                hammerSection.get('pan').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSection.on('panstart', event => {
                    isDragging = true;
                    startY = event.center.y;
                    startTranslateY = gsap.getProperty(section, 'y');
                });

                hammerSection.on('pan', event => {
                    if (!isDragging) return;

                    const deltaY = event.center.y - startY;
                    let translateY = startTranslateY + deltaY;

                    translateY = Math.min(translateY, maxTopPosition);

                    gsap.set(section, { y: translateY });
                });

                hammerSection.on('panend', event => {
                    if (!isDragging) return;

                    isDragging = false;
                    const endY = event.center.y;
                    const deltaY = endY - startY;

                    const triggerThreshold = sectionHeight * 0.1;

                    if (deltaY < -triggerThreshold) {
                        gsap.to(section, { y: -sectionHeight });
                    } else {
                        gsap.to(section, { y: 0, snap: true });
                    }
                });

                const hammerSwipeContainer = new Hammer(swipeContainer);
                hammerSwipeContainer.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });

                hammerSwipeContainer.on('swipeup', () => {
                    gsap.to(section, { y: -sectionHeight });
                });

                const closeButton = document.querySelectorAll('.close-btn');

                closeButton.forEach(function (closeButton) {
                    closeButton.addEventListener('click', () => {
                        gsap.to(section, { y: 0, duration: 0.5 });
                    });
                });
            }
        });

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

            const close = document.querySelectorAll(".close-btn")
            const canvas = document.getElementById("canvas")
            const pSlider = document.querySelector("#p-slider")
            let card = document.querySelectorAll(".our-team-card")
            var isOpen = false;

            close.forEach(function (close) {
                close.addEventListener('click', function () {
                    if (isOpen) {
                        pSlider.style.right = '0';
                        canvas.style.opacity = "0.75";
                        canvas.style.zIndex = "100";
                        canvas.classList.remove('open');
                        // canvas.style.display = "flex";
                    } else {
                        pSlider.style.right = '-100%';
                        canvas.style.opacity = "0";
                        canvas.style.zIndex = "0";
                        // canvas.style.display = "none";
                    }
                });
            })

            canvas.addEventListener('click', function () {

                pSlider.style.right = '-100%';
                canvas.style.opacity = "0";
                canvas.style.zIndex = "0";
                // canvas.style.display = "none";
                isOpen = false;

            });


            card.forEach((card) => {
                card.addEventListener("click", function (event) {
                    //card-code
                    var childValue = event.currentTarget.querySelector('.team-heading').textContent;
                    var paragraphVal = event.currentTarget.querySelector(".frame-paragraph").textContent;
                    var profileVal = event.currentTarget.querySelector(".profile-pos").textContent;
                    var experienceVal = event.currentTarget.querySelector(".experience").textContent;
                    var jobTitleCard = event.currentTarget.querySelector(".profile-hash").textContent;
                    var jobTitleCardCss = event.currentTarget.querySelector(".profile-hash").getAttribute('style');
                    var imageVal = event.currentTarget.querySelector(".our-team-frame").getAttribute('src');

                    var lin = event.currentTarget.querySelector(".team-social-icons .ln").getAttribute('href');
                    var fcb = event.currentTarget.querySelector(".team-social-icons .fb").getAttribute('href');
                    var ind = event.currentTarget.querySelector(".team-social-icons .in").getAttribute('href');

                    //menu-code
                    var Nametitle = pSlider.querySelectorAll(".profile-name");
                    var paragraphTitle = pSlider.querySelector(".content");
                    var jobTitle = pSlider.querySelectorAll(".p-position");
                    // var jobTitleCss = pSlider.querySelectorAll(".p-position");
                    var jobTitle2 = pSlider.querySelectorAll(".profile-position");
                    var menuImg = pSlider.querySelector(".menu-p-img");
                    var pExperience = pSlider.querySelector(".p-experience");

                    var lin2 = pSlider.querySelector(".profile-social-right .ln");
                    var fcb2 = pSlider.querySelector(".profile-social-right .fb");
                    var ind2 = pSlider.querySelector(".profile-social-right .in");



                    paragraphTitle.textContent = paragraphVal;
                    // jobTitle.setAttribute("style", jobTitleCardCss);
                    // jobTitle2.textContent = profileVal;
                    menuImg.src = imageVal;
                    pExperience.textContent = experienceVal;
                    console.log("writing")

                    lin2.href = lin;
                    fcb2.href = fcb;
                    ind2.href = ind;



                    Nametitle.forEach(function (Nametitle) {
                        Nametitle.textContent = childValue;
                    })
                    jobTitle2.forEach(function (jobTitle2) {
                        jobTitle2.textContent = profileVal;
                    })
                    jobTitle.forEach(function (jobTitle) {
                        jobTitle.textContent = jobTitleCard;
                        jobTitle.setAttribute("style", jobTitleCardCss);
                    })

                    if (!isOpen) {
                        // canvas.style.display = "flex";
                        pSlider.style.right = '0%';
                        // console.log("doing")
                        canvas.style.opacity = "0.75";
                        canvas.style.zIndex = "100";
                        canvas.classList.add('open');

                    } else {
                        // canvas.style.display = "none";
                        pSlider.style.right = '-100%';
                        canvas.style.opacity = "0";
                        canvas.style.zIndex = "0";
                        canvas.classList.remove('open');
                    }
                })
            })
        });

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
            delay: 1.7,
            x: -100,
            stagger: -0.2,
        })
        tab4.from(".container .layer h1", {
            delay: 0.7,
            opacity: 0,
        })
        timeline.from(".nav ul li", {
            y: -100,
            delay: 0.2,
            stagger: 0.2,

        })



        let scrollTop; // Declare these variables outside the functions for proper scoping
        let scrollLeft;

        function disableScroll() {
            // Get the current page scroll position
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            // Store the scroll position and prevent scrolling
            window.onscroll = function () {
                window.scrollTo(scrollLeft, scrollTop);
            };

            console.log('Scroll disabled');
            lenis.stop()
        }

        function enableScroll() {
            // Restore the ability to scroll
            window.onscroll = null; // Remove the event handler

            console.log('Scroll enabled');
            lenis.start()
        }


</script>


<?php get_footer(); ?>