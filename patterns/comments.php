<?php

/**
 * Title: Comments
 * Slug: enyoi/comments
 * Categories: enyoi_patterns
 */
?>
<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:heading {"fontSize":"2x-large"} -->
    <h2 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e('Comments', 'enyoi'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:comments-title {"level":3,"fontSize":"2x-large", "textColor":"primary-dark"} /-->

    <!-- wp:comment-template -->
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|primary-light","width":"2px"},"top":{},"right":{},"left":{}}}} -->
    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary-light);border-bottom-width:2px;margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
        <div class="wp-block-group"><!-- wp:avatar {"size":50} /-->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:comment-date /-->
                <!-- wp:comment-author-name /-->
                <!-- wp:spacer {"height":"1rem"} -->
                <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:comment-content /-->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:comment-edit-link /-->
                    <!-- wp:comment-reply-link /-->
                </div>
                <!-- /wp:group -->
                <!-- wp:spacer {"height":"1rem"} -->
                <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:comment-template -->

    <!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <!-- wp:comments-pagination-previous /-->
    <!-- wp:comments-pagination-next /-->
    <!-- /wp:comments-pagination -->

    <!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->