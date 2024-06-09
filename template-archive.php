<?php 
// Template Name: archive
get_header();
function get_custom_data()
{
    return '
    <div class="text">
    <h1 class="layer link3" data-valu="0.21">
        BLOGS!
    </h1>
</div>';
}
?>
<div class="main-post-div">
    <div class="container">
        <div class="all-blogs">
            <!-- <h2>Blogs</h2> -->
            <ul>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                );
                $recent_posts = get_posts($args);
                foreach ($recent_posts as $post) : setup_postdata($post); ?>
                    <li>
                    <div class="post-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?> </a>
                        <?php endif; ?>
                        <div class="post-content">
                            <h2><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p> </div>
                            <div class="post-meta">
                                <span class="post-date">Posted: <?php the_date('F j, Y'); ?></span>
                                <span class="post-author">By: <?php the_author(); ?></span>
                            </div>
                        </div>
                    </li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>



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

    function enableScroll() {
        // Restore the ability to scroll
        window.onscroll = null; // Remove the event handler

        console.log('Scroll enabled');
        lenis.start()
    }

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
</script>



<?php get_footer(); ?>
