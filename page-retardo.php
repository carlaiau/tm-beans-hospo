<?php

/* Template Name: page-retardo */


beans_modify_action_callback('beans_loop_template', function(){ ?>
    <div class="uk-cover uk-height-viewport uk-position-relative">
            <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center uk-position-cover">
                <div class="uk-container uk-container-center img-left">
                    <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center">
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/iphone-clay.png">
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                            <div>
                                <h2>Never miss a meeting</h2>
                                <p class="uk-margin-large uk-margin-top">No need to dial in, we dial you. When a call 
                                is scheduled everyone gets a notification just 
                                before the call.</p>
                                <p class="uk-margin-large">When the call is ready everyone gets dialled
                                 in automatically by our clever call engine using
                                 the cheapest local route.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="uk-cover uk-height-viewport uk-position-relative">
            <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center uk-position-cover">
                <div class="uk-container uk-container-center img-right">
                    <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-center">
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                            <div>
                                <h2>No subscription, just pay for what you use</h2>
                                <p class="uk-margin-large uk-margin-top">No need to dial in, we dial you. When a call 
                                is scheduled everyone gets a notification just 
                                before the call.</p>
                                <p class="uk-margin-large">When the call is ready everyone gets dialled
                                 in automatically by our clever call engine using
                                 the cheapest local route.</p>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-1-2 doms">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/screenshot.jpg">                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php });


beans_load_document();