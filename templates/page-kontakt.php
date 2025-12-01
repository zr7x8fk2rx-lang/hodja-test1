<?php

/**
 * Kontakt – Hodja Auto
 * Template Name: Kontakt
 */
defined('ABSPATH') || exit;

get_header(); ?>

<main id="main" class="site-main">

    <!-- HERO uden CTA -->
    <section class="about-hero">
        <div class="about-herocontainer">
            <h1 class="about-herotitle">Kontakt os</h1>
            <p class="about-herotext">Vi er klar til at hjælpe med spørgsmål, booking og tilbud.</p>
        </div>
    </section>

    <section class="kontakt-section">
        <div class="kontakt-container">

            <!-- Overskrifter side om side -->
            <div class="kontakt-titles">
                <h2 class="contact-form-title">Skriv til os</h2>
                <h2 class="contact-title">Kontaktoplysninger</h2>
            </div>

            <div class="kontakt-grid">

                <!-- Venstre kolonne: Formular -->
                <div class="kontakt-col kontakt-form">
                    <p class="contact-form-subtitle">Har du spørgsmål eller brug for hjælp? Skriv til os – vi vender hurtigt tilbage.</p>

                    <?php
                    // Include contact form partial
                    get_template_part('templates/partials/contact-form');
                    ?>
                </div>

                <!-- Højre kolonne: Kontaktinfo -->
                <div class="kontakt-col kontakt-info">
                    <p class="contact-form-subtitle">Find os her – vi ser frem til at høre fra dig.</p>

                    <?php echo do_shortcode('[hodja_contact_info hide_email="true"]'); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
