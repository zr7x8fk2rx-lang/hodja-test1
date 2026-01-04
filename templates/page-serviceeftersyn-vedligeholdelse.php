<?php

/**
 * Page Template: Serviceeftersyn & Vedligeholdelse
 * Template Post Type: page
 */
defined('ABSPATH') || exit;

get_header();
?>

<main id="main" class="servicepage">
    <!-- Hero Section -->
    <section class="servicepage-hero">
        <div class="servicepage-herocontainer">
            <h1 class="servicepage-herotitle">Serviceeftersyn &amp; Vedligeholdelse</h1>
            <p class="servicepage-herotext">Få udført dit serviceeftersyn efter fabrikkens forskrifter – vi sørger for, at din bil kører som ny, uanset mærke.</p>
            <a class="hero-cta" href="<?php echo esc_url(home_url('/booking/')); ?>">Book service</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="servicepage-section">
        <div class="servicepage-container">
            <h2 class="servicepage-heading">Hvorfor vælge Hodja Auto?</h2>
            <p class="servicepage-paragraph">
                Hos Hodja Auto får du professionel service med fokus på kvalitet og gennemsigtighed. Vi anvender kun godkendte reservedele og den nyeste diagnoseteknologi.
            </p>

            <h2 class="servicepage-heading">Hvad inkluderer et eftersyn?</h2>
            <p class="servicepage-paragraph">
                Et typisk eftersyn omfatter skift af olie og filter, gennemgang af bremser, styring, væsker og elektronik. Du får altid et overblik over arbejdet og en fair pris før vi går i gang.
            </p>

            <ul class="servicepage-list">
                <li>Skifte af olie og filter</li>
                <li>Kontrol af bremser og bremsevæske</li>
                <li>Gennemgang af kølesystem og væsker</li>
                <li>Kontrol af elektronik og sensorer</li>
            </ul>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="services-cta">Book dit service</a>

            <h2 class="servicepage-heading">Garanti og dokumentation</h2>
            <p class="servicepage-paragraph">
                Vi stempler din servicebog og bevarer din fabriksgaranti. Alt udføres efter forskrifterne for netop dit bilmærke og model.
            </p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
