<?php

/**
 * Hodja Auto – functions.php
 * Minimal og optimeret opsætning
 */

defined('ABSPATH') || exit;

/**
 * Aktiver tema features & menuer
 */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Hovedmenu', 'hodja'),
    ]);
});

/**
 * Tillad page templates i undermapper
 */
add_filter('page_template', function ($template) {
    if (is_page()) {
        $page_slug = get_post_field('post_name', get_queried_object_id());
        $custom_template = locate_template('templates/page-' . $page_slug . '.php');
        if ($custom_template) {
            return $custom_template;
        }
    }
    return $template;
});

add_filter('theme_page_templates', function ($templates) {
    $template_files = glob(get_stylesheet_directory() . '/templates/page-*.php');
    foreach ($template_files as $file) {
        $template_name = basename($file);
        $template_slug = str_replace(['page-', '.php'], '', $template_name);
        $template_label = ucwords(str_replace('-', ' ', $template_slug));
        $templates['templates/' . $template_name] = $template_label;
    }
    return $templates;
});

/**
 * Indlæs CSS & JS
 */
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_stylesheet_directory_uri();
    $theme_dir = get_stylesheet_directory();

    // 🧱 Global CSS
    $global = $theme_dir . '/assets/css/global.css';
    if (file_exists($global)) {
        wp_enqueue_style(
            'hodja-global',
            $theme_uri . '/assets/css/global.css',
            [],
            filemtime($global)
        );
    }

    // 🔺 Header CSS
    $header_css = $theme_dir . '/assets/css/header.min.css';
    if (file_exists($header_css)) {
        wp_enqueue_style(
            'hodja-header',
            $theme_uri . '/assets/css/header.min.css',
            ['hodja-global'],
            filemtime($header_css)
        );
    }

    // 🔻 Footer CSS
    $footer_css = $theme_dir . '/assets/css/footer.min.css';
    if (file_exists($footer_css)) {
        wp_enqueue_style(
            'hodja-footer',
            $theme_uri . '/assets/css/footer.min.css',
            ['hodja-global'],
            filemtime($footer_css)
        );
    }

    // 🎨 CTA CSS – globalt (alle sider)
    $cta_css = $theme_dir . '/assets/css/components/cta.css';
    if (file_exists($cta_css)) {
        wp_enqueue_style(
            'hodja-cta',
            $theme_uri . '/assets/css/components/cta.css',
            ['hodja-global'],
            filemtime($cta_css)
        );
    }

    // 🎨 Hero CSS – globalt (alle sider)
    $hero_css = $theme_dir . '/assets/css/components/hero.css';
    if (file_exists($hero_css)) {
        wp_enqueue_style(
            'hodja-hero',
            $theme_uri . '/assets/css/components/hero.css',
            ['hodja-global'],
            filemtime($hero_css)
        );
    }

    // 📄 Servicepage CSS (kun på servicepage-sider)
    if (
        is_page_template('templates/page-bilreparationer.php')
        || is_page_template('templates/page-daek-faelge.php')
        || is_page_template('templates/page-drejearbejde.php')
        || is_page_template('templates/page-auto-el-fejlfinding.php')
        || is_page_template('templates/page-serviceeftersyn.php')
        || is_page_template('templates/page-book-vaerkstedstid-online.php')
        || is_page_template('templates/page-tak-for-booking.php')
        || is_page_template('templates/page-om-os.php')
        || is_page_template('templates/page-faq.php')
        || is_page('om-os')
    ) {
        // Servicepage content CSS
        $servicepage_css = $theme_dir . '/assets/css/pages/servicepage.css';
        if (file_exists($servicepage_css)) {
            wp_enqueue_style(
                'hodja-servicepage',
                $theme_uri . '/assets/css/pages/servicepage.css',
                ['hodja-global'],
                filemtime($servicepage_css)
            );
        }
    }

    // 🎨 Bilservice side - Services components
    if (is_page_template('templates/page-bilservice.php')) {
        $services_css = $theme_dir . '/assets/css/components/services.css';
        if (file_exists($services_css)) {
            wp_enqueue_style(
                'hodja-services',
                $theme_uri . '/assets/css/components/services.css',
                ['hodja-global'],
                filemtime($services_css)
            );
        }
    }

    // 📇 Kontakt side - kontakt sektion og formularer
    if (is_page_template('templates/page-kontakt.php') || is_page('kontakt')) {
        $contact_css = $theme_dir . '/assets/css/sections/contact.css';
        if (file_exists($contact_css)) {
            wp_enqueue_style(
                'hodja-contact',
                $theme_uri . '/assets/css/sections/contact.css',
                ['hodja-global'],
                filemtime($contact_css)
            );
        }

        $ff_form_css = $theme_dir . '/assets/css/forms/ff-form.css';
        if (file_exists($ff_form_css)) {
            wp_enqueue_style(
                'hodja-ff-form',
                $theme_uri . '/assets/css/forms/ff-form.css',
                ['hodja-global'],
                filemtime($ff_form_css)
            );
        }

        $acf_info_css = $theme_dir . '/assets/css/forms/acf-info.css';
        if (file_exists($acf_info_css)) {
            wp_enqueue_style(
                'hodja-acf-info',
                $theme_uri . '/assets/css/forms/acf-info.css',
                ['hodja-global'],
                filemtime($acf_info_css)
            );
        }
    }    // 🏠 Front-page (forside) CSS
    if (is_front_page()) {
        // USP CSS
        $usp_css = $theme_dir . '/assets/css/components/usp.css';
        if (file_exists($usp_css)) {
            wp_enqueue_style(
                'hodja-usp',
                $theme_uri . '/assets/css/components/usp.css',
                ['hodja-global'],
                filemtime($usp_css)
            );
        }

        // Services CSS
        $services_css = $theme_dir . '/assets/css/components/services.css';
        if (file_exists($services_css)) {
            wp_enqueue_style(
                'hodja-services',
                $theme_uri . '/assets/css/components/services.css',
                ['hodja-global'],
                filemtime($services_css)
            );
        }

        // Front-page specific CSS
        $frontpage_css = $theme_dir . '/assets/css/pages/front-page.css';
        if (file_exists($frontpage_css)) {
            wp_enqueue_style(
                'hodja-frontpage',
                $theme_uri . '/assets/css/pages/front-page.css',
                ['hodja-global'],
                filemtime($frontpage_css)
            );
        }

        // Contact section CSS (kontakt-kort og form hero)
        $contact_css = $theme_dir . '/assets/css/sections/contact.css';
        if (file_exists($contact_css)) {
            wp_enqueue_style(
                'hodja-contact',
                $theme_uri . '/assets/css/sections/contact.css',
                ['hodja-global'],
                filemtime($contact_css)
            );
        }

        // Fluent Forms CSS (alle formularer)
        $ff_form_css = $theme_dir . '/assets/css/forms/ff-form.css';
        if (file_exists($ff_form_css)) {
            wp_enqueue_style(
                'hodja-ff-form',
                $theme_uri . '/assets/css/forms/ff-form.css',
                ['hodja-global'],
                filemtime($ff_form_css)
            );
        }

        // ACF Contact Info CSS
        $acf_info_css = $theme_dir . '/assets/css/forms/acf-info.css';
        if (file_exists($acf_info_css)) {
            wp_enqueue_style(
                'hodja-acf-info',
                $theme_uri . '/assets/css/forms/acf-info.css',
                ['hodja-global'],
                filemtime($acf_info_css)
            );
        }
    }

    // 🧩 Fallback: Enqueue servicepage CSS på alle almindelige sider
    // Sikrer at page.php (standard skabelon) får indholds-styling
    if (is_page() && !is_front_page()) {
        $servicepage_css = $theme_dir . '/assets/css/pages/servicepage.css';
        if (file_exists($servicepage_css)) {
            wp_enqueue_style(
                'hodja-servicepage',
                $theme_uri . '/assets/css/pages/servicepage.css',
                ['hodja-global'],
                filemtime($servicepage_css)
            );
        }
    }

    // (intended) other specific enqueues can go here

    //  Header JS
    $header_js = $theme_dir . '/assets/js/header.js';
    if (file_exists($header_js)) {
        wp_enqueue_script(
            'hodja-header-js',
            $theme_uri . '/assets/js/header.js',
            [],
            filemtime($header_js),
            true
        );
    }

    // 📜 Footer JS
    $footer_js = $theme_dir . '/assets/js/footer.js';
    if (file_exists($footer_js)) {
        wp_enqueue_script(
            'hodja-footer-js',
            $theme_uri . '/assets/js/footer.js',
            [],
            filemtime($footer_js),
            true
        );
    }
});

/**
 * Tilføj favicon (SVG)
 */
add_action('wp_head', function () {
    $svg = get_stylesheet_directory() . '/assets/hodja-auto-logo.svg';
    if (file_exists($svg)) {
        echo '<link rel="icon" type="image/svg+xml" href="'
            . esc_url(get_stylesheet_directory_uri() . '/assets/hodja-auto-logo.svg')
            . '">' . "\n";
    }
}, 1);

/**
 * Tillad SVG-upload (kun admin)
 */
add_filter('upload_mimes', function ($mimes) {
    if (current_user_can('manage_options')) {
        $mimes['svg'] = 'image/svg+xml';
    }
    return $mimes;
});

// Ingen ACF Options Page (kræver ACF Pro). Vi bruger i stedet Forsiden som fælles kilde.

/**
 * Hent alle værdier for en ACF Field Group via group key (fx 'group_68ee5d03037b9').
 * Forsøger på tværs af post_ids: option, forside, aktuel side.
 * Returnerer assoc. array med ['field_name' => value].
 */
if (!function_exists('hodja_get_acf_group_values')) {
    function hodja_get_acf_group_values($group_key, $post_ids = null)
    {
        if (!function_exists('acf_get_fields')) {
            return [];
        }

        if ($post_ids === null) {
            $default_ids = ['option', get_option('page_on_front'), get_queried_object_id()];
            // Tillad udvikler at styre hvilke post_ids der bruges (fx kun 'option')
            $post_ids = apply_filters('hodja_acf_group_post_ids', $default_ids, $group_key);
        }

        static $definitions_cache = [];
        static $values_cache = [];

        if (!isset($definitions_cache[$group_key])) {
            $definitions_cache[$group_key] = acf_get_fields($group_key);
        }
        $definitions = $definitions_cache[$group_key];
        if (!$definitions || !is_array($definitions)) {
            return [];
        }

        // In-request cache pr. kombination af group_key og post_ids
        $cache_key = md5($group_key . '|' . wp_json_encode(array_values($post_ids)));
        if (isset($values_cache[$cache_key])) {
            return $values_cache[$cache_key];
        }

        $result = [];
        foreach ($definitions as $def) {
            $name = isset($def['name']) ? $def['name'] : null;
            $key  = isset($def['key']) ? $def['key'] : null;
            if (!$name && !$key) {
                continue;
            }
            $candidates = array_values(array_filter([$key, $name]));

            $value = null;
            foreach ($post_ids as $pid) {
                foreach ($candidates as $cand) {
                    $got = get_field($cand, $pid);
                    if (!empty($got) || $got === '0' || $got === 0) {
                        $value = $got;
                        break 2;
                    }
                }
            }
            // Ingen fallback: kun gemte ACF-værdier må bruges
            if ($name) {
                $result[$name] = $value;
            }
        }

        $values_cache[$cache_key] = $result;
        return $result;
    }
}

// Lås kontaktoplysninger til kun at læse fra Kontaktsiden (slug: 'kontakt')
add_filter('hodja_acf_group_post_ids', function ($ids, $group_key) {
    if ($group_key === 'group_68ee5d03037b9') {
        $kontakt = get_page_by_path('kontakt');
        if ($kontakt && isset($kontakt->ID)) {
            return [$kontakt->ID];
        }
        // Hvis siden ikke findes endnu, behold standardrækkefølgen for ikke at bryde visning
        return $ids;
    }
    return $ids;
}, 10, 2);

/**
 * Shortcode til ACF kontaktoplysninger
 * Brug: [hodja_contact_info hide_email="true"]
 */
add_shortcode('hodja_contact_info', function ($atts) {
    $atts = shortcode_atts([
        'hide_email' => 'false',
    ], $atts);

    // Set global variable so partial can access it
    global $hodja_hide_email;
    $hodja_hide_email = ($atts['hide_email'] === 'true');

    ob_start();
    get_template_part('templates/partials/acf-info');
    return ob_get_clean();
});
