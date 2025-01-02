<?php


function the_big_box() {
    $content = get_sub_field('content');
    $style = get_sub_field('style');
    $title = get_sub_field('title');
    $title_color = get_sub_field('title_color');
    if ( !empty( $content ) ){
        ?>
    <div class="big-box <?php print $style; ?>">
        <div class="box">
            <div class="box-title <?php print $title_color; ?>"><?php print $title; ?></div>
            <div class="box-content"><?php print $content ?></div>
        </div>
    </div>
        <?php
    }
}

