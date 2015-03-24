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
            <p>It looks like the page you requested could not be found. Try searching for it here:</p>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php
get_footer();