<?php
/**
 * wp-ink WordPress Theme, ordasvit.com
 * wp-ink is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header();
?>
<?php get_template_part('templates/positions-before-content'); ?>

<header class="page-header">
	<h3 class="page-title">
		<?php _e('Not found', 'wp-ink'); ?>
	</h3>
</header>

<div class="page-wrapper">
	<div class="page-content">
		<h3>
			<?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'wp-ink'); ?>
		</h3>
		<p>
			<?php _e('It looks like nothing was found at this location. Maybe try a search?', 'wp-ink'); ?>
		</p>

		<?php get_search_form(); ?>
	</div><!-- .page-content -->
</div><!-- .page-wrapper -->

<?php get_template_part('templates/positions-after-content'); ?>
<?php get_footer(); ?>