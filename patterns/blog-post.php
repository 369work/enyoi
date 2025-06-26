<?php

/**
 * Title: Blog Post
 * Slug: enyoi/blog-post
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","className":"section section-bg-white","tagName":"section","metadata":{"name":"Blog Post Section"}} -->
<section class="wp-block-group section section-bg-white" id="blog">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":2,"className":"section-title fade-in"} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="BLOG"><?php esc_html_e('Latest Posts', 'enyoi'); ?></span></h2>
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

                    <!-- wp:group {"className":"news-description","tagName":"p"} -->
                    <p class="wp-block-group news-description">
                        <!-- wp:post-excerpt /-->
                    </p>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"news-link-wrapper"} -->
                    <p class="news-link-wrapper"><a href="#" class="news-link"><?php esc_html_e('Read more', 'enyoi'); ?></a></p>
                    <!-- /wp:paragraph -->
                </article>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph -->
                <p><?php esc_html_e('Sorry, we could not find anything. Try searching with different keywords.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->