<?php
/**
 * Title: Main Header (v2)
 * Slug: enyoi/header-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"align":"full","className":"eny-nav","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull eny-nav">
	<!-- wp:group {"className":"eny-container eny-nav__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group eny-container eny-nav__inner">
		<!-- wp:site-title {"className":"eny-nav__brand"} /-->

		<!-- wp:navigation {"className":"eny-nav__links","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} -->
		<!-- wp:navigation-link {"label":"Salon","url":"#about","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Menu","url":"#menu","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"News","url":"#blog","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Staff","url":"#staff","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Access","url":"#access","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Reserve","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"className":"eny-btn-nav"} -->
		<div class="wp-block-buttons eny-btn-nav">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Reservation', 'enyoi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
