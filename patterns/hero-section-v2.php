<?php
/**
 * Title: Hero Section (v2)
 * Slug: enyoi/hero-section-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

$enyoi_hero_image = get_template_directory_uri() . '/assets/images/hero-background-v2.webp';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $enyoi_hero_image ); ?>","dimRatio":40,"overlayColor":"back-light","isUserOverlayColor":true,"textColor":"text-main","align":"full","className":"eny-hero","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull eny-hero has-text-main-color has-text-color">
	<span aria-hidden="true" class="wp-block-cover__background has-back-light-background-color has-background-dim-40 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $enyoi_hero_image ); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"eny-container eny-hero__inner","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-container eny-hero__inner">
			<!-- wp:paragraph {"className":"eny-eyebrow fade-in"} -->
			<p class="eny-eyebrow fade-in"><?php esc_html_e( 'Redefining Beauty', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"eny-display fade-in"} -->
			<h1 class="wp-block-heading eny-display fade-in"><?php esc_html_e( 'Beauty Redefined Salon', 'enyoi' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"eny-lede fade-in"} -->
			<p class="eny-lede fade-in"><?php esc_html_e( 'We bring out your beauty with the best technology and space.', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"fade-in"} -->
			<div class="wp-block-buttons fade-in">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Reservation', 'enyoi' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-container eny-popular","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-container eny-popular">
			<!-- wp:list {"className":"eny-popular__list"} -->
			<ul class="wp-block-list eny-popular__list">
				<!-- wp:list-item -->
				<li><span class="eny-popular__name"><?php esc_html_e( 'Cut', 'enyoi' ); ?></span><span class="eny-popular__price"><?php esc_html_e( '￥5,000', 'enyoi' ); ?></span></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><span class="eny-popular__name"><?php esc_html_e( 'Color', 'enyoi' ); ?></span><span class="eny-popular__price"><?php esc_html_e( '￥8,000', 'enyoi' ); ?></span></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><span class="eny-popular__name"><?php esc_html_e( 'Perm', 'enyoi' ); ?></span><span class="eny-popular__price"><?php esc_html_e( '￥10,000', 'enyoi' ); ?></span></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
