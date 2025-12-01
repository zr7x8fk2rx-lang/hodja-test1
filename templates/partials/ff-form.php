<?php

/**
 * Contact Form Partial
 * Displays Fluent Forms contact form
 * Can be included in any template for reusable form display
 */
?>

<div class="ff-form-wrapper">
    <?php
    if (shortcode_exists('fluentform')) {
        echo do_shortcode('[fluentform id="11"]');
    } else {
        echo '<p>Kontaktformularen kunne ikke indl\u00e6ses.</p>';
    }
    ?>
</div>
