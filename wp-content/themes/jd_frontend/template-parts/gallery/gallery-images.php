<?php 
    if( have_rows('upper_images') ): 
        while( have_rows('upper_images') ): the_row(); ?>
            <?php 
            $image1 = get_sub_field('upper_image_left');
            if( !empty( $image1 ) ): ?>
             <div class="fe-gallery__box">
                <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php 
            $image2 = get_sub_field('upper_image_right');
            if( !empty( $image2 ) ): ?>
             <div class="fe-gallery__box">
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
            </div>
            <?php endif; ?>

        <?php
        endwhile;
    endif; ?>

    <?php 
    if( have_rows('lower_images') ): 
        while( have_rows('lower_images') ): the_row(); ?>
            <?php 
            $image1 = get_sub_field('image_left');
            if( !empty( $image1 ) ): ?>
             <div class="fe-gallery__box">
                <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php 
            $image2 = get_sub_field('image_right');
            if( !empty( $image2 ) ): ?>
             <div class="fe-gallery__box">
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
            </div>
            <?php endif;

        endwhile;
    endif;