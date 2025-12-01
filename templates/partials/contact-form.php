<?php

/**
 * Contact Form Partial
 * Displays Fluent Forms contact form
 * Can be included in any template for reusable form display
 */
?>

<div class="contact-form-wrapper">
    <?php
    if (shortcode_exists('fluentform')) {
        echo do_shortcode('[fluentform id="11"]');
    } else {
        echo '<p>Kontaktformularen kunne ikke indlæses.</p>';
    }
    ?>
</div>
