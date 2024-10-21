<?php
/**
 * The header for our theme
 *
 * @subpackage Clothes Rental Services
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'clothes-rental-services' ); ?></a>

<div id="header">
	<div class="main-header">
		<div class="top-head">
			<div class="container">
				<div class="tph-inn">
					<div class="row m-0">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="logo text-lg-left text-center">
								<?php if ( has_custom_logo() ) : ?>
									<?php the_custom_logo(); ?>
								<?php endif; ?>
								<?php if (get_theme_mod('luzuk_clothes_rental_services_show_site_title',true)) {?>
									<?php $blog_info = get_bloginfo( 'name' ); ?>
									<?php if ( ! empty( $blog_info ) ) : ?>
										<?php if ( is_front_page() && is_home() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
								<?php }?>
								<?php if (get_theme_mod('luzuk_clothes_rental_services_show_tagline',true)) {?>
									<?php $description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo esc_html($description); ?></p>
									<?php endif; ?>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<?php if(class_exists('woocommerce')){ ?>
								<div class="row">
									<div class="col-lg-10 col-md-9 col-sm-9">
										<div class="search-box">
											<?php if(class_exists('woocommerce')){ ?>
												<?php get_search_form() ?>
											<?php }?> 
										</div>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-3 pd-0">
										<div class="btncart">
											<?php if(class_exists('woocommerce')){ ?>
												<div class="cart">
													<span><?php echo esc_html('Cart','clothes-rental-services'); ?></span>
													<a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="far fa-shopping-cart"></i></a>
												</div>
											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="m-head">
		<div class="container">
			<div class="row mr-0">
				<div class="col-lg-8 col-md-8">
					<div class="header-inner section-inner">
						<div class="header-titles-wrapper">
							<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
								<span class="toggle-inner">
									<span class="toggle-icon">
										<i class="fas fa-bars"></i>
									</span>
									<!-- <span class="toggle-text"><//?php _e( 'Menu', 'clothes-rental-services' ); ?></span> -->
								</span>
							</button><!-- .nav-toggle -->
						</div><!-- .header-titles-wrapper -->

						<div class="header-navigation-wrapper">
							<?php
							if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
								?>
								<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'clothes-rental-services' ); ?>">
									<ul class="primary-menu reset-list-style">
										<?php
										if ( has_nav_menu( 'primary' ) ) {

											wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary',
												)
											);

										} elseif ( ! has_nav_menu( 'expanded' ) ) {

											wp_list_pages(
												array(
													'match_menu_classes' => true,
													'show_sub_menu_icons' => true,
													'title_li' => false,
													'walker'   => new Clothes_Rental_Services_Walker_Page(),
												)
											);

										}
										?>
									</ul>
								</nav><!-- .primary-menu-wrapper -->
							<?php } ?>
						</div><!-- .header-navigation-wrapper -->
					</div><!-- .header-inner -->
					<?php
						// Output the menu modal.
						get_template_part( '/inc/modal-menu' );
					?>
				</div>
				<div class="col-lg-4 col-md-4 pr-0">
					<div class="s-media">
						<li>
							<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_header_twittericonlink')); ?>">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_header_instagramiconlink')); ?>">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_header_facebookiconlink')); ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_html(get_theme_mod('luzuk_clothes_rental_header_pinteresticonlink')); ?>">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if(is_singular()) {?>
	<div id="inner-pages-header">
		<div class="header-overlay"></div>
	    <div class="header-content">
		    <div class="container"> 
		      	<h1><?php single_post_title(); ?></h1>
		      	<div class="innheader-border"></div>
		      	<div class="theme-breadcrumb mt-2">
					<?php luzuk_clothes_rental_services_breadcrumb();?>
				</div>
		    </div>
		</div>
	</div>
<?php } ?>