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
            <a class="cta-button" href="<?php echo esc_url(home_url('/booking/')); ?>">Book service</a>
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

            <h2 class="servicepage-heading">Garanti og dokumentation</h2>
            <p class="servicepage-paragraph">
                Vi stemplet din servicebog og bevarer din fabriksgaranti. Alt udføres efter forskrifterne for netop dit bilmærke og model.
            </p>

            <h2 class="servicepage-heading">Book tid i dag</h2>
            <p class="servicepage-paragraph">
                Vores mekanikere står klar til at tage imod din bil. Du kan nemt booke en tid online, så klarer vi resten.
            </p>

            <a class="cta-button" href="<?php echo esc_url(home_url('/booking/')); ?>">
                Book dit service
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?> <div style="text-align:center; margin-top:40px;">
    <a class="cta-button" href="<?php echo esc_url(home_url('/booking/')); ?>">
        Book service nu
    </a>
</div>
</div>
</section>

</main>

<?php
get_footer();
