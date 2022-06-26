<?php
/**
 * The template for displaying the footer for template-frontend
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frontend-test
 */

$locations = get_nav_menu_locations(); //get all menu locations
$menu_explore = wp_get_nav_menu_object($locations['footer-explore']);
$menu_explore_name = $menu_explore->name;

$menu_socials = wp_get_nav_menu_object($locations['footer-socials']);
$menu_socials_name = $menu_socials->name;
?>
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__logo">
                <?php 
                $image = get_field('logo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="footer__lists">
                <nav class="footer__list">
                    <span class="footer__label"><?php echo $menu_explore_name ;?></span>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-explore', 'container' => 'ul', 'menu_class' => 'menu list-reset' ) ); ?>
                </nav>
                <div class="footer__list">
                    <span class="footer__label"><?php echo $menu_socials_name ;?></span>
                    <?php wp_nav_menu( array( 'theme_location'    => 'footer-socials', 'container' => 'ul', 'menu_class' => 'menu list-reset' ) ); ?>
                </div>
            </div>

            <?php
            if(have_rows('contact_data_group')):
                while(have_rows('contact_data_group')): the_row(); ?>
                <address class="footer__address">
                    <span class="footer__label">
                        <?php get_sub_field('label') ? the_sub_field('label') : ''; ?>
                    </span>
                    <div class="footer__address-data">
                        <?php get_sub_field('address') ? the_sub_field('address') : ''; ?>
                    </div>
                <?php

                    if(get_sub_field('phone')): ?>
                    <div class="footer__address-phone">
                        <span class="footer__address-prefix">
                            <?php 
                                $phone = get_sub_field_object('phone');
                                echo $phone['prepend']; 
                            ?>
                        </span>
                        <?php the_sub_field('phone') ;?>
                    </div>
                    <?php endif; ?>

                    <div class="footer__address-email"><?php get_sub_field('email') ? the_sub_field('email') : ''; ?></div>
                </address>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <?php if(get_field('copyright')): ?>
                <small>
                    <?php the_field('copyright'); ?>
                </small>
        <?php endif; ?>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
