<?php get_header('post');?>

<?php 
while ( have_posts() ) : the_post(); 
?>
    <div class="main-post-div">
        <div class="container">
            <div class="left">
                <div class="single-page-post-heading">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php if (has_post_thumbnail()): ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div class="content-here">
                    <?php the_content(); ?>
                </div>
                <div class="comment-section-here">
                    <?php //comments_template(); ?>
                </div>
            </div>
            <div class="right">
                <h2>Recent Blogs</h2>
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
                            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<style>
    .section1 .container{
        display: none;
    }
</style>

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

<?php
get_footer();
?>