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
            <img class="img-responsive img-border img-left" src="<?php echo get_template_directory_uri(); ?>/img/intro-pic.jpg" alt="">
            <hr class="visible-xs">
            <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
            <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Beautiful boxes
                <strong>to showcase your content</strong>
            </h2>
            <hr>
            <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </div>
</div>
<?php
get_footer();