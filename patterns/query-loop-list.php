<?php

/**
 * Title: Query Loop List
 * Slug: enyoi/query-loop-list
 * Categories: enyoi_patterns
 */
?>
<!-- wp:query {"queryId":35,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"左に画像"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"constrained","wideSize":"1200px"}} -->
	<!-- wp:columns {"align":"wide","style":{"border":{"width":"1px"}},"borderColor":"text-light"} -->
	<div class="wp-block-columns alignwide has-border-color has-text-light-border-color" style="border-width:1px"><!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"isLink":true} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title {"isLink":true,"fontSize":"2x-large"} /-->

			<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1rem"}}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->


	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e('Sorry, we could not find anything. Try searching with different keywords.', 'enyoi'); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->