<?php

/* Template Name: page-home */


beans_modify_action_callback('beans_loop_template', function(){
    global $post;
    /*
     * All Carbon fields
     */
    $header['image'] = wp_get_attachment_image_src(carbon_get_the_post_meta('header_image'), 'large');
    $header['title_start'] = carbon_get_the_post_meta('header_start');
    $header['title_end'] = carbon_get_the_post_meta('header_end');
    $header['para'] = carbon_get_the_post_meta('header_paragraph');
    $sections = carbon_get_the_post_meta('section');
    $footer_columns = carbon_get_the_post_meta('footer_columns');
    ?>
    <div class="uk-cover uk-height-viewport uk-position-relative" id="hero">
        <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center uk-position-cover">
            <div class="uk-container uk-container-center img-left">
                <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center">
                    <div class="uk-width-1-1 uk-width-medium-1-2 doms uk-text-center">
                        <div>
                            <img src="<?php echo $header['image'][0] ;?>">
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                        <div>
                            <h1><?php echo $header['title_start']; ?></h1>
                            <p><?php echo $header['para']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-flex uk-flex-center uk-flex-middle">
        <hr>
    </div>
    <?php

    // End Header
    // Begin Repeater
    foreach($sections as $s){ ?>
        <div class="uk-cover uk-height-viewport uk-position-relative">
            <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center uk-position-cover">
                <div class="uk-container uk-container-center img-left">
                    <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center <?php if($s['reverse']){ echo "uk-flex-row-reverse"; } ?>">
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms uk-text-center">
                            <div>
                                <img src="<?php echo wp_get_attachment_image_src($s['image'], 'large')[0]; ?>">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                            <div>
                                <?php echo apply_filters('the_content', $s['paragraph']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-center uk-flex-middle">
            <hr>
        </div>
    <?php
    } // End Repeater
});


beans_load_document();
