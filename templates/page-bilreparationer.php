<?php

/**
 * Page Template: Bilreparationer
 * Template Post Type: page
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="bilreparationer" class="servicepage">
    <!-- Hero Section -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Bilreparationer</h1>
            <p class="servicepage-herotext">Hos Hodja Auto udfører vi alt fra mindre reparationer til større mekaniske opgaver – altid med fokus på kvalitet, sikkerhed og fair priser.</p>
            <a class="hero-cta" href="<?php echo esc_url(home_url('/booking/')); ?>">Få et tilbud</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="servicepage-section">
        <div class="servicepage-container">
            <h2 class="servicepage-heading">Vi reparerer alle bilmærker</h2>
            <p class="servicepage-paragraph">Vores erfarne mekanikere arbejder med alle typer biler, uanset alder og fabrikat. Vi bruger moderne udstyr og OE-godkendte reservedele, så du kan køre trygt videre.</p>

            <ul class="servicepage-list">
                <li>Bremser og affjedring</li>
                <li>Kobling og gear</li>
                <li>Motor og udstødning</li>
                <li>Fejlfinding og el-systemer</li>
            </ul>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="cta-button">Få et tilbud</a>

            <h2 class="servicepage-heading">Gennemsigtighed og kvalitet</h2>
            <p class="servicepage-paragraph">Vi tror på ærlig kommunikation og høj kvalitet i vores arbejde. Du får altid et prisoverslag, inden vi går i gang – ingen ubehagelige overraskelser.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
