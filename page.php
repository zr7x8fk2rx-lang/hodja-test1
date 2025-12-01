<?php

/**
 * Standard Page Template
 * Bruges som fallback for alle sider uden egen skabelon.
 */
defined('ABSPATH') || exit;

get_header();
?>

<main id="main" class="site-main" role="main">

    <?php
    // Start WordPress loop
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <section class="servicepage-hero" role="region" aria-label="Side-hero">
                <div class="servicepage-herocontainer">
                    <h1 class="servicepage-herotitle"><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) : ?>
                        <p class="servicepage-herotext"><?php echo esc_html(get_the_excerpt()); ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <section class="servicepage-section">
                <div class="servicepage-container">
                    <h1 class="servicepage-heading"><?php the_title(); ?></h1>
                    <div class="servicepage-paragraph">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>

        <?php endwhile;
    else : ?>
        <section class="servicepage-section">
            <div class="servicepage-container">
                <h1 class="servicepage-heading">Ingen indhold fundet</h1>
                <p class="servicepage-paragraph">Siden findes, men der er intet indhold endnu.</p>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php
get_footer();
