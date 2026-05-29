<?php

/**
 * Title: Blog Post
 * Slug: enyoi/blog-post
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","className":"section section-bg-white","metadata":{"name":"Blog Post Section"}} -->
<section class="wp-block-group section section-bg-white" id="blog">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":2,"className":"section-title fade-in"} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="<?php esc_attr_e('BLOG', 'enyoi'); ?>"><?php esc_html_e('Latest Posts', 'enyoi'); ?></span></h2>
        <!-- /wp:heading -->
        <!-- wp:group {"className":"alignfull"} -->
        <div class="wp-block-group">
            <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query">
                <!-- wp:post-template {"className":"news-grid"} -->
                <!-- wp:group {"className":"news-item fade-in","tagName":"article"} -->
                <article class="wp-block-group news-item fade-in">
                    <!-- wp:group {"className":"news-date"} -->
                    <div class="wp-block-group news-date">
                        <!-- wp:post-date {"isLink":true} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"isLink":true} /-->

                    <!-- wp:group {"className":"news-description"} -->
                    <div class="wp-block-group news-description">
                        <!-- wp:post-excerpt /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:read-more {"className":"news-link"} /-->
                </article>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:pattern {"slug":"enyoi/no-results"} /-->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->