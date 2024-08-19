<?php

function the_post_list() {

    // get post list specs
    $title = get_sub_field( 'title' );
    $category = implode( ',', get_sub_field( 'category' ) );
    $posts_per_page = get_sub_field( 'posts_per_page' );

    if ( !empty( $category ) ) {
        ?>
        <div class="post-list-container">
            <div class="wrap">
                <div class="post-list">
                    <?php print do_shortcode( '[articles cats="' . $category . '" posts_per_page="' . $posts_per_page . '" /]' ); ?>
                </div>
            </div>
        </div>
        <?php
    }

}

