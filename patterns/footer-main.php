<?php

/**
 * Title: Main Footer
 * Slug: enyoi/footer-main
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"align":"full","className":"footer","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull footer">
    <!-- wp:group {"className":"container enyoi-py-3","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group container enyoi-py-3">
        <!-- wp:group {"className":"footer-content","layout":{"type":"grid","minimumColumnWidth":null,"columnCount":4}} -->
        <div class="wp-block-group footer-content">
            <!-- wp:group {"className":"footer-brand","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group footer-brand">
                <!-- wp:group {"className":"footer-logo","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group footer-logo">
                    <!-- wp:site-logo /-->
                    <!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"fontSize":"5x-large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"className":"footer-description","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
                <p class="footer-description has-light-gray-color has-text-color has-link-color">
                    <?php esc_html_e('With the best techniques and space, we will bring out your beauty. We offer relaxation for the mind and body and help you discover a new you.', 'enyoi'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"footer-social","layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-group footer-social">
                    <!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#f1f5f9","openInNewTab":true,"size":"has-large-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only">
                        <!-- wp:social-link {"url":"#","service":"x"} /-->
                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        <!-- wp:social-link {"url":"#","service":"Instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"footer-section","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group footer-section">
                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h3 class="wp-block-heading has-secondary-color has-text-color has-link-color"><?php esc_html_e('Menu', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:navigation {"textColor":"light-gray","overlayMenu":"never","overlayTextColor":"primary","layout":{"type":"flex","orientation":"vertical"}} -->
                <!-- wp:navigation-link {"label":"Cut","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Color","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Perm","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Spa","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- /wp:navigation -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"footer-section","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group footer-section">
                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h3 class="wp-block-heading has-secondary-color has-text-color has-link-color"><?php esc_html_e('Info', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:navigation {"textColor":"light-gray","overlayMenu":"never","overlayTextColor":"primary","layout":{"type":"flex","orientation":"vertical"}} -->
                <!-- wp:navigation-link {"label":"Privacy Policy","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Teams","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"footer-section footer-contact","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group footer-section footer-contact">
                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h3 class="wp-block-heading has-secondary-color has-text-color has-link-color"><?php esc_html_e('Store', 'enyoi'); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-sub"}}}},"textColor":"text-sub"} -->
                <ul class="wp-block-list has-text-sub-color has-text-color has-link-color">
                    <!-- wp:list-item -->
                    <li>📍 <?php esc_html_e('Jingumae, Shibuya-ku, Tokyo', 'enyoi'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>☎ <?php esc_html_e('03-0000-0000', 'enyoi'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>🕙 <?php esc_html_e('10:00', 'enyoi'); ?> - <?php esc_html_e('20:00', 'enyoi'); ?>（<?php esc_html_e('Closed Day', 'enyoi'); ?>：<?php esc_html_e('Tue', 'enyoi'); ?>）</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>🚃 <?php esc_html_e('Nearest station', 'enyoi'); ?>：<?php esc_html_e('Meiji Jingu-mae 4-minute walk', 'enyoi'); ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"footer-bottom has-text-color has-light-gray-color","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group footer-bottom has-text-color has-light-gray-color">
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
            <p class="has-text-align-center has-light-gray-color has-text-color has-link-color">© 2025 <?php bloginfo('name'); ?> All rights reserved.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
            <p class="has-text-align-center has-light-gray-color has-text-color has-link-color">Designed by <a href="https://profiles.wordpress.org/369work/" target="_blank" rel="noreferrer noopener" class="has-light-gray-color has-text-color has-link-color">Enyoi</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->