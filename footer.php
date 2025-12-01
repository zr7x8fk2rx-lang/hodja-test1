<footer class="hodja-footer">
    <div class="hodja-footer__container">
        <div class="hodja-footer__col hodja-footer__logo">
            <img src="https://hodjaauto.alwaysdata.net/wp-content/uploads/2025/10/logo_uden.png" alt="Hodja Auto logo">
            <p>Autoværksted & skadecenter i Taastrup. Professionel service – hver gang.</p>
        </div>

        <?php
        // Get ACF contact data
        $kontakt = function_exists('hodja_get_acf_group_values')
            ? hodja_get_acf_group_values('group_68ee5d03037b9')
            : [];

        $telefon       = $kontakt['telefon'] ?? '';
        $email         = $kontakt['email'] ?? '';
        $adresse       = $kontakt['adresse'] ?? '';
        $postnummer    = $kontakt['postnummer'] ?? '';
        $by            = $kontakt['by'] ?? '';
        $aabningstider = $kontakt['aabningstider'] ?? '';
        $cvr           = $kontakt['cvr'] ?? '';

        // Build Google Maps link for address
        $maps_address = '';
        if ($adresse) {
            $maps_address = $adresse;
        }
        if ($postnummer || $by) {
            $maps_address .= ($maps_address ? ', ' : '') . trim((string)$postnummer . ' ' . (string)$by);
        }
        $maps_url = $maps_address ? 'https://www.google.com/maps/search/' . urlencode($maps_address) : '';
        ?>

        <div class="hodja-footer__col">
            <h3>Åbningstider</h3>
            <?php if ($aabningstider): ?>
                <ul>
                    <?php
                    $lines = explode("\n", trim($aabningstider));
                    foreach ($lines as $line) {
                        $line = trim($line);
                        if ($line && $line !== 'Åbningstider') {
                            echo '<li>' . esc_html($line) . '</li>';
                        }
                    }
                    ?>
                </ul>
            <?php else: ?>
                <ul>
                    <li>Man–Fre: 09:00 – 17:00</li>
                    <li>Lørdag: Lukket</li>
                    <li>Søndag: Lukket</li>
                </ul>
            <?php endif; ?>
        </div>

        <div class="hodja-footer__col">
            <h3>Kontakt</h3>
            <ul>
                <?php if ($telefon): ?>
                    <li><a href="tel:<?php echo esc_attr(str_replace(' ', '', $telefon)); ?>"><?php echo esc_html($telefon); ?></a></li>
                <?php endif; ?>
                <?php if ($email): ?>
                    <li><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></li>
                <?php endif; ?>
                <?php if ($cvr): ?>
                    <li>CVR: <?php echo esc_html($cvr); ?></li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="hodja-footer__col">
            <h3>Adresse</h3>
            <ul>
                <?php if ($adresse): ?>
                    <li>
                        <?php if ($maps_url): ?>
                            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener">
                                <?php echo esc_html($adresse); ?>
                            </a>
                        <?php else: ?>
                            <?php echo esc_html($adresse); ?>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
                <?php if ($postnummer && $by): ?>
                    <li>
                        <?php if ($maps_url): ?>
                            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener">
                                <?php echo esc_html($postnummer . ' ' . $by); ?>
                            </a>
                        <?php else: ?>
                            <?php echo esc_html($postnummer . ' ' . $by); ?>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Information links -->
        <div class="hodja-footer__col">
            <h3>Information</h3>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/cookiepolitik/')); ?>">Cookiepolitik</a></li>
                <li><a href="<?php echo esc_url(home_url('/privatlivspolitik/')); ?>">Privatlivspolitik</a></li>
            </ul>
        </div>
    </div>

    <div class="hodja-footer__bottom">
        <p>© 2025 Hodja Auto – Alle rettigheder forbeholdes</p>

    </div>
</footer>
