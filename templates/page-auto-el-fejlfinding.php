<?php

/**
 * Page Template: Auto-el & Fejlfinding
 * Template Post Type: page
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="autoel" class="servicepage">
    <!-- Hero Section -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Auto-el & Fejlfinding</h1>
            <p class="servicepage-herotext">Vi løser elektriske fejl og udfører avanceret fejlfinding med det nyeste diagnoseudstyr – hurtigt og effektivt.</p>
            <a class="cta-button" href="<?php echo esc_url(home_url('/booking/')); ?>">Book fejlfinding</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="servicepage-section">
        <div class="servicepage-container">
            <h2 class="servicepage-heading">Professionel fejlfinding</h2>
            <p class="servicepage-paragraph">Har du problemer med din bils elektronik, motorlampe eller sensorer? Vi identificerer fejlen præcist og reparerer med originale reservedele.</p>

            <ul class="servicepage-list">
                <li>Diagnose af motorfejl og sensorer</li>
                <li>Reparation af ledningsnet og stik</li>
                <li>Softwareopdateringer og kodning</li>
                <li>Udskiftning af elektroniske komponenter</li>
            </ul>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="cta-button">Book fejlfinding</a>

            <h2 class="servicepage-heading">Moderne teknologi</h2>
            <p class="servicepage-paragraph">Vores værksted er udstyret med topmoderne diagnoseværktøj, så vi kan servicere selv de nyeste modeller og hybridbiler.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
