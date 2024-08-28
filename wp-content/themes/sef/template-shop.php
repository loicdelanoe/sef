<?php /* Template Name: "Nos Magasins" */ ?>

<?php get_header() ?>

<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="shops">
            <h2 class="shops__title" data-animation="show-up">Nos Magasins</h2>
        </section>
        <?= get_template_part('parts/section', 'help') ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
