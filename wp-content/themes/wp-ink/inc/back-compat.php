<?php
/**
 * wp-ink WordPress Theme, ordasvit.com
 * wp-ink is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

/**
 * Prevent switching to wp_ink on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since wp_ink 1.0
 *
 * @return void
 */
function wp_ink_theme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'wp_ink_theme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'wp_ink_theme_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * wp_ink_ on WordPress versions prior to 3.6.
 *
 * @since wp_ink_ 1.0
 *
 * @return void
 */
function wp_ink_theme_upgrade_notice() {
	$message = sprintf( __( 'wp-ink requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'wp-ink' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since wp_ink_ 1.0
 *
 * @return void
 */
function wp_ink_theme_customize() {
	wp_die( sprintf( __( 'wp-ink requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'wp-ink' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'wp_ink_theme_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since wp_ink_ 1.0
 *
 * @return void
 */
function wp_ink_theme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'wp-ink requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'wp-ink' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'wp_ink_theme_preview' );
