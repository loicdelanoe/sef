<?php get_header() ?>

<main>
    <section class="articles">
        <h2 class="articles__title" data-animation="show-up">Actualités</h2>
        <div class=" news__container--grid-4">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?= get_template_part('parts/section', 'news') ?>
            <?php endwhile; else : ?>
                <p>Il n'y a pas d'articles</p>
            <?php endif; ?>
        </div>
        <?php get_the_posts_pagination([
            'mid_size' => 2,
            'prev_text' => __( 'Prev', 'textdomain' ),
            'next_text' => __( 'Next', 'textdomain' ),
        ]); ?>
    </section>
</main>

<?php get_footer() ?>
