<?php
/**
 * Template Name: Page implantology
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
div#section {
    float: left;
    width: 100%;
    margin-bottom: 70px;
}
.carousel-indicators {
	bottom:-85px;
}
button.btn.btn-info.btn-lg.modal_button {
    position: absolute;
    right: 10px;
    bottom: 10px;
}
</style>



 

    <!-- NOWY BLOK O OSOBACH -->

    <!-- SZEF -->
    <?php $owner = get_field('owner_name');?>

    <?php if(!empty($owner)) { ?>

        <div class="owner">

            <div class="owner_title">
                <h2 class="owner_header"><?php  the_field('owner_name');?></h2>
                <p class="owner_subheader"><?php the_field('owner_subheader');?></p>
            </div>

            <div class="owner_pic">
                <img class="img_owner" src="<?php echo the_field('img_owner');?>" />
            </div>

            <div class="owner_details">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="owner_details_p"><?php the_field('owner_details');?></p>
                </div>
            </div>

        </div>

    <?php } ?>

    <!-- KONIEC SZEFA -->

    <!-- PERSONEL -->

    <?php $carousel_name = 0; if( have_rows('section_main') ): while( have_rows('section_main') ): the_row(); $carousel_name++; ?>
    
     <div class="owner_title_second">
        <h2 class="owner_header_second"><?php the_sub_field('name_section');?></h2>        
    </div>
    <?php if($carousel_name == 1 ) { ?>
    <?php if( have_rows('personel_names') ): ?>
        <?php $ct = 0; while( have_rows('personel_names') ): the_row(); $ct++; ?>
            <?php if($ct == 1 || $ct == 3 || $ct == 5 || $ct == 7 || $ct == 9 || $ct == 11 || $ct == 13 || $ct == 15 ) { ?>
        
                <div class="img_main">
                    <img class="img_good" src="<?php the_sub_field('avatar');?>" />
                </div>
        
                <div class="personel_details">
                    <h2 class="title_doctor"><?php the_sub_field('title_doctor'); ?></h2>
                    <p class="profession"><?php the_sub_field('profession');?></p>
                    <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target="" style="color:#000;"></button>
                </div>

            <?php } elseif ($ct == 2 || $ct == 4 || $ct == 6 || $ct == 8 || $ct == 10 || $ct == 12 || $ct == 14 || $ct == 16) { ?>
                <div class="personel_details">
                    <h2 class="title_doctor"><?php the_sub_field('title_doctor'); ?></h2>
                    <p class="profession"><?php the_sub_field('profession');?></p>
                    // <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target="" style="color:#000";></button>
                </div>

                 <div class="img_main">
                    <img class="img_good" src="<?php the_sub_field('avatar');?>" />
                </div>
            <?php } ?>

        <?php endwhile; endif; ?> <!-- PRESONEL NAMES -->
        
        <?php } else { ?>

        <?php if( have_rows('personel_names') ): ?>
            <?php $ct = 0; while( have_rows('personel_names') ): the_row(); $ct++; ?>
            
            <?php if($ct == 1 || $ct == 2 || $ct == 5 || $ct == 6 || $ct == 9 || $ct == 10 || $ct == 13 || $ct == 14 || $ct == 17 || $ct == 18) { ?>
               
                <?php if($ct == 1 || $ct == 5 || $ct == 9 || $ct == 13 || $ct == 17 ) { ?>
                    <div class="block_half">
                        <div class="img_second">
                            <img class="img_sec" src="<?php the_sub_field('avatar');?>" />
                        </div>
                        <div class="block_dark" id="style-4">
                            <h2 class="header_dark"><?php the_sub_field('title_doctor');?></h2>
                            <p class="profession"><?php the_sub_field('profession');?></p>
                             <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target=""></button>
                        </div>
                    </div>
                <?php } elseif($ct == 2 || $ct == 6 || $ct == 10 || $ct == 14 || $ct == 18 ) { ?>
                    <div class="block_half">
                        <div class="block_bright" id="style-4">
                            <h2 class="header_dark"><?php the_sub_field('title_doctor');?></h2>
                            <p class="profession"><?php the_sub_field('profession');?></p>
                             <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target="" style="color:#000;"></button>
                        </div>
                         <div class="img_second">
                            <img class="img_sec" src="<?php the_sub_field('avatar');?>" />
                        </div>
                    </div>
                <?php } ?>

            <?php } elseif ($ct == 3 || $ct == 4 || $ct == 7 || $ct == 8 || $ct == 11 || $ct == 12 || $ct == 15 || $ct == 16 || $ct == 19 || $ct == 20) { ?>

                 <?php if($ct == 3 || $ct == 7 || $ct == 11 || $ct == 15 || $ct == 19) { ?>
                    <div class="block_half">
                         <div class="img_second">
                            <img class="img_sec" src="<?php the_sub_field('avatar');?>" />
                        </div>
                        <div class="block_bright" id="style-4">
                            <h2 class="header_dark"><?php the_sub_field('title_doctor');?></h2>
                            <p class="profession"><?php the_sub_field('profession');?></p>
                             <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target="" style="color:#000;"></button>
                        </div>
                    </div>

                 <?php } elseif ($ct == 4 || $ct == 8 || $ct == 12 || $ct == 16 || $ct == 20) { ?>
                    <div class="block_half">
                        <div class="block_dark" id="style-4">
                            <h2 class="header_dark"><?php the_sub_field('title_doctor');?></h2>
                            <p class="profession"><?php the_sub_field('profession');?></p>
                            <button type="button" class="btn btn-info btn-lg modal_button" data-toggle="modal" data-target=""></button>
                        </div>
                         <div class="img_second">
                            <img class="img_sec" src="<?php the_sub_field('avatar');?>" />
                        </div>
                    </div>
                 <?php } ?>

            <?php } ?>
            <?php endwhile; endif; ?> <!-- PRESONEL NAMES -->

        <?php } ?>

        <?php endwhile; endif; ?>  <!-- SECTION MAIN REPEATOR ACF -->
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
                                <div class="photo-men" > <img src="<?php the_sub_field('avatar'); ?>"> </div>
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

    <!-- KONIEC PERSONELU -->

    <!-- koniec bloku o osobach -->


<?php get_footer(); ?>
