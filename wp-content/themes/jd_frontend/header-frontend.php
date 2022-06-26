<?php
/**
 * The header for template-frontend
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frontend-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'frontend' ); ?></a>

	<header id="header" class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <?php
                    the_custom_logo();
                    ?>
                </div>

                <nav class="header__nav">
                    <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="header__nav-item" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <svg class="arrow" width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.48749 0L6.91104 1.414L3.82297 4.502H12V6.498H3.82297L6.91104 9.586L5.48749 11L0 5.5L5.48749 0Z" fill="#F95157"/>
                            </svg>
                            <?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
	</header><!-- header -->
