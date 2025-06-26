<?php

/**
 * Title: Page 404
 * Slug: enyoi/page-404
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"align":"full"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-layout-constrained has-background">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"5x-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-5-x-large-font-size">404</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color has-link-color"><?php esc_html_e('Sorry, the page you are looking for does not exist.', 'enyoi'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color has-link-color"><?php printf(__('Please go back to %s or try searching for a different word.', 'enyoi'), '<a href="' . esc_url(home_url('/')) . '">' . __('TOP', 'enyoi') . '</a>'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"buttonPosition":"button-inside"} /-->

        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->