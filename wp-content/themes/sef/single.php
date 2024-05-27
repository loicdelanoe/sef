<?php get_header(); ?>

    <main>
        <?php while (have_posts()) : the_post(); ?>
            <section class="article">
                <h2 class="article__title"><?= get_the_title() ?></h2>
                <?= wp_get_attachment_image(get_field('image'), 'full', false, [
                    'class' => 'article__image'
                ]) ?>
                <article class="article__container">
                    <p class="article__author">Par <?= get_the_author() ?>,</p>
                    <time class="article__date" datetime="<?= the_time('Y-m-d') ?>">Le <?= get_the_date() ?></time>
                    <h3 class="sro">Contenu de l'article</h3>
                    <div class="article__content" data-tag="wysiwyg">
                        <?= get_field('content') ?>
                    </div>
                </article>
            </section>
        <?php endwhile; ?>
        <section class="other">
            <h2 class="other__title">Autres articles</h2>
            <div class="container__grid  news__container--grid-4">
                <?php
                $posts = new WP_Query([
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'post__not_in' => [get_the_ID()],
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
                        <a class="newscard__link" href="<?= get_permalink() ?>"><span
                                    class="sro">Visiter l'article</span></a>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>