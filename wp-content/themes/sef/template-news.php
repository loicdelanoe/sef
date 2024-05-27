<?php /* Template Name: "Actualités" */ ?>

<?php get_header() ?>

<main>
    <section class="articles">
        <h2 class="articles__title">Actualités</h2>
        <?php
        $last_post = new WP_Query([
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => 1,
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        if ($last_post->have_posts()): while ($last_post->have_posts()): $last_post->the_post(); ?>
            <article class="newscard">
                <div class="newscard__container--last">
                    <?= wp_get_attachment_image(get_field('image'), 'full', false, [
                        'class' => 'newscard__img--last'
                    ]) ?>
                    <h3 class="newscard__title--last"><?= get_the_title() ?></h3>
                </div>
                <a class="newscard__link" href="<?= get_permalink() ?>"><span class="sro">Visiter l'article</span></a>
            </article>
        <?php endwhile; endif; ?>
        <div class="news__container--grid news__container--grid-4">
            <?php
            $posts = new WP_Query([
                'post_type' => 'post',
                'post_status' => 'publish',
                'offset' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            ]);

            if ($posts->have_posts()): while ($posts->have_posts()): $posts->the_post(); ?>
                <article class="newscard">
                    <div class="newscard__container">
                        <?= wp_get_attachment_image(get_field('image'), 'full', false, [
                            'class' => 'newscard__img'
                        ]) ?>
                        <h3 class="newscard__title"><?= get_the_title() ?></h3>
                    </div>
                    <a class="newscard__link" href="<?= get_permalink() ?>"><span class="sro">Visiter l'article</span></a>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer() ?>
