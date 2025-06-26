<?php

/**
 * Title: Single Post
 * Slug: enyoi/single-post
 * Categories: enyoi_patterns
 */
?>

<!-- wp:group {"tagName":"article","className":"single-page","layout":{"type":"constrained"}} -->
<article class="wp-block-group single-page"><!-- wp:post-title {"level":1,"align":"wide","className":"enyoi-mb-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"}}}},"textColor":"primary-dark"} /-->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:post-date {"displayType":"modified","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} /-->

        <!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide"} /-->

    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:post-content {"align":"wide","layout":{"type":"constrained","wideSize":"1200px"}} /-->

    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"","contentSize":"100%"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} /-->
        <!-- wp:spacer {"height":"3rem"} -->
        <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:post-author {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} /-->
    </div>
    <!-- /wp:group -->
</article>
<!-- /wp:group -->