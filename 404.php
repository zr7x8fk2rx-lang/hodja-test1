<?php

/**
 * Template Name: 404 Fejlside
 * Description: Vises når en side ikke findes.
 */
get_header(); ?>

<section class="error-404">
    <div class="error-container">
        <h1 class="error-title">404</h1>
        <h2 class="error-subtitle">Siden blev ikke fundet</h2>
        <p class="error-text">
            Ups! Den side, du leder efter, findes ikke. Den kan være flyttet, slettet eller aldrig eksisteret.
        </p>
        <div class="error-buttons">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">Til forsiden</a>
            <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="cta-button">Kontakt os</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
