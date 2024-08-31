<?php get_header() ?>

    <main>
        <div class="container">
            <?= wp_get_attachment_image(get_field('background-image'), 'full', false, [
                'class' => 'hero__image',
            ]) ?>
            <section class="hero">
                <h2 class="hero__title" data-animation="show-up"><?= get_field('title') ?></h2>
                <p class="hero__quote" itemprop="description" data-animation="show-up"><?= get_field('quote') ?></p>
                <div class="hero__container" data-animation="show-up">
                    <a href="<?= home_url('/nous-soutenir') ?>" class="cta">Faire un don</a>
                    <a href="<?= home_url('/magasins') ?>" class="cta" data-variant="secondary">Nos magasins</a>
                </div>
            </section>
        </div>
        <section class="news">
            <div class="news__container--title">
                <h2 class="news__title" data-animation="show-up" data-variant="secondary">Nos dernières
                    <span>Actualités</span>
                </h2>
                <a class="cta" href="<?= home_url('actualite') ?>" data-animation="show-up">Voir plus</a>
            </div>
            <div class="news__container--grid">
                <?php
                $posts = new WP_Query([
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);

                if ($posts->have_posts()): while ($posts->have_posts()): $posts->the_post(); ?>
                    <?= get_template_part('parts/section', 'news') ?>
                <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </div>
        </section>
        <div class="bg">
            <section class="statistics">
                <h2 class="statistics__title" data-animation="show-up" data-variant="secondary">Quelques <span>Statistiques</span>
                </h2>
                <ul class="statistics__container">
                    <?php
                    $statistics = new WP_Query([
                        'post_type' => 'statistiques',
                        'post_status' => 'publish',
                        'post_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'ASC',
                    ]);

                    if ($statistics->have_posts()): while ($statistics->have_posts()): $statistics->the_post();
                        ?>

                        <li class="statistics__item statcard" data-animation="show-up">
                            <span class="statcard__number"><?= get_field('statistic') ?></span>
                            <p class="statcard__text"><?= get_field('text') ?></p>
                        </li>

                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </ul>
            </section>
        </div>
        <section class="testimonials" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <h2 class="testimonials__title" data-animation="show-up">Témoignages</h2>
            <ul class="testimonials__container">
                <?php
                $testimonials = new WP_Query([
                    'post_type' => 'temoignages',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);

                if ($testimonials->have_posts()): while ($testimonials->have_posts()): $testimonials->the_post();
                    ?>

                    <li class="testimonialcard" itemprop="reviewBody">
                        <p class="testimonialcard__text"><?= get_field('testimonial') ?></p>
                        <div class="testimonialcard__container">
                            <h3 class="testimonialcard__name" itemprop="author"><?= get_field('name') ?></h3>
                            <small class="testimonialcard__occupation"><?= get_field('occupation') ?></small>
                        </div>
                    </li>

                <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </ul>
        </section>
        <?= get_template_part('parts/section', 'help') ?>
    </main>

<?php get_footer() ?>