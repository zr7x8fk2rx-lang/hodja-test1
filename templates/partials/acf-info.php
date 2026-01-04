<?php

/**
 * ACF Contact Info Partial
 * Displays contact information from ACF group_68ee5d03037b9
 * Can be included in any template for reusable contact display
 */

// Get ACF contact data
$kontakt = function_exists('hodja_get_acf_group_values')
    ? hodja_get_acf_group_values('group_68ee5d03037b9')
    : [];

$firmanavn     = $kontakt['firmanavn'] ?? '';
$telefon       = $kontakt['telefon'] ?? '';
$email         = $kontakt['email'] ?? '';
$adresse       = $kontakt['adresse'] ?? '';
$postnummer    = $kontakt['postnummer'] ?? '';
$by            = $kontakt['by'] ?? '';
$aabningstider = $kontakt['aabningstider'] ?? '';
$cvr           = $kontakt['cvr'] ?? '';

$telefon_href = trim(str_replace(' ', '', (string)$telefon));

// Build Google Maps link
$maps_address = '';
if ($adresse) {
    $maps_address = $adresse;
}
if ($postnummer || $by) {
    $maps_address .= ($maps_address ? ', ' : '') . trim((string)$postnummer . ' ' . (string)$by);
}
$maps_url = $maps_address ? 'https://www.google.com/maps/search/' . urlencode($maps_address) : '';
?>

<?php if ($telefon): ?>
    <a href="tel:<?php echo esc_attr($telefon_href); ?>" class="contact-card contact-card--telefon">
        <div class="contact-card-header">
            <span class="contact-icon">📞</span>
            <span class="contact-card-title">Telefon</span>
        </div>
        <div class="contact-card-text">
            <?php echo esc_html($telefon); ?>
        </div>
    </a>
<?php endif; ?>

<?php
global $hodja_hide_email;
if ($email && !$hodja_hide_email):
?>
    <a href="mailto:<?php echo esc_attr($email); ?>" class="contact-card contact-card--email">
        <div class="contact-card-header">
            <span class="contact-icon">✉️</span>
            <span class="contact-card-title">Email</span>
        </div>
        <div class="contact-card-text">
            <?php echo esc_html($email); ?>
        </div>
    </a>
<?php endif; ?>

<?php if ($maps_url): ?>
    <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" class="contact-card contact-card--adresse">
        <div class="contact-card-header">
            <span class="contact-icon">📍</span>
            <span class="contact-card-title">Adresse</span>
        </div>
        <div class="contact-card-text">
            <?php if ($adresse): ?>
                <?php echo esc_html($adresse); ?><br>
            <?php endif; ?>
            <?php if ($postnummer || $by): ?>
                <?php echo esc_html(trim((string)$postnummer . ' ' . (string)$by)); ?>
            <?php endif; ?>
        </div>
    </a>
<?php endif; ?>

<?php if ($aabningstider): ?>
    <div class="contact-card contact-card--opening">
        <div class="contact-card-header">
            <span class="contact-icon">🕘</span>
            <span class="contact-card-title">Åbningstider</span>
        </div>
        <div class="contact-card-text">
            <?php echo nl2br(esc_html((string)$aabningstider)); ?>
        </div>
    </div>
<?php endif; ?>
