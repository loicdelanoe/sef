<article class="othercard" data-animation="show-up">
    <div class="othercard__container">
        <?= wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, [
            'class' => 'othercard__img'
        ]) ?>
        <div class="other__container--info">
            <h3 class="othercard__title"><?= get_the_title() ?></h3>
            <p class="othercard__date--last"><?= get_the_date() ?></p>
        </div>
    </div>
    <a class="othercard__link" href="<?= get_permalink() ?>"><span
            class="sro">Visiter l'article</span></a>
</article>