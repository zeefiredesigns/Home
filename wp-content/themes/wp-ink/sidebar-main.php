<?php
/**
 * wp-ink WordPress Theme, ordasvit.com
 * wp-ink is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

if (!wp_ink_show_position_preview("sidebar_right", "span4 side_bar_single") && wp_ink_is_active_sidebar("sidebar_right")) { ?>
	<div class="span4 side_bar_single">
		<?php if (function_exists('dynamic_sidebar'))
			dynamic_sidebar('sidebar_right'); ?>
	</div>
<?php }
; ?>