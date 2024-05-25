<?php /* Template Name: "Contact" */ ?>

<?php get_header() ?>

<main>
    <section class="contact">
        <h2 class="contact__title">Contactez-nous</h2>
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
    </section>
    <section class="contactform">
        <h2 class="sro">Formulaire de contact</h2>
        <p class="contactform__text">Les champs avec <span>*</span> sont obligatoires.</p>
        <form class="form" action="">
            <div class="field__container">
                <label class="field__label" for="fullname" data-required="true">Nom complet</label>
                <input class="field__input" type="text" name="fullname" id="fullname" placeholder="Jon Doe">
            </div>
            <div class="field__container">
                <label class="field__label" for="email" data-required="true">Adresse mail</label>
                <input class="field__input" type="email" name="email" id="email" placeholder="jon.doe@exemple.be">
            </div>
            <div class="field__container">
                <label class="field__label" for="message" data-required="true">Message</label>
                <textarea class="field__textarea" name="message" id="message" cols="30"
                          rows="10" placeholder="Ici votre message..."></textarea>
            </div>
            <input type="hidden" name="action" value="custom_contact_form">
            <button class="field__submit cta" type="submit">Envoyer</button>
        </form>
    </section>
</main>

<?php get_footer() ?>
