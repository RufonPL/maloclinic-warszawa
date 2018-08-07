<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Intermedia
 * @since Intermedia
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="box-page">
			<div id="primary" class="content-area">
				<div class="heading-page"><h1><?php the_title(); ?></h1></div>
				<main id="main" class="site-main" role="main">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );
					the_content();
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>

				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
		<?php $parent_only_query = new WP_Query(array(
   'post_type' => 'page',
   'post_parent' => $post->ID
		));
		?>
<div class="heading-min-sldier"><h2> <?php the_field('heading-mini-slider'); ?> </h2></div>
<?php if( get_field('mini-slider') ): ?>
		<div class="mini-slider">
					<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
						<ol id ="indicatorpage1" class="carousel-indicators">
									<?php $cn = -1; if( have_rows('mini-slider') ): while ( have_rows('mini-slider') ) : the_row(); $cn++;?>
									<li data-target="#carousel" data-slide-to="<?php echo $cn; ?>" class="<?php if($cn ==0) {echo 'active';} ?>"></li>
									<?php endwhile; else : endif; ?>
							</ol>
							<div class="carousel-inner">
								<?php
									$zmienna = 0;
										if( have_rows('mini-slider') ):
											while ( have_rows('mini-slider') ) : the_row();
											$zmienna++;?>
												<div class="<?php if($zmienna == 1) {echo 'active';} ?> item">
															<div id ="sliderpage<?php echo $cn; ?>" class="carousel-caption">
																		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="background-image:url(<?php the_sub_field('mini-slider-photo'); ?>); background-position: center;background-size: cover;width: 25%; height: 200px;     border: 3px solid #fff;"></div>
																		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="background-image:url(<?php the_sub_field('mini-slider-photo-2'); ?>); background-position: center;background-size: cover;width: 25%; height: 200px;    border: 3px solid #fff;"></div>
																		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="background-image:url(<?php the_sub_field('mini-slider-photo-3'); ?>); background-position: center;background-size: cover;width: 25%; height: 200px;    border: 3px solid #fff;"></div>
																		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="background-image:url(<?php the_sub_field('mini-slider-photo-4'); ?>); background-position: center;background-size: cover;width: 25%; height: 200px;    border: 3px solid #fff;"></div>
															</div>
												</div>
											<?php endwhile;
										else :
										endif;
									 ?>
								</div>
							<a class="carousel-control left" href="#carousel" data-slide="prev"><</a>
							<a class="carousel-control right" href="#carousel" data-slide="next">></a>
					</div>
					</div>
				<?php endif;?>
				
	</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar">
			<div class="heading-sidebar">
				
			</div>
					<?php get_sidebar(); ?>
		</div>
		</div>
</div>

</div>

<div class="info-boxs">
  <div class="container">
    <div class="row">
          <?php $cn = 0; if( have_rows('infoboxs' , 'option') ):
            while ( have_rows('infoboxs' , 'option') ) : the_row(); $cn++;?>
              <div class="col-xs-12 col-sm-6 col-mg-3 col-lg-3 infoboxss">
                <h2 class="infoheading"><?php the_sub_field('infoheading' , 'option'); ?> </h2>
                <h2 class="infoheading2"><?php the_sub_field('infoheading-1' , 'option'); ?> </h2>
                <div class="line"></div>
                <div class="info-text"><?php the_sub_field('infotext' , 'option'); ?> </div>
                <div id="but<?php echo $cn; ?>" class="href-button">
                   <p>ONLINE APOINTMENTS</p>
                </div>
              </div>
            <?php endwhile;
          else :
          endif;
        ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
