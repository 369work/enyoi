<?php
/**
 * Title: Blog Header
 * Slug: enyoi/home-header
 * Categories: enyoi_patterns
 * Inserter: false
 *
 * @package enyoi
 */

?>
<!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
<div class="wp-block-group container">
	<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"level":1,"className":"section-title fade-in","style":{"typography":{"textAlign":"center"}}} -->
	<h1 class="wp-block-heading section-title fade-in"><span data-subtitle="<?php esc_attr_e( 'BLOG', 'enyoi' ); ?>"><?php esc_html_e( 'Blog', 'enyoi' ); ?></span></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
