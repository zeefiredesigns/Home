<?php
/**
 * Template for displaying search forms in Clothes Rental Services
 *
 * @subpackage Clothes Rental Services
 * @since 1.0
 * @version 0.1
 */
?>

<?php $luzuk_clothes_rental_services_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e('Search for:','clothes-rental-services'); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','clothes-rental-services' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
	</label>
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'clothes-rental-services' ); ?></button>
</form>