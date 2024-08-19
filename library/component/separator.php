<?php


function the_separator() {
    $style = get_sub_field( 'style' );
    print '<div class="separator ' . $style . '"></div>';
}

