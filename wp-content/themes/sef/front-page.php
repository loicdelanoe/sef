<?php get_header() ?>

    <main>
        <div class="container">
            <?= wp_get_attachment_image(get_field('background-image'), 'overview_image', false, [
                'class' => 'hero__image',
            ]) ?>
            <section class="hero">
                <h2 class="hero__title"><?= get_field('title') ?></h2>
                <p class="hero__quote" itemprop="description"><?= get_field('quote') ?></p>
                <div class="hero__container">
                    <a href="<?= home_url('/nous-soutenir') ?>" class="cta">Faire un don</a>
                    <a href="<?= home_url('/contact') ?>" class="cta" data-variant="secondary">Nous contacter</a>
                </div>
            </section>
        </div>
        <section class="news">
            <h2 class="news__title">Nos dernières actualités</h2>
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
                <article class="newscard--last" itemprop="publishingPrinciples" itemscope itemtype="https://schema.org/Article">
                    <div class="newscard__container--last">
                        <?= wp_get_attachment_image(get_field('image'), 'full', false, [
                            'class' => 'newscard__img--last'
                        ]) ?>
                        <h3 class="newscard__title--last" itemprop="headline"><?= get_the_title() ?></h3>
                    </div>
                    <a class="newscard__link" href="<?= get_permalink() ?>"><span class="sro">Visiter l'article</span></a>
                </article>
            <?php endwhile; endif; ?>
            <div class="news__container--grid">
                <?php
                $posts = new WP_Query([
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'offset' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);

                if ($posts->have_posts()): while ($posts->have_posts()): $posts->the_post(); ?>
                    <article class="newscard" itemprop="publishingPrinciples" itemscope itemtype="https://schema.org/Article">
                        <div class="newscard__container">
                            <?= wp_get_attachment_image(get_field('image'), 'full', false, [
                                'class' => 'newscard__img'
                            ]) ?>
                            <h3 class="newscard__title" itemprop="headline"><?= get_the_title() ?></h3>
                        </div>
                        <a class="newscard__link" href="<?= get_permalink() ?>"><span class="sro">Visiter l'article</span></a>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <div class="bg">
            <section class="statistics">
                <h2 class="statistics__title">Quelques statistiques</h2>
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

                        <li class="statistics__item statcard">
                            <h3 class="statcard__number"><?= get_field('statistic') ?></h3>
                            <p class="statcard__text"><?= get_field('text') ?></p>
                        </li>

                    <?php endwhile; endif; ?>
                </ul>
            </section>
        </div>
        <section class="testimonials" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <h2 class="testimonials__title">Témoignages</h2>
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

                <?php endwhile; endif; ?>
            </ul>
        </section>
        <section class="help">
            <h2 class="help__title">Votre générosité nous permet d’avancer</h2>
            <div class="help__container">
                <a href="<?= home_url("/nous-soutenir") ?>" class="cta">Nous soutenir</a>
                <a href="<?= home_url("/contact") ?>" class="cta" data-variant="tertiary">Nous contacter</a>
            </div>
        </section>
    </main>

<?php get_footer() ?>