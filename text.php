<?php

// the query
$the_query = new WP_Query( array( 'post_type' => 'cards_action' ) )

?>


<?php if ( $the_query->have_posts() ) : ?>

    <div class="marriott-google-m-cards-action">
        <div class="container">
            <div class="row">

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4">
                        <div class="marriott-google-match margin-bottom shadow thumbnail close-card">
                            <div class="caption caption-up marriott-google-match-cards-action-caption">
                                <h3><?php the_title ?></h3>
                                <span class="btn toogle-btn toogle-btn-close">
                                    <span role="button" tabindex="0" aria-pressed="false" class="arrow arrow-down" tabindex="0"></span>
                                </span>
                            </div>
                            <div class="toogle-card" style="display: none;">
                                <?php $image = get_field('image_action_post'); ?>
                                <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" />
                                <div class="caption caption-down">
                                    <div class="flex-spacing marriott-google-match-text">
                                        <div class="text-content marriott-google-match-cards-action-text-content">
                                            <?php the_content ?>
                                        </div>
                                        <p class="btn-action"><a href="<?php the_field("btn_action_link"); ?>" <?php if (get_field('open_in_new_window')): ?> target="_blank" <?php else: ?> target="_self" <?php endif; ?>  class="btn" role="button"><?php the_field("btn_action_type"); ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>


    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched with Cards Action.' ); ?></p>
<?php endif; ?>
