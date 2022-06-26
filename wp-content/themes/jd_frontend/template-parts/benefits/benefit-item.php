<li class="benefits__list-item">
    <article>
        <div class="benefits__list-icon">
            <?php 
                $icon = get_sub_field('icon');
                if( !empty( $icon ) ): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
            <?php endif; ?>
        </div>

        <?php
            if(get_sub_field('benefit_title')): ?>
                <h3 class="benefits__list-title"><?php the_sub_field('benefit_title'); ?></h3>
        <?php endif ;?>
    
        <?php
            if(get_sub_field('benefit_desc')): ?>
                <div class="benefits__list-desc">
                    <?php the_sub_field('benefit_desc'); ?>
                </div>
        <?php endif ;?>
    </article>
</li>