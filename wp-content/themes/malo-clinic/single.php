<?php get_header(); ?>

<div class="container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <span class="entry-date"><?php echo get_the_date(); ?></span>
      <div class="photo-entry"> <?php the_post_thumbnail(); ?> </div>
      <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
    <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
