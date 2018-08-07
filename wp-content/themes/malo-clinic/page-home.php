<?php
/**
 * Template Name: Page home
 *
 * @package WordPress
 * @subpackage Intermedia
 * @since Intermedia
 */
 get_header();  ?>
 <div class="slider-glowny">
   <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
     <ol class="carousel-indicators">
           <?php $cn = -1; if( have_rows('slider1') ): while ( have_rows('slider1') ) : the_row(); $cn++;?>
           <li data-target="#carousel" data-slide-to="<?php echo $cn; ?>" class="<?php if($cn ==0) {echo 'active';} ?>"></li>
           <?php endwhile; else : endif; ?>
       </ol>
       <div class="carousel-inner">
         <?php
           $zmienna = 0;
             if( have_rows('slider1') ):
               while ( have_rows('slider1') ) : the_row();
               $zmienna++;?>
                 <div class="<?php if($zmienna == 1) {echo 'active';} ?> item" style="background-image:url(<?php the_sub_field('obrazek'); ?>); background-position: center;background-size: cover;    float: left;width: 100%;">
                       <div class="carousel-caption">
                         <h2><?php the_sub_field('naglowek1'); ?></h2>
                         <h3><?php the_sub_field('naglowek2'); ?></h3>
                         <div class="href-button"><a href="<?php the_sub_field('link_slider');?>">
                          <?php if (get_locale() == 'pl_PL') { ?>
                             <p>CZYTAJ WIĘCEJ</p>
                           <?php } elseif  (get_locale() == 'en_GB') {?>
                             <p>READ MORE</p>
                           <?php }  ?></a>
                         </div>
                       </div>
                 </div>
               <?php endwhile;
             else :
             endif;
            ?>
         </div>
       <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
       <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
   </div>
 </div>
<div class="boxs3">
  <?php $cn = 0;
      if( have_rows('boxs') ):;
        while ( have_rows('boxs') ) : the_row(); $cn++;?>
          <div class="col-xs-12 col-sm-12 col-mg-4 col-lg-4">
            <div class="headings">
              <h2><?php the_sub_field('heading-box'); ?></h2>
              <h3><?php the_sub_field('heading-text'); ?></h3>
            </div>
            <div class="icona-box-1"> <img src="<?php the_sub_field('heading-icon'); ?>"></div>
            <div class="icona-box" style="background-image: url('<?php the_sub_field('heading-photo'); ?>')"> </div>
            <div class="text-heading"><p><?php the_sub_field('text-heading'); ?></p></div>
              <div id="button<?php echo $cn; ?>" class="href-button"><a <?php if($cn != 3) { ?> href=" <?php the_sub_field('href-box-1'); ?>"<?php } elseif ($cn == 3) { ?> href="kliniki" <?php } ?> ><p><?php the_sub_field('heading-box-1'); ?></p></a>
                <div class="smal-icon">  </div>
              </div>
          </div>
        <?php endwhile;
      else :
      endif;
    ?>

</div>
<?php get_footer(); ?>
