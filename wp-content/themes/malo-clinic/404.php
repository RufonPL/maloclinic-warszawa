<?php get_header(); ?>

<div class="container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12">
        <?php the_title(); ?>
        BRAK STRONY
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
