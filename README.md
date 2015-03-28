# wcsd-2015-theme
Theme for the WordCamp 2015 Theme workshop

Based on the [Business Casual Bootstrap static HTML theme](https://github.com/IronSummitMedia/startbootstrap-business-casual)

# What's in this package
- A starting point for a WordPress theme
- Plugin: What The File
- Data to import into the demo site

# Setup instructions

Once your local server is setup and wcsd.dev is created, use the [WordPress Importer](http://wcsd.dev/wp-admin/admin.php?import=wordpress) to import `data.xml`.

Copy this theme demo file to your local file system.

Activate this theme.

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
    the_post_thumbnail();
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
{{The Content}}
?>
</div>
```

- Single Template 

single.PHP

- Archive Template

archive.PHP

https://codex.wordpress.org/Creating_an_Archive_Index#The_Template_.28archives.php.29

Post Formats Archive Page: http://wcsd.dev/?cat=38

- Sidebars

Register sidebar: https://codex.wordpress.org/Function_Reference/register_sidebar

Sidebar.PHP

Get_sidebar: https://codex.wordpress.org/Function_Reference/get_sidebar

- Pagination: https://codex.wordpress.org/Pagination

Previous and Next: https://codex.wordpress.org/Function_Reference/posts_nav_link

- Separate previous and next pagination buttons (extra task)

Just Previous: https://codex.wordpress.org/Function_Reference/previous_posts_link

Just Next: https://codex.wordpress.org/Function_Reference/next_posts_link

Check to see if there is a previous / next: get_previous_posts_link() & get_next_posts_link()

Create separate previous and next buttons if the current

This snippet will get you started:

```php
<?php 
if ( {{there are previous posts}} ) {
?>
    <li class="previous"><?php {{display the link for previous posts and output '&larr; Older'}} ) ?></li>
<?php 
}
if ( {{there are next posts links}} ) {
?>
    <li class="next"><?php {{display the link for next posts and output '&rarr; Newer'}} ?></li>
<?php 
}
?>
```

- Front Page: https://codex.wordpress.org/Creating_a_Static_Front_Page

https://codex.wordpress.org/Template_Hierarchy#Front_Page_display

front-page.php

- WP_Query(): https://codex.wordpress.org/Class_Reference/WP_Query

Parameters: https://codex.wordpress.org/Class_Reference/WP_Query#Parameters

WP_Query Generator: http://generatewp.com/wp_query/

wp_reset_postdata() : https://codex.wordpress.org/Function_Reference/wp_reset_postdata

A sample WP_Query() can be found in the Front Page template

- 

- 