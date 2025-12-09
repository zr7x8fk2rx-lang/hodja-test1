<?php

/**
 * Forside (statisk) – Hodja Auto
 * Template Name: Front Page
 */
defined('ABSPATH') || exit;

get_header(); ?>

<main id="main" class="site-main">

    <!-- HERO SECTION -->
    <section class="home-hero">
        <div class="home-herocontainer">
            <h1 class="home-herotitle">Dit lokale autoværksted i Taastrup</h1>
            <p class="home-herotext">Professionel service, erfarne mekanikere og konkurrencedygtige priser. Vi holder din bil kørende – uden at tømme din tegnebog.</p>
            <a class="home-herobutton" href="<?php echo esc_url(home_url('/book-vaerkstedstid-online/')); ?>">Book tid online</a>
        </div>
    </section>

    <!-- USP SECTION -->
    <section class="usp-section">
        <div class="container">
            <div class="usp-container">
                <div class="usp-item">
                    <div class="usp-icon">✓</div>
                    <h3>Erfarne mekanikere</h3>
                    <p>Vi har +15 års erfaring med alle bilmærker</p>
                </div>
                <div class="usp-item">
                    <div class="usp-icon">💰</div>
                    <h3>Fair priser</h3>
                    <p>Konkurrencedygtige priser uden skjulte gebyrer</p>
                </div>
                <div class="usp-item">
                    <div class="usp-icon">⚡</div>
                    <h3>Hurtig service</h3>
                    <p>Book tid online og få hurtigt svar</p>
                </div>
                <div class="usp-item">
                    <div class="usp-icon">🛡️</div>
                    <h3>Kvalitetsgaranti</h3>
                    <p>Garanti på arbejde og reservedele</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="services-section">
        <div class="container">
            <h2 class="services-heading">Vores service</h2>
            <div class="services-container">

                <!-- Service-kort 1 -->
                <article class="services-box">
                    <h3 class="services-title">Serviceeftersyn</h3>
                    <div class="services-content">
                        <p class="services-text">Producentkrav, stempler &amp; garanti bibeholdes.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/bilservice/serviceeftersyn-vedligeholdelse/')); ?>">
                        Læs mere
                    </a>
                </article>

                <!-- Service-kort 2 -->
                <article class="services-box">
                    <h3 class="services-title">Reparationer</h3>
                    <div class="services-content">
                        <p class="services-text">Bremser, udstødning, styretøj, kobling m.m.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/bilservice/bilreparationer/')); ?>">
                        Læs mere
                    </a>
                </article>

                <!-- Service-kort 3 -->
                <article class="services-box">
                    <h3 class="services-title">Auto-el &amp; fejlfinding</h3>
                    <div class="services-content">
                        <p class="services-text">Diagnose, sensorer, ECU &amp; elektriske fejl.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/bilservice/auto-el-fejlfinding/')); ?>">
                        Læs mere
                    </a>
                </article>

                <!-- Service-kort 4 -->
                <article class="services-box">
                    <h3 class="services-title">Dæk &amp; fælge</h3>
                    <div class="services-content">
                        <p class="services-text">Dækskift, opbevaring, balancering &amp; hjulskift.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/bilservice/daek-faelge/')); ?>">
                        Læs mere
                    </a>
                </article>

                <!-- Service-kort 5 -->
                <article class="services-box">
                    <h3 class="services-title">Drejearbejde</h3>
                    <div class="services-content">
                        <p class="services-text">Bremseskiver, tromler &amp; præcisionsslibning.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/bilservice/drejearbejde/')); ?>">
                        Læs mere
                    </a>
                </article>

                <!-- Service-kort 6 -->
                <article class="services-box">
                    <h3 class="services-title">Book en tid online</h3>
                    <div class="services-content">
                        <p class="services-text">Nemt og hurtigt – book din tid direkte online.</p>
                    </div>
                    <a class="services-cta cta-button" href="<?php echo esc_url(home_url('/book-vaerkstedstid-online/')); ?>">
                        Book nu
                    </a>
                </article>

            </div>
        </div>
    </section>

    <!-- BOOKING CTA BAND -->
    <section class="booking-cta">
        <div class="container">
            <a class="booking-button" href="<?php echo esc_url(home_url('/book-vaerkstedstid-online/')); ?>">Book tid online</a>
        </div>
    </section>

    <!-- SKRIV TIL OS - KONTAKTFORMULAR -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-col contact-col--form">
                    <div class="contact-col-header">
                        <h2 class="contact-form-title">Skriv til os</h2>
                        <p class="contact-form-subtitle">Har du spørgsmål eller brug for hjælp? Send os en besked, så vender vi tilbage hurtigst muligt.</p>
                    </div>
                    <div class="ff-form-wrapper">
                        <?php echo do_shortcode('[fluentform id="11"]'); ?>
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
