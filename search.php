<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 */

get_header(); ?>
<div class="row">
    <div class="box">
        <div class="col-lg-12 text-center">
            <h2 class="brand-before">
                <small>Oops</small>
            </h2>
            <h1 class="brand-name">404</h1>
            <hr class="tagline-divider">
            <h2>
                <small><strong>Rage Not Found</strong></small>
            </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            
            <?php 
            if ( have_posts() ) { 
            ?>
                <hr>
                <h2 class="intro-text text-center"> Search Results for <strong><?php echo get_search_query(); ?>:</strong> </h2>
                <hr>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
                </header><!-- .page-header -->

                <?php
                // Start the loop.
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <p><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></p>
                    <?php
                    the_excerpt();
                // End the loop.
                }
                // Previous/next page navigation.
                posts_nav_link();
            }
            else {
            ?>
                <p>No results were returned.</p>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();