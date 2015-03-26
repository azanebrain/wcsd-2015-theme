<?php
/**
 * The template for the front page.
 *
 * By default, WordPress will display the first 10 posts. By setting the Front Page to a static page in Settings -> Reading, this template will be loaded instead
 *
 * @link https://codex.wordpress.org/Template_Hierarchy#Front_Page_display
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 */

get_header(); ?>
<div class="row">
    <div class="box">
        <div class="col-lg-12 text-center">
            <h2 class="brand-before">
                <small>Welcome to the</small>
            </h2>
            <h1 class="brand-name">WordCamp San Diego 2015</h1>
            <hr class="tagline-divider">
            <h2>
                <small><strong>Theme Development Workshop</strong></small>
            </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Build a website
                <strong>worth visiting</strong>
            </h2>
            <hr>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <?php
            // Start the Loop.
            while ( have_posts() ) {
                the_post();
                // Include the page content template.
                the_content();
            }
            ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <?php
        // Query parameters
        $args = array (
            'post_status'         => 'publish',
            'posts_per_page'      => '3',
            'order'               => 'DESC',
            'orderby'             => 'date',
            'ignore_sticky_posts' => 1,
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
        ?>
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Recent Posts</strong>
            </h2>
            <hr>
        </div>
        <?php
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="col-sm-4 text-center">
                <!-- <img class="img-responsive" src="http://placehold.it/750x450" alt=""> -->
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium');
                } 
                ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php
        }
        ?>
        <div class="clearfix"></div>
        <?php
        } else {
            // Do nothing if there are no recent posts
        }
        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
</div>
<!-- /.row -->

<?php
get_footer();