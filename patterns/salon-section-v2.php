<?php
/**
 * Title: Salon Section (v2)
 * Slug: enyoi/salon-section-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Salon Section v2"},"align":"full","className":"eny-section eny-section--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eny-section eny-section--paper" id="about">
	<!-- wp:group {"className":"eny-container eny-grid12","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container eny-grid12">
		<!-- wp:group {"className":"eny-about__intro fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-about__intro fade-in">
			<!-- wp:paragraph {"className":"eny-eyebrow"} -->
			<p class="eny-eyebrow"><?php esc_html_e( 'ABOUT', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"eny-headline"} -->
			<h2 class="wp-block-heading eny-headline"><?php esc_html_e( 'About the salon', 'enyoi' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"eny-lede"} -->
			<p class="eny-lede"><?php esc_html_e( 'We value the individuality and beauty of each customer, and will propose hairstyles incorporating the latest trends and techniques. Please enjoy a comfortable salon time in a relaxing space.', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"eny-link-gold"} -->
			<p class="eny-link-gold"><a href="#menu"><?php esc_html_e( 'See our menu', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-about__features eny-features fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-about__features eny-features fade-in">
			<!-- wp:group {"className":"eny-feature","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-feature">
				<!-- wp:html -->
				<span class="eny-feature__mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 12.5l5 5L20 6.5"/></svg></span>
				<!-- /wp:html -->

				<!-- wp:group {"className":"eny-feature__body","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-feature__body">
					<!-- wp:heading {"level":3,"className":"eny-title"} -->
					<h3 class="wp-block-heading eny-title"><?php esc_html_e( 'High technical capabilities', 'enyoi' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"eny-body"} -->
					<p class="eny-body"><?php esc_html_e( 'Experienced stylists with the latest technology', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"eny-feature","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-feature">
				<!-- wp:html -->
				<span class="eny-feature__mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3l2.7 5.9 6.3.7-4.7 4.3 1.3 6.1L12 17l-5.6 3 1.3-6.1L3 9.6l6.3-.7z"/></svg></span>
				<!-- /wp:html -->

				<!-- wp:group {"className":"eny-feature__body","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-feature__body">
					<!-- wp:heading {"level":3,"className":"eny-title"} -->
					<h3 class="wp-block-heading eny-title"><?php esc_html_e( 'High-quality space', 'enyoi' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"eny-body"} -->
					<p class="eny-body"><?php esc_html_e( 'You can relax in a calm atmosphere.', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"eny-feature","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-feature">
				<!-- wp:html -->
				<span class="eny-feature__mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20s-7-4.4-7-9.3A4 4 0 0 1 12 8a4 4 0 0 1 7 2.7C19 15.6 12 20 12 20z"/></svg></span>
				<!-- /wp:html -->

				<!-- wp:group {"className":"eny-feature__body","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-feature__body">
					<!-- wp:heading {"level":3,"className":"eny-title"} -->
					<h3 class="wp-block-heading eny-title"><?php esc_html_e( 'Careful counseling', 'enyoi' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"eny-body"} -->
					<p class="eny-body"><?php esc_html_e( 'We listen to your requests in detail and suggest the best style for you.', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
