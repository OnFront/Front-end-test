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
        endif;
    endwhile;


// while(have_posts()) : the_post();
//       while(have_rows('news_content')) : the_row();
//         if(get_row_layout() == 'documents_section'):
//           get_template_part('resources/templates/investors/documents');
//         elseif(get_row_layout() == 'section_form'):
//           get_template_part('resources/templates/investors/form');
//         elseif(get_row_layout() == 'section_assembly'):
//           get_template_part('resources/templates/investors/assembly');
//         elseif(get_row_layout() == 'calendary'):
//           get_template_part('resources/templates/investors/calendary');
//         elseif(get_row_layout() == 'section_reports'):
//           get_template_part('resources/templates/investors/news_reports');
//         endif; 
//       endwhile;
//     endwhile;

get_footer();