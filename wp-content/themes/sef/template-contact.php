<?php /* Template Name: "Contact" */ ?>

<?php get_header() ?>

<main>
    <section class="contact">
        <h2 class="contact__title" data-animation="show-up" data-variant="secondary">Engagez-vous <span>Avec nous</span></h2>
        <article class="contact__upper" data-animation="show-up">
            <h2 class="sro">Informations de contact</h2>
            <p class="contact__text"><?= get_field('text') ?></p>
            <dl class="contact__container">
                <dt>Adresse mail :</dt>
                <dd><a class="contact__link" href="mailto:<?= get_field('mail') ?>"><?= get_field('mail') ?></a></dd>
                <dt>Téléphone :</dt>
                <dd><a class="contact__link" href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a></dd>
                <dt>Adresse</dt>
                <dd>
                    <address><?= get_field('address') ?></address>
                </dd>
            </dl>
            <p class="contact__text">Vous souhaitez d’autres informations&nbsp;?</p>
            <a href="<?= home_url("/nous-soutenir") ?>" class="cta">Nous soutenir</a>
        </article>
        <article class="contact__lower contactform" data-animation="show-up">
            <h2 class="sro">Formulaire de contact</h2>
            <p class="contactform__text">Les champs avec <span>*</span> sont obligatoires.</p>
            <?php
            $feedback = ContactForm::feedback();
            ?>
            <form class="form" action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
                <?php if ($feedback) : ?>
                    <p class="field__valid"><?= $feedback ?></p>
                <?php endif; ?>
                <div class="field__container">
                    <label class="field__label" for="fullname" data-required="true">Nom complet</label>
                    <input class="field__input" type="text" name="fullname" id="fullname" placeholder="Jon Doe" value="<?= $_SESSION['old']['fullname'] ?? '' ?>">
                    <?php if ($_SESSION['errors']['fullname'] ?? null): ?>
                        <p class="field__error"><?= $_SESSION['errors']['fullname'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="field__container">
                    <label class="field__label" for="email" data-required="true">Adresse mail</label>
                    <input class="field__input" type="email" name="email" id="email" placeholder="jon.doe@exemple.be" value="<?= $_SESSION['old']['email'] ?? '' ?>">
                    <?php if ($_SESSION['errors']['email'] ?? null): ?>
                        <p class="field__error"><?= $_SESSION['errors']['email'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="field__container">
                    <label class="field__label" for="subject" data-required="true">Sujet</label>
                    <input class="field__input" type="text" name="subject" id="subject" placeholder="Bénévolats, question, dons..." value="<?= $_SESSION['old']['subject'] ?? '' ?>">
                    <?php if ($_SESSION['errors']['subject'] ?? null): ?>
                        <p class="field__error"><?= $_SESSION['errors']['subject'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="field__container">
                    <label class="field__label" for="message" data-required="true">Message</label>
                    <textarea class="field__textarea" name="message" id="message" cols="30"
                              rows="10" placeholder="Ici votre message..."><?= $_SESSION['old']['email'] ?? '' ?></textarea>
                    <?php if ($_SESSION['errors']['message'] ?? null): ?>
                        <p class="field__error"><?= $_SESSION['errors']['message'] ?></p>
                    <?php endif; ?>
                </div>
                <input type="hidden" name="action" value="custom_contact_form">
                <button class="field__submit cta" type="submit">Envoyer</button>
                <?php
                $_SESSION['errors'] = [];
                $_SESSION['old'] = [];
                ?>
            </form>
        </article>

    </section>
</main>

<?php get_footer() ?>
