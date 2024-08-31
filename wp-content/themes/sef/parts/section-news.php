<article class="newscard" data-animation="show-up">
    <div class="newscard__container">
        <?= wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, [
            'class' => 'newscard__img'
        ]) ?>
        <div class="news__container--info">
            <h3 class="newscard__title"><?= get_the_title() ?></h3>
            <p class="newscard__date--last"><?= get_the_date() ?></p>
        </div>
    </div>
    <a class="newscard__link" href="<?= get_permalink() ?>"><span
            class="sro">Visiter l'article</span></a>
</article>