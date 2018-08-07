<?php wp_footer(); ?>
<div class="bottom-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="logo-footer"><img src="<?php the_field('logo-footer', 'option'); ?>"> </div>
      </div>
        <?php
            if( have_rows('footer', 'option') ):
              while ( have_rows('footer', 'option') ) : the_row(); ?>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columns">
                    <div class="icon-footer"> <img src="<?php the_sub_field('columns-icon', 'option'); ?>"> </div>
                    <div class="footer-tekst">
                      <h2> <?php the_sub_field('columns-name', 'option'); ?> </h2>
                      <p> <?php the_sub_field('columns-text', 'option'); ?></p>
                    </div>
                  </div>
                <?php endwhile;
              else :
              endif;
            ?>
      </div>
  </div>
</div>
<div class="copyright">
  <div class="container">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		
			<p><b>© 2018 All rights reserved MALO CLINIC</b></p>
    </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/img/yt.svg"> </a>
        <a href="https://www.facebook.com/maloclinicwarsaw/">  <img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"> </a>
      </div>
  </div>
</div>
<style>
  .f-nav {
    z-index: 9999;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
}
  }
</style>
<script>
jQuery("document").ready(function($){
    var nav = jQuery('.navbar.navbar-default');

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 160) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});
</script>
<script>
jQuery('.carousel').carousel();
</script>
<script type="text/javascript" src="https://panel-klienta.wedomediagroup.pl/user-script/b1da4704487a32e1e618206db5ac2624.js"></script>
</body></html>
