<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 */

get_header(); 
?>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">About
                <strong>business casual</strong>
            </h2>
            <hr>
        </div>
        <?php
        // If this page has a feature image, display it next to the content
        // Otherwise have a full-width content section
        if ( has_post_thumbnail() ) {
        ?>
            <div class="col-md-6">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="col-md-6">
        <?php
        } 
        else {
        ?>
            <div class="col-md-12">
        <?php
        }
        ?>

        <?php
        // Start the Loop.
        while ( have_posts() ) {
            the_post();
            // Include the page content template.
            the_content();
        }
        ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Our
                <strong>Team</strong>
            </h2>
            <hr>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php
get_footer();