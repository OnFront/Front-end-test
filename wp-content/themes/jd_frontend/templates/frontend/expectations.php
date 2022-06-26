<section class="expectations">
    <div class="container">
        <div class="expectations__content">
            <?php
                if(get_sub_field('h2_title')): ?>
                <header class="expectations__title">
                    <h2><?php the_sub_field('h2_title'); ?></h2>
                </header>
            <?php endif ;?>

            <?php if(have_rows('requirements_repeat')): ?>
                <ul class="expectations__list list-reset">
                    <?php 
                        while(have_rows('requirements_repeat')): the_row();
                            get_template_part('template-parts/expectations/expectation-item');
                        endwhile; 
                    ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>