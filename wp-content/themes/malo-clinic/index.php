<?php get_header(); ?>

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8" >
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div style="border: 1px solid rgb(196, 196, 196);margin-bottom: 10px;padding: 1px 15px 27px 15px;">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                        <span class="entry-date"><?php echo get_the_date(); ?></span>
                        <div class="photo-entry"> <?php the_post_thumbnail(); ?> </div>
                        <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150, '...');?>
                    </a>
                </div>
            <?php endwhile; endif; ?>
            </div>
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
