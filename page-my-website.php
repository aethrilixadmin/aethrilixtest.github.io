<?php
/*
Template Name: My Website Page
*/
get_header(); ?>
<div class="container">
  <h1><?php the_title(); ?></h1>
  <p>This is a custom page template for "My Website".</p>
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>
