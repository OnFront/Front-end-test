<section class="contact">
    <div class="container">
        <div class="contact__content">
            <?php if(get_sub_field('h2_title')): ?>
                <header class="contact__header">
                    <h2><?php the_sub_field('h2_title'); ?></h2>
                </header>
            <?php endif; ?>

            <?php if(get_sub_field('description')): ?>
                <div class="contact__description">
                    <?php the_sub_field('description'); ?>
                </div>
            <?php endif; ?>
            
            <?php 
            $button = get_sub_field('button');
            if( $button ): 
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <a role="button" class="button--secondary" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>" data-target="open-popup"><?php echo esc_html( $button_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>