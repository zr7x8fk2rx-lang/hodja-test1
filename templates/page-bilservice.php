<?php

/**
 * Template Name: Bilservice
 * Template Post Type: page
 */
defined('ABSPATH') || exit;
defined('ABSPATH') || exit;

get_header();
?>

<main id="main" class="site-main" role="main">

    <!-- SERVICES HERO -->
    <section class="services-hero" role="region" aria-label="Bilservice – Hero">
        <div class="services-herocontainer">
            <h1 class="services-herotitle">Bilservice i Taastrup</h1>
            <p class="services-herotext">
                Professionelt autoværksted & skadecenter – service på alle bilmærker.
                Moderne diagnoseudstyr, fair priser og gennemsigtighed.
            </p>
            <a class="hero-cta" href="<?php echo esc_url(home_url('/booking/')); ?>">
                Book værkstedstid
            </a>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="services-section" role="region" aria-label="Ydelser">
        <div class="services-container">

            <!-- Service 1 -->
            <article class="services-box">
                <div class="services-icon" aria-hidden="true">🧰</div>
                <div class="services-content">
                    <h2 class="services-title">Serviceeftersyn &amp; vedligeholdelse</h2>
                    <p class="services-text">
                        Fabriksgodkendte serviceeftersyn med korrekt olie, filtre og
                        gennemgang af bremser, væsker og sikkerhed.
                    </p>
                </div>
                <a class="services-cta" href="<?php echo esc_url(home_url('/bilservice/serviceeftersyn-vedligeholdelse/')); ?>">
                    Læs mere
                </a>
            </article>

            <!-- Service 2 -->
            <article class="services-box">
                <div class="services-icon" aria-hidden="true">🔧</div>
                <div class="services-content">
                    <h2 class="services-title">Reparation af bil</h2>
                    <p class="services-text">
                        Alt fra bremser, styretøj og udstødning til kobling og motorarbejde – kvalitet og garanti.
                    </p>
                </div>
                <a class="services-cta" href="<?php echo esc_url(home_url('/bilservice/reparation-af-biler/')); ?>">
                    Læs mere
                </a>
            </article>

            <!-- Service 3 -->
            <article class="services-box">
                <div class="services-icon" aria-hidden="true">⚡</div>
                <div class="services-content">
                    <h2 class="services-title">Auto-el &amp; fejlfinding</h2>
                    <p class="services-text">
                        Avanceret fejlsøgning med diagnoseværktøj, el-reparationer og software-opdateringer.
                    </p>
                </div>
                <a class="services-cta" href="<?php echo esc_url(home_url('/bilservice/auto-el-fejlfinding/')); ?>">
                    Læs mere
                </a>
            </article>

            <!-- Service 4 -->
            <article class="services-box">
                <div class="services-icon" aria-hidden="true">🛞</div>
                <div class="services-content">
                    <h2 class="services-title">Dæk &amp; fælge</h2>
                    <p class="services-text">
                        Skift, afbalancering og opbevaring. Råd om de rigtige dæk til sæson og kørselsbehov.
                    </p>
                </div>
                <a class="services-cta" href="<?php echo esc_url(home_url('/bilservice/daek-faelge/')); ?>">
                    Læs mere
                </a>
            </article>

            <!-- Service 6 - Booking CTA -->
            <article class="services-box">
                <div class="services-icon" aria-hidden="true">📅</div>
                <div class="services-content">
                    <h2 class="services-title">Klar til at booke?</h2>
                    <p class="services-text">
                        Vælg dato og tidspunkt – så klarer vi resten. Hurtigt svar og faste aftaler.
                    </p>
                </div>
                <a class="services-cta" href="<?php echo esc_url(home_url('/booking/')); ?>">
                    Book tid nu
                </a>
            </article>

        </div>
    </section>

</main>

<?php
get_footer();
