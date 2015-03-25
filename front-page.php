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
            <?php the_content(); ?>
        </div>
    </div>
</div>


<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Recent Posts</strong>
            </h2>
            <hr>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3><a href="#">Post One</a></h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3><a href="#">Post Two</a></h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3><a href="#">Post Three</a></h3>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php
get_footer();