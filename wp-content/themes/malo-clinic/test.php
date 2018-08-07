<?php
/**
 * Template Name: Page test
 *
 * @package WordPress
 * @subpackage Intermedia
 * @since Intermedia
 */
 get_header();  ?>
 <script>
jQuery(document).ready(function(){
    jQuery('.modal_button').each(function (i) {
        jQuery(this).attr('data-target', '#myModal-' + i);
    });
    jQuery('.modal.fade').each(function (i) {
        var numb = i - 1;
        jQuery(this).attr('id', 'myModal-' + numb);
    });
 });


jQuery(document).ready(function(){
    jQuery('.multi-item-carousel').carousel({
        interval: false
    });

    jQuery('.multi-item-carousel .item').each(function(){
        var next = jQuery(this).next();
        if (!next.length) {
            next = jQuery(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo(jQuery(this));
      
        if (next.next().length>0) {
            next.next().children(':first-child').clone().appendTo(jQuery(this));
        } else {
            jQuery(this).siblings(':first').children(':first-child').clone().appendTo(jQuery(this));
        }
    });
});
</script>

<style>
.multi-item-carousel .carousel-inner > .item {
    -webkit-transition: 500ms ease-in-out left;
    transition: 500ms ease-in-out left;
}
.multi-item-carousel .carousel-inner .active.left {
    left: -33%;
}
.multi-item-carousel .carousel-inner .active.right {
    left: 33%;
}
.multi-item-carousel .carousel-inner .next {
    left: 33%;
}
.multi-item-carousel .carousel-inner .prev {
    left: -33%;
}
@media all and (transform-3d), (-webkit-transform-3d) {
    .multi-item-carousel .carousel-inner > .item {
        -webkit-transition: 500ms ease-in-out left;
        transition: 500ms ease-in-out left;
        -webkit-transition: 500ms ease-in-out all;
        transition: 500ms ease-in-out all;
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
        -webkit-transform: none!important;
        transform: none!important;
    }
}
.multi-item-carousel .carouse-control.left,
.multi-item-carousel .carouse-control.right {
    background-image: none;
}
</style>

<?php $carousel_name = 0; if( have_rows('section_main') ): while( have_rows('section_main') ): the_row(); $carousel_name++; ?>

    <!-- Nazwa kategorii -->
    <div class="headingpages">
        <div class="container">
            <div class="row">
                <h1 class="naglowek-top"><?php the_sub_field('name_section');?></h1>
            </div>
        </div>
    </div>
    <!-- End nazwa kategorii -->

    <!-- osoby -->
    <div class="team-slider" id="section">
        <div class="container">
            <?php if( have_rows('personel_names') ): ?>

                <div class="carousel slide multi-item-carousel" id="team-<?php echo $carousel_name; ?>" data-interval="false">

                        <ol class="carousel-indicators">
                            <?php $col = 0; while( have_rows('personel_names') ): the_row(); $col++; $col_final = $col - 1; ?>
                                <li data-target="#team-<?php echo $carousel_name; ?>" data-slide-to="<?php echo $col_final; ?>" class="<?php if($col_final == 0) { echo 'active'; } ?>"></li>
                            <?php endwhile; ?>
                        </ol>

                    <div class="carousel-inner">
                        <?php $ct = 0; while( have_rows('personel_names') ): the_row(); $ct++; ?>

                            <div class="item <?php if($ct == 1) { echo 'active'; } ?>">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="photo-team">
                                        <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target="" style="background-image: url('<?php the_sub_field('avatar'); ?>');  background-position: top;"></button>
                                    </div>
                                    <div class="text-team">
                                        <h2><?php the_sub_field('title_doctor'); ?></h2>
                                        <p><?php the_sub_field('profession'); ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>

            <?php endif; ?>
        </div>
    </div>
<?php endwhile;  endif; ?>

<!-- Modal -->
<?php if( have_rows('section_main') ): while( have_rows('section_main') ): the_row(); ?>
    <?php if( have_rows('personel_names') ): ?>
        <?php $ct = 0; while( have_rows('personel_names') ): the_row(); $ct++; ?>
            <div id="myModal-<?php echo $ct; ?>" class="modal fade" role="dialog">
                <div id="classs1" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                tttt<div class="photo-men" > <img src="<?php the_sub_field('avatar'); ?>"> </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="text-team">
                                    <h2><?php the_sub_field('title_doctor'); ?></h2>
                                    <p><?php the_sub_field('profession'); ?></p>
                                </div>
                                <div class="tekst-doctor">
                                    <?php the_sub_field('about_doctor'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div> 
                </div> 
            </div>
        <?php endwhile; ?> 
    <?php endif; ?>
<?php endwhile;  endif; ?>
<!-- End modal -->


<?php get_footer(); ?>
