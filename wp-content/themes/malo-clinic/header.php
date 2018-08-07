<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Malo Clinic Warsaw</title>   
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style-RWD.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PF35HX3');</script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2120625971552806');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=2120625971552806&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <style>
#plWebFrikContent > iframe {display: block}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF35HX3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<a href="https://web.facebook.com/maloclinicwarsaw/" target="_blank" style="background: url('<?php echo get_template_directory_uri(); ?>/button_fb.png');position: fixed; right: 0; width: 340px; margin-right: -290px;   -webkit-transition: all 0.9s ease; -moz-transition: all 0.9s ease; -o-transition: all 0.9s ease; transition: all 0.9s ease; top: 50%; height: 55px; margin-top: -285px; z-index: 9999999999999;"></a>
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="top-links">
        <ul>

          <?php if (get_locale() == 'pl_PL') { ?>

            <?php
                if( have_rows('top-link-pl', 'option' , pll_current_language('pl_PL')) ):
                  while ( have_rows('top-link-pl', 'option' , pll_current_language('pl_PL')) ) : the_row(); ?>
                      <a href="<?php the_sub_field('href-corpo-link-pl', 'option' , pll_current_language('pl_PL')); ?>"><li><?php the_sub_field('corpo-link-pl', 'option' , pll_current_language('pl_PL')); ?></li></a> 
                    <?php endwhile;
                  else :
                  endif;
                ?>

          <?php } elseif  (get_locale() == 'en_GB') {?>    

            <?php
                if( have_rows('top-link', 'option') ):
                  while ( have_rows('top-link', 'option') ) : the_row(); ?>
                      <a href="<?php the_sub_field('href-corpo-link', 'option'); ?>"><li><?php the_sub_field('corpo-link', 'option'); ?></li></a> 
                    <?php endwhile;
                  else :
                  endif;
                ?>

          <?php }  ?>    

        </ul>
      </div>
      <div class="language">
        <div class="icon-language">
          <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'menu_class' => 'icon-language',
          'walker' => new intermedia_walker_nav_menu,
          'fallback_cb' => false,
          'depth' => 0
          )); ?>
        </div>

        <?php if (get_locale() == 'pl_PL') { ?>
        <h3>Język:</h3>
      <?php } elseif  (get_locale() == 'en_GB') {?>
        <h3>Language:</h3>
        <?php }  ?>
      </div>
    </div>
  </div>
</div>
<div class="top-bar-2">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('logo', 'option')?>"></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="icon-contact">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display: none;">
                    <img src="<?php the_field('icon-contact-box', 'option'); ?>">
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                      <?php if (get_locale() == 'pl_PL') { ?>
                        <span class="sr-only">Zamknij</span>
                      <?php } elseif  (get_locale() == 'en_GB') {?>
                        <span class="sr-only">Close</span>
                      <?php }  ?>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php if (get_locale() == 'pl_PL') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="187" title="Bez tytułu"]'); ?>
                    <?php } elseif  (get_locale() == 'en_GB') {?>
                    <?php echo do_shortcode('[contact-form-7 id="69" title="Popup"]'); ?>
                    <?php }  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="text" style="display: none">
         
                <?php if (get_locale() == 'pl_PL') { ?>
                     <h3><?php the_field('1-contact-box-pl', 'option' , pll_current_language('pl_PL')); ?></h3>
                     <p><?php the_field('2-contact-box-pl', 'option' , pll_current_language('pl_PL')); ?><p>
                <?php } elseif  (get_locale() == 'en_GB') {?>
                     <h3><?php the_field('1-contact-box', 'option'); ?></h3>
                     <p><?php the_field('2-contact-box', 'option'); ?><p>
                <?php }  ?>
            </div>
          </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="icon-contact"> <img src="<?php the_field('1.2-icon-contact-box', 'option'); ?>"> </div>
            <div class="text">
                <?php if (get_locale() == 'pl_PL') { ?>
                     <h3><?php the_field('1.1-contact-box-pl', 'option' , pll_current_language('pl_PL')); ?></h3>
                     <p><?php the_field('2.2-contact-box-pl', 'option' , pll_current_language('pl_PL')); ?><p>
                     <p><?php the_field('2.2-contact-box-second-pl', 'option' , pll_current_language('pl_PL')); ?><p>
                <?php } elseif  (get_locale() == 'en_GB') {?>
                     <h3><?php the_field('1.2-contact-box', 'option'); ?></h3>
                     <p><?php the_field('2.2-contact-box', 'option'); ?><p>
                     <p><?php the_field('2.2-contact-box-second', 'option'); ?><p>
                <?php }  ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

          <!--  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <?php bloginfo( 'name' ); ?>
            </a>-->

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new intermedia_walker_nav_menu,
            'fallback_cb' => false,
            'depth' => 2
            )); ?>
        </div>
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div>
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
              <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
          </div>
        </form>
    </div>
</nav>
<script>
  jQuery(function(main) {
    var header = jQuery("navbar.navbar-default");
    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 60) {
            header.addClass(' scrolled');
        } else {
            header.removeClass(' scrolled');
        }
    });
});
</script>
