<?php
/**
 * Title: More posts
 * Slug: enyoi/more-posts
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"","contentSize":"100%"}} -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:heading {"fontSize":"2x-large"} -->
	<h2 class="wp-block-heading has-2x-large-font-size"><?php esc_html_e( 'More Posts', 'enyoi' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"グリッド"},"layout":{"type":"constrained","contentSize":"100%"},"className":"more-posts"} -->
	<div class="wp-block-query more-posts">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"more-posts-item", "layout":{"type":"constrained"} -->
		<div class="wp-block-group more-posts-item">
			<!-- wp:post-title {"isLink":true,"fontSize":"2x-large", "level":3} /-->
			<!-- wp:spacer {"height":"1rem"} -->
			<div style="height:1rem;" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1rem"}}} /-->
			<!-- wp:spacer {"height":"1rem"} -->
			<div style="height:1rem;" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-date {"style":{"typography":{"fontSize":"0.9rem"}}} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
