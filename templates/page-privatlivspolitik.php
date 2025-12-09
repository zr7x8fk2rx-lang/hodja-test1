<?php
/* Template Name: Privatlivspolitik */
get_header(); ?>

<section class="policy">
    <div class="policy-hero">
        <h1>Privatlivspolitik</h1>
        <p class="updated">Opdateret: <?php echo date_i18n('j. F Y'); ?></p>
    </div>

    <h2>1. Dataansvarlig</h2>
    <p>Hodja Auto, Kuldyssen 19F, 2630 Taastrup. CVR: [indsæt CVR-nummer]</p>

    <h2>2. Hvilke data indsamler vi?</h2>
    <p>Vi indsamler kun nødvendige oplysninger for at kunne kontakte dig og udføre vores service.</p>

    <h2>3. Opbevaring og sikkerhed</h2>
    <p>Alle data behandles fortroligt og slettes, når de ikke længere er nødvendige.</p>

    <div class="cta-row">
        <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="services-cta">Kontakt os</a>
    </div>
</section>

<?php get_footer();
