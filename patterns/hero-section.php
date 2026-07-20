<?php
/**
 * Title: Hero Section
 * Slug: enyoi/hero-section
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero Section"},"align":"full","className":"hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hero">
	<!-- wp:group {"className":"hero-left","layout":{"type":"default"}} -->
	<div class="wp-block-group hero-left">
		<!-- wp:group {"className":"hero-left-inner","layout":{"type":"default"}} -->
		<div class="wp-block-group hero-left-inner">
			<!-- wp:group {"className":"hero-heading-wrapper","layout":{"type":"default"}} -->
			<div class="wp-block-group hero-heading-wrapper">
				<!-- wp:heading {"level":1,"className":"hero-heading"} -->
				<h1 class="wp-block-heading hero-heading"><?php echo wp_kses( __( 'Beauty<br>Redefined<br>Salon', 'enyoi' ), array( 'br' => array() ) ); ?></h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"hero-subtitle"} -->
			<p class="hero-subtitle"><?php esc_html_e( 'We bring out your beauty with the best technology and space.', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"btn-primary is-style-fill"} -->
				<div class="wp-block-button btn-primary is-style-fill"><a href="#contact" class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Reservation', 'enyoi' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"className":"popular-menu","layout":{"type":"default"}} -->
			<div class="wp-block-group popular-menu">
				<!-- wp:heading {"className":"popular-menu-title"} -->
				<h2 class="wp-block-heading popular-menu-title"><?php esc_html_e( 'Popular Menu', 'enyoi' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"popular-menu-list"} -->
				<ul class="wp-block-list popular-menu-list">
					<!-- wp:list-item {"className":"popular-menu-item"} -->
					<li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e( 'Cut', 'enyoi' ); ?></span><span class="menu-item-price"><?php esc_html_e( '￥5,000', 'enyoi' ); ?></span></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item {"className":"popular-menu-item"} -->
					<li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e( 'Color', 'enyoi' ); ?></span><span class="menu-item-price"><?php esc_html_e( '￥8,000', 'enyoi' ); ?></span></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item {"className":"popular-menu-item"} -->
					<li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e( 'Perm', 'enyoi' ); ?></span><span class="menu-item-price"><?php esc_html_e( '￥10,000', 'enyoi' ); ?></span></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"hero-right","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-background.webp","id":128,"source":"file","title":"hero-background"},"backgroundSize":"cover","backgroundPosition":"center center"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group hero-right">
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
