# wcsd-2015-theme
Theme for the WordCamp 2015 Theme workshop

Based on the [Business Casual Bootstrap static HTML theme](https://github.com/IronSummitMedia/startbootstrap-business-casual)

# What's in this package
- A starting point for a WordPress theme
- Plugin: What The File
- Data to import into the demo site

# Setup instructions

# Resources

- Header and footer

get_header() : https://codex.wordpress.org/Function_Reference/get_header

get_footer() : https://codex.wordpress.org/Function_Reference/get_footer

wp_head() : http://codex.wordpress.org/Function_Reference/wp_head

wp_footer() : http://codex.wordpress.org/Function_Reference/wp_footer

- get_template_directory() : http://codex.wordpress.org/Function_Reference/get_template_directory

- Navigation

register_nav_menus() : http://codex.wordpress.org/Function_Reference/register_nav_menus

wp_nav_menu() : http://codex.wordpress.org/Function_Reference/wp_nav_menu

- the_post() : https://codex.wordpress.org/Function_Reference/the_post

- Page Template

page.PHP

Page A: http://wcsd.dev/wp-admin/post.php?post=733&action=edit

- The Loop: https://codex.wordpress.org/The_Loop

```php
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
      the_post();
      // the_content();
      // the_excerpt();
      // the_title();
      // the_permalink();
      // ...
  }
}
?>
```

- The Post: https://codex.wordpress.org/Function_Reference/the_post

- Featured image

has_post_thumbnail: https://codex.wordpress.org/Function_Reference/has_post_thumbnail

the_post_thumbnail: https://codex.wordpress.org/Function_Reference/the_post_thumbnail

```php
<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail('medium');
} 
?>
```

- Conditional featured image (extra task)

If the page has a feature image, display it next to the content. Otherwise have a full-width content section

This snippet will get you started:

```html
<?php if ( {{has post thumbnail}} ) { ?>	
<div class="col-md-6">
	{{image}}
</div>
<div class="col-md-6">
<?php 
} else {
?>
<div class="col-md-12">
<?php
}
{{The Loop}}
?>
</div>
```

- Single Template 

single.PHP

- Archive Template

archive.PHP

https://codex.wordpress.org/Creating_an_Archive_Index#The_Template_.28archives.php.29

Post Formats Archive Page: http://wcsd.dev/?cat=38

- Register sidebar: https://codex.wordpress.org/Function_Reference/register_sidebar

- Sidebar.PHP

- Get_sidebar: https://codex.wordpress.org/Function_Reference/get_sidebar

- Pagination: https://codex.wordpress.org/Pagination

  https://codex.wordpress.org/Function_Reference/posts_nav_link

  https://codex.wordpress.org/Function_Reference/previous_posts_link

  https://codex.wordpress.org/Function_Reference/next_posts_link

```php
<?php 
if ( get_previous_posts_link() ) {
?>
    <li class="previous"><?php previous_posts_link( '&larr; Older' ) ?></li>
<?php 
}

if ( get_next_posts_link() ) {
?>
    <li class="next"><?php next_posts_link( 'Newer &rarr;' ) ?></li>
<?php 
}
?>
```

- Front Page

- WP_Query