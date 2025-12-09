<?php
/* Template Name: Book værkstedstid online */
get_header(); ?>

<section class="servicepage-hero">
    <div class="servicepage-herocontainer">
        <h1 class="servicepage-herotitle">Book værkstedstid online</h1>
        <p class="servicepage-herotext">Book hurtigt og nemt din tid – vi vender tilbage med bekræftelse.</p>
    </div>
</section>

<section class="servicepage-section">
    <div class="servicepage-container">
        <?php echo do_shortcode('[fluentform id="9"]'); ?>
    </div>
</section>

<?php get_footer();
