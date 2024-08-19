<?php


function the_content_area() {
    $content = get_sub_field('content');
    $style = get_sub_field('style');
    $before_footer = get_sub_field('before_footer');
    $width = ' ' . get_sub_field('width');
    if ( !empty( $content ) ){
        ?>
    <div class="content-area <?php print $style; print ( $before_footer ? ' before-footer' : '' ); print $width; ?>">
        <div class="wrap">
            <?php print $content ?>
        </div>
    </div>
        <?php
    }
}

