<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php if (get_locale() == 'pl_PL') { ?>              
	<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
		<div id="secondary" class="secondary">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Nazwa Widgeta') ) : ?>
			      <?php endif; ?>
		</div><!-- .secondary -->


			<div class="online-contact-box">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<h3 class="sidebar-heading-1"> Masz pytanie? </h3>
				<h2 class="sidebar-heading-2"> POROZMAWIAJ Z NAMI </h2>
				<p class="sidebar-text"><?php echo the_field('tekst_porozmawiaj_z_nami','options');?> </p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="side-1">
					<div id="icon-sidebar" class="smal-icon"> <img src="<?php echo get_template_directory_uri(); ?>/img/women-icon.png"> </div>
					<div id="button-sidebar" class="href-button"><a id="wp-live-chat-header"><p>ON-LINE</p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="heading-form-sidebar">
			<h2> MALO CLINIC WARSAW </h2>
		<h3> Wyślij nam wiadomość </h3>

	</div>
	<div class="form-sidebar">
	<?php echo do_shortcode('[contact-form-7 id="188" title="Sidebar - form_copy"]'); ?>
	
	</div>

	<div class="citation">
		<p><?php the_field('citation_(skopiuj)', 'option' , pll_current_language('pl_PL')) ?></p>
	</div>
	<?php endif; ?>
<?php } elseif  (get_locale() == 'en_GB') { ?>
	<?php if ( has_nav_menu( 'header-menu' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
		<div id="secondary" class="secondary">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Nazwa Widgeta') ) : ?>
			      <?php endif; ?>
		</div><!-- .secondary -->
		<div class="online-contact-box">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<h3 class="sidebar-heading-1"> Have a question? </h3>
				<h2 class="sidebar-heading-2"> TALK TO US </h2>
				<p class="sidebar-text"></p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="side-1">
					<div id="icon-sidebar" class="smal-icon"> <img src="<?php echo get_template_directory_uri(); ?>/img/women-icon.png"> </div>
					<div id="button-sidebar" class="href-button"><a href=""><p>ONLINE CHAT</p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="heading-form-sidebar">
				<h2> MALO CLINIC Warsaw </h2>
		<h3> Send us a message </h3>
	</div>
	<div class="form-sidebar">
	<?php echo do_shortcode('[contact-form-7 id="131" title="Sidebar - form"]'); ?>
	</div>

	<div class="citation">
		<p><?php the_field('citation', 'option' , pll_current_language('en_GB')) ?></p>
	</div>
	<?php endif; ?>                            
<?php }  ?>

