<?php


// output the icons
function the_minutes() {

    // check if the nested repeater field has rows of data
    if( have_rows('video') ):
        
        // start the container
        print '<div class="minutes-container">';
        print '<div class="wrap">';

        // icon boxes inner
        print '<div class="minutes-inner">';
        print '<div class="column"><img src="' . get_bloginfo('template_url') . '/img/logo-minutes.svg" /></div>';

        // loop through the rows of data
        while ( have_rows('video') ) : the_row();

            $image = get_sub_field('image');
            $link = get_sub_field('link');
            $button_link = get_sub_field('button_link');
            echo '<div class="video">
                <a href="' . $link . '" class="lightbox-iframe video-link"><img src="' . $image . '" /></a>
                <div class="read-more-button text-center">' . do_shortcode( '[button class="green" url="' . $button_link . '"]' . ( $_SESSION['language']['abbreviation'] == 'es' ? 'Leer Más' : 'Read More' ) .' &raquo;[/button]' ) . '</div>
            </div>';

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


