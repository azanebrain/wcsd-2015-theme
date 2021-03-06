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
        <div class="col-md-6">
            <img class="img-responsive img-border img-left" src="<?php echo get_template_directory_uri(); ?>/img/wcsd-logo-2015.png" alt="">
        </div>
        <div class="col-md-6">
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