<?php
/**
 * 
 * Template name: Front-end
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frontend-test
 */

get_header('frontend');


    while(have_rows('template_layout')) : the_row();
        if(get_row_layout('template_layout') == 'hero'):
            get_template_part('templates/frontend/hero');
        elseif(get_row_layout('template_layout') == 'workfor'):
            get_template_part('templates/frontend/workfor');
        elseif(get_row_layout('template_layout') == 'benefits'):
            get_template_part('templates/frontend/benefits');
        elseif(get_row_layout('template_layout') == 'expectations'):
            get_template_part('templates/frontend/expectations');
        elseif(get_row_layout('template_layout') == 'contact'):
            get_template_part('templates/frontend/contact'); 
        endif;
    endwhile;

get_footer();