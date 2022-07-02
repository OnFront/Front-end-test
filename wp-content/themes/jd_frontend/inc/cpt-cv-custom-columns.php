<?php
/**
 *
* Add new columns to the notifications post table
*
* @param Array $columns - Current columns on the list post
*/


function define_cv_columns( $columns ) {
    $new_columns = array(
        'email_col' => __('E-mail', 'frontend'),
        'file_col' => __('File', 'frontend'),
    );

    return array_merge($columns, $new_columns);
}
add_filter('manage_edit-cv_columns', 'define_cv_columns');
/**
 *
* Reorder Notification Columns
*
* @param Array $columns - Current columns on the list post
*/


 
function reorder_cv_columns($columns) {
 
    unset($columns['title']);
    unset($columns['tags']);
    unset($columns['date']);

    return array_merge( $columns, array(
        'title' => __('Name', 'frontend'),
        'email_col' => __('E-mail', 'frontend'),
        'file_col' => __('File', 'frontend'),
        )   
    );

}

add_filter('manage_cv_posts_columns' , 'reorder_cv_columns');

function cv_custom_columns_data($column) {
    global $post;

    $post_id = $post->ID;
    $content = get_the_content( $post_id );
    $split_str = explode( " ", $content );
    $only_email = $split_str[1];
    $file = get_field('file', $post->ID);

    if ( $column == 'email_col' ) {
        echo '<a href="' .   $only_email . '">' . $only_email . '</a>';
    }    

    if ( $column == 'file_col' ){

        echo  
        '<a href="' . $file['url'] . '" target="_blank" > 
            Open file 
            <svg style="position:relative; top: 1px; margin-left: 5px;"  width="12" height="12" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.6875 0.5625V19.3125H19.4375V0.5625H0.6875ZM17.875 17.75H2.25V2.125H17.875V17.75Z" fill="#195FB3"/>
            <path d="M4.59375 5.25L8.5 9.15625L3.8125 13.8438L6.15625 16.1875L10.8438 11.5L14.75 15.4062V5.25H4.59375Z" fill="#195FB3"/>
            </svg>
            </a>
        ';
        
    }

}
add_action( 'manage_cv_posts_custom_column' , 'cv_custom_columns_data' );