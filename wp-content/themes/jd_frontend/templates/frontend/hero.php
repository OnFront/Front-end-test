<main class="hero">
    <div class="container">
        <div class="hero__content">
            <h1><?php the_sub_field('h1_title'); ?></h1>

            <?php 
            if(get_sub_field('title_description')):
                the_sub_field('title_description');
            endif; 
            ?>

            <?php 
            $link = get_sub_field('hero_button');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a role="button" class="button--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" data-target="open-popup"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
      
        <div class="hero__image">
            <?php get_template_part('templates/frontend/hero-image'); ?>
        </div>
  
    </div>
</main>