<?php
/**
 * Template part for displaying page content in page.php
 *
 * @subpackage Clothes Rental Services
 * @since 1.0
 * @version 0.1
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php luzuk_clothes_rental_services_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php if(has_post_thumbnail()) { ?>
	    	<?php the_post_thumbnail(); ?>
	    <?php }?>
		<p><?php the_content();?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'clothes-rental-services' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>