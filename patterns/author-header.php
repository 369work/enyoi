<?php

/**
 * Title: Author Header
 * Slug: enyoi/author-header
 * Categories: enyoi_patterns
 * Inserter: false
 */
?>
<!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container">
    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:heading {"level":1,"className":"section-title fade-in","style":{"typography":{"textAlign":"center"}}} -->
    <h1 class="wp-block-heading section-title fade-in"><span data-subtitle="<?php esc_attr_e('Author', 'enyoi'); ?>"><?php esc_html_e('Author', 'enyoi'); ?></span></h1>
    <!-- /wp:heading -->

    <!-- wp:query-title {"type":"archive","textAlign":"center","level":2,"style":{"spacing":{"padding":{"top":"1px","bottom":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark","fontSize":"2x-large"} /-->
</div>
<!-- /wp:group -->
