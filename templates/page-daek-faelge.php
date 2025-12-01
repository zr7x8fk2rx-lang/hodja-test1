<?php

/**
 * Page Template: Dæk & Fælge
 * Template Post Type: page
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="daekfaelge" class="servicepage">
    <!-- Hero Section -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Dæk & Fælge</h1>
            <p class="servicepage-herotext">Hos Hodja Auto tilbyder vi alt fra dækskift og afbalancering til opbevaring og salg af nye dæk og fælge i høj kvalitet.</p>
            <a class="cta-button" href="<?php echo esc_url(home_url('/booking/')); ?>">Book dækskift</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="servicepage-section">
        <div class="servicepage-container">
            <h2 class="servicepage-heading">Alt i dæk og fælge</h2>
            <p class="servicepage-paragraph">Uanset om du skal have sommerdæk, vinterdæk eller helårsdæk, står vi klar med professionel montering og rådgivning. Vi arbejder kun med anerkendte mærker og topudstyr.</p>

            <ul class="servicepage-list">
                <li>Montering og afbalancering</li>
                <li>Udskiftning og reparation</li>
                <li>Dækhotel – opbevaring under optimale forhold</li>
                <li>Salg af kvalitetsdæk og fælge</li>
            </ul>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="cta-button">Book dækskift</a>

            <h2 class="servicepage-heading">Sikkerhed og komfort</h2>
            <p class="servicepage-paragraph">Vi sikrer korrekt dæktryk, slidbanedybde og montering, så du får den bedste køreoplevelse og maksimal sikkerhed – året rundt.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
