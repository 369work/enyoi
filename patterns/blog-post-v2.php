<?php
/**
 * Title: Blog Post (v2)
 * Slug: enyoi/blog-post-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog Post Section v2"},"align":"full","className":"eny-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eny-section" id="blog">
	<!-- wp:group {"className":"eny-container","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container">
		<!-- wp:group {"className":"eny-section-head fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-section-head fade-in">
			<!-- wp:paragraph {"className":"eny-eyebrow"} -->
			<p class="eny-eyebrow"><?php esc_html_e( 'NEWS', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"eny-headline"} -->
			<h2 class="wp-block-heading eny-headline"><?php esc_html_e( 'Latest Posts', 'enyoi' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-news__list fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-news__list">
			<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
				<!-- wp:group {"tagName":"article","className":"eny-news__item","layout":{"type":"default"}} -->
				<article class="wp-block-group eny-news__item">
					<!-- wp:post-date {"className":"eny-news__date"} /-->

					<!-- wp:group {"className":"eny-news__body","layout":{"type":"default"}} -->
					<div class="wp-block-group eny-news__body">
						<!-- wp:post-title {"level":3,"isLink":true,"className":"eny-title"} /-->

						<!-- wp:post-excerpt {"className":"eny-body","excerptLength":40} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:read-more {"className":"eny-link-gold"} /-->
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
