<?php

/**
 * Kontakt – Hodja Auto
 * Template Name: Kontakt
 */
defined('ABSPATH') || exit;

get_header(); ?>

<main id="main" class="site-main">

    <!-- HERO -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Kontakt os</h1>
            <p class="servicepage-herotext">Vi er klar til at hjælpe med spørgsmål, booking og tilbud.</p>
        </div>
    </section>

    <!-- KONTAKTFORMULAR -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-col contact-col--form">
                    <div class="contact-col-header">
                        <h2 class="contact-form-title">Skriv til os</h2>
                        <p class="contact-form-subtitle">Har du spørgsmål eller brug for hjælp? Send os en besked, så vender vi tilbage hurtigst muligt.</p>
                    </div>
                    <div class="ff-form-wrapper">
                        <?php echo do_shortcode('[fluentform id="13"]'); ?>
                    </div>
                </div>
                <div class="contact-col contact-col--info">
                    <div class="contact-col-header">
                        <h2 class="contact-form-title">Kontaktoplysninger</h2>
                        <p class="contact-form-subtitle">Find os her – <br>vi er klar til at hjælpe dig.</p>
                    </div>
                    <div class="acf-info-wrapper">
                        <?php get_template_part('templates/partials/acf-info'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
