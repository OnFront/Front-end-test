<section class="work-for">
    <div class="container">
        <div class="work-for__content">
                <?php if(get_sub_field('items_text')): ?>
                    <span class="work-for__text">
                        <?php the_sub_field('items_text'); ?>
                    </span>
                <?php endif; ?>

                <?php if(have_rows('clients_repeat')): ?>
                    <div class="work-for__clients">
                        <?php while(have_rows('clients_repeat')): the_row();
                            $image = get_sub_field('client_image');
                            if( !empty( $image ) ): ?>
                                <div class="work-for__clients-item">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                        <?php endwhile ;?>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</section>