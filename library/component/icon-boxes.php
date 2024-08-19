<?php


// output the icons
function the_icon_boxes() {

    $content_before = get_sub_field( 'content_before' );
    $content_after = get_sub_field( 'content_after' );

    // check if the nested repeater field has rows of data
    if( have_rows('box') ):
        
        // start the container
        print '<div class="icon-boxes-container">';
        print '<div class="wrap">';

        // content before
        if ( !empty( $content_before ) ) print '<div class="icon-boxes-before">' . $content_before . '</div>';

        // icon boxes inner
        print '<div class="icon-boxes-inner">';

        // loop through the rows of data
        while ( have_rows('box') ) : the_row();

            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $content = get_sub_field('text');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('link');
            $color = get_sub_field('color');
            echo '<div class="icon">
                <h3><span>' . $title . '</span></h3>
                <div class="icon-image">
                    <img src="' . $image . '" />
                </div>
                <div class="icon-content">' . $content . '</div>
                ' . ( !empty( $button_link ) ? '<a href="' . $button_link . '"' : '<span' ) . ' class="btn ' . $color . '">' . $button_text . ( !empty( $button_link ) ? '</a>' : '</span>' ) .
            '</div>';

        endwhile;

        // boxes inner
        print '</div>';

        // after content
        if ( !empty( $content_after ) ) print '<div class="icon-boxes-after">' . $content_after . '</div>';

        // close container
        print '</div>';
        print '</div>';

    endif;
    
}


