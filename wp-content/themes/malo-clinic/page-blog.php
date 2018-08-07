<?php
/**
 * Template Name: Page blog
 *
 * @package WordPress
 * @subpackage Intermedia
 * @since Intermedia
 */
 get_header();  ?>

<div class="container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
        <?php the_title(); ?>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
    <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
