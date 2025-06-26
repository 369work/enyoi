<?php

/**
 * Title: Main Header
 * Slug: enyoi/header-main
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"align":"full","className":"header alignfull"} -->
<div class="wp-block-group alignfull header">
    <!-- wp:group {"className":"container","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group container">
        <!-- wp:group {"className":"wrap","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
        <div class="wp-block-group wrap" style="padding-top:1rem;padding-bottom:1rem">
            <!-- wp:group {"className":"header-logo","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group header-logo">
                <!-- wp:group {"className":"logo-wrap","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group logo-wrap">
                    <!-- wp:site-logo {"width":80,"shouldSyncIcon":true,"style":{"width":"80px","height":"auto"}} /-->
                    <!-- wp:site-title {"className":"title-logo"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:site-tagline /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"nav-links","layout":{"type":"constrained"}} -->
            <div class="wp-block-group nav-links">
                <!-- wp:navigation {"className":"nav-links","layout":{"type":"flex"}} -->
                <!-- wp:navigation-link {"label":"Salon","url":"#about","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Menu","url":"#menu","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"News","url":"#news","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Staff","url":"#staff","kind":"custom","isTopLevelLink":true} /-->
                <!-- wp:navigation-link {"label":"Reserve","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->