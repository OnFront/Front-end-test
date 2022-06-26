<section class="benefits">
    <div class="container">
    <?php if(get_sub_field('h2_title')): ?>
        <header class="benefits__title">
           <h2><?php the_sub_field('h2_title'); ?></h2>
        </header>
    <?php endif; ?>
  
    <?php
        if(have_rows('benefits_repeat')): ?>
            <ul class="benefits__list list-reset">
            <?php 
                while(have_rows('benefits_repeat')): the_row();
                    if(have_rows('benefit_group')):
                        while(have_rows('benefit_group')): the_row();
                            get_template_part('template-parts/benefits/benefit-item');
                        endwhile;
                    endif;
                endwhile; 
            ?>
            </ul>
        <?php endif; ?>
    </div>
</section>