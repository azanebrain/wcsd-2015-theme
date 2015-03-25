<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
            <h2 class="intro-text text-center">Company
                <strong>blog</strong>
            </h2>
            <hr>
        </div>
        <?php
        if ( have_posts() ) {
          // Start the Loop:
          while ( have_posts() ) {
              the_post();
          ?>
              <div class="col-lg-12 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide-3.jpg">
                  <h2> 
                      <?php
                         the_title();
                      ?>
                      <br>
                      <small><?php the_date(); ?></small>
                  </h2>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg">Read More</a>
                  <hr>
                </div>
          <?php
          }
        } else {
        ?>
            <div class="col-lg-12 text-center">
              <h2>Sorry! No posts were found</h2>
            </div>
        <?php
        }
        ?>
        <div class="col-lg-12 text-center">
            <ul class="pager">
              <li class="previous">&larr; Older</li>
              <li class="next">&larr; Newer</li>
            </ul>
        </div>
    </div>
</div>
<?php
get_footer();
