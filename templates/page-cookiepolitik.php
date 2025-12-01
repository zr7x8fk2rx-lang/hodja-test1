<?php
/* Template Name: Cookiepolitik */
get_header(); ?>

<section class="policy">
    <div class="policy-hero">
        <h1>Cookiepolitik</h1>
        <p class="updated">Opdateret: <?php echo date_i18n('j. F Y'); ?></p>
    </div>

    <h2>1. Hvad er cookies?</h2>
    <p>Cookies er små tekstfiler, der gemmes på din enhed for at forbedre din oplevelse på hjemmesiden.</p>

    <h2>2. Hvilke cookies bruger vi?</h2>
    <p>Vi bruger tekniske, statistiske og funktionelle cookies for at optimere vores hjemmeside.</p>

    <h2>3. Sådan sletter du cookies</h2>
    <p>Du kan til enhver tid slette cookies i din browsers indstillinger.</p>

    <div class="cta-row">
        <a href="<?php echo esc_url(home_url('/privatlivspolitik/')); ?>" class="cta-button">Læs privatlivspolitik</a>
    </div>
</section>

<?php get_footer();
