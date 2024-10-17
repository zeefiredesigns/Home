<?php
/**
 * wp-ink WordPress Theme, ordasvit.com
 * wp-ink is distributed under the terms of the GNU GPL
 * Copyright: 2024 OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
?>
<?php wp_ink_show_position_preview("main_content"); ?>

<div class="row">
    <?php
    
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12 wrapper-short-post">
                <div class="wrapper-inner-short-post">
                    <div class="wrapper-short-post-img">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail(array(400, 400)); ?>
                        </a>
                    </div>
                    <div class="wrapper-short-post-info">
                        <?php the_category(); ?>
                        <h3 class="wrapper-short-post-title"><a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a></h3>
                        <div class="wrapper-short-post-author-with-date">
                            <div class="wrapper-short-post-date">
                                <i class="fas fa-calendar"></i>
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }

        ?>
        <div class="wrapper-pagination">
            <?php
            wp_ink_the_posts_navigation();
            ?>
        </div>
        <?php
    } else { ?>
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapper-not-found">
            <h2>
                <?php _e('NOT FOUND', 'wp-ink'); ?>
            </h2>
        </div>
        <?php
    }

    ?>

</div>