<?php
/**
 * 
 * Template name: Front-end
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frontend-test
 */

require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');

$name;
$email;
$file;

if(isset($_POST)) {
    if(isset($_POST["name_surname"])) {
        $name = $_POST["name_surname"];
    }

    if(isset($_POST["your_email"])) {
        $email = $_POST["your_email"];
    }

    if(isset($_FILES['file_upload'])) {
        $file = $_FILES['file_upload'];
        $file_type = $_FILES['type'];
        $file_name = $_FILES['file_upload']['name'];
        $file_tmp_name = $_FILES['file_upload']['tmp_name'];
    }

    $new_post = array(
        'post_title'    => $name,
        'post_content'  => '<b>email: </b>' . $email,
        'post_status'   => 'publish',          
        'post_type' => 'cv'
    );

    $pid = wp_insert_post($new_post);
    $attachment_id = media_handle_upload( 'file_upload', $pid );

    update_field( 'file', $attachment_id, $pid );
}


get_header('frontend');

    while(have_rows('template_layout')) : the_row();
        if(get_row_layout('template_layout') == 'hero'):
            get_template_part('templates/frontend/hero');
        elseif(get_row_layout('template_layout') == 'workfor'):
            get_template_part('templates/frontend/workfor');
        elseif(get_row_layout('template_layout') == 'gallery'):
            get_template_part('templates/frontend/gallery');
        elseif(get_row_layout('template_layout') == 'benefits'):
            get_template_part('templates/frontend/benefits');
        elseif(get_row_layout('template_layout') == 'expectations'):
            get_template_part('templates/frontend/expectations');
        elseif(get_row_layout('template_layout') == 'contact'):
            get_template_part('templates/frontend/contact'); 
        endif;
    endwhile;

   
    get_template_part('template-parts/popups/popup');
 
get_footer('frontend');