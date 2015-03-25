<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 */

get_header(); ?>
<div class="row">
    <div class="box">
        <div class="col-lg-12 text-center">
            <h2 class="brand-before">
                <small>This is the</small>
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
            <h2 class="intro-text text-center">You're building a website
                <strong>worth visiting</strong>
            </h2>
            <hr>
            <img class="img-responsive img-border img-left" src="<?php echo get_template_directory_uri(); ?>/img/wcsd-logo-2015.png" alt="">
            <hr class="visible-xs">
            <p>We believe that one of the best ways to learn is by giving hands-on training and examples that people can then take and use in real world experiences.</p>
            <p>The goal of the Theme Bootcamp is to do just that. The team will guide you from start to finish on how to take a static, HTML website and integrate it into WordPress. If you have background in HTML and CSS but haven’t yet figured out how to use a solid CMS (content management system) to create dynamic and easily editable websites, this is the Bootcamp for you!</p>
            <p>When this 4 hour Bootcamp wraps up, it’s our hope that you will have a solid foundation to move forward as a true WordPress theme developer.</p>
        </div>
    </div>
</div>
<?php
get_footer();