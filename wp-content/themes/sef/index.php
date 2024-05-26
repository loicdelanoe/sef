<?php get_header() ?>

    <main>
        <div class="container__center">
            <?php while (have_posts()) : the_post(); ?>
                <section class="legal" data-tag="wysiwyg">
                    <?= the_content() ?>
                </section>
            <?php endwhile; ?>
        </div>
    </main>

<?php get_footer() ?>