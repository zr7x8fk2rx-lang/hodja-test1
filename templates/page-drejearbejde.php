<?php

/**
 * Page Template: Drejearbejde
 * Template Post Type: page
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="drejearbejde" class="servicepage">
    <!-- Hero Section -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Drejearbejde</h1>
            <p class="servicepage-herotext">Præcisionsdrejning og specialløsninger til nav, bøsninger, bolte, gevind og tilpasninger – direkte til dit køretøj.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="servicepage-section">
        <div class="servicepage-container">
            <h2 class="servicepage-heading">Præcision i metal</h2>
            <p class="servicepage-paragraph">Vi løser både engangsopgaver og serieproduktion i stål, alu og messing. Hurtig levering og høj nøjagtighed.</p>

            <ul class="servicepage-list">
                <li>Tilpasning af nav og afstandsbøsninger</li>
                <li>Reparation af gevind (indsatser/nyt gevind)</li>
                <li>Specialfremstillede bolte/spacere</li>
                <li>Finjustering af tolerancer</li>
            </ul>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="cta-button">Få et tilbud</a>

            <h2 class="servicepage-heading">Hvorfor vælge os?</h2>
            <p class="servicepage-paragraph">Direkte sparring med mekanikerne, så løsningen passer 1:1 til bilen – ikke et standardkompromis.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
