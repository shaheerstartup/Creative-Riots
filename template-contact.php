<?php
//Template Name: contact
get_header();
?>

<?php
the_content();
function get_custom_data() {
    return '<div class="text">
    <h1 class="layer link3" data-valu="0.21">
        CONTACT!
    </h1>
</div>';

}

?>



<script type="text/javascript">
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
        delay: 0,
        x: -100,
        stagger: 0.3,
    })
    tab3.from(".left-nav .social-sec .social-icon", {
        delay: 1,
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

<?php
get_footer();
?>

