<?php
/**
 * Title: Contact Section (v2)
 * Slug: enyoi/contact-section-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact Section v2"},"align":"full","className":"eny-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eny-section" id="contact">
	<!-- wp:group {"className":"eny-container","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container">
		<!-- wp:group {"className":"eny-section-head fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-section-head fade-in">
			<!-- wp:paragraph {"className":"eny-eyebrow"} -->
			<p class="eny-eyebrow"><?php esc_html_e( 'RESERVE', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"eny-headline"} -->
			<h2 class="wp-block-heading eny-headline"><?php esc_html_e( 'About Reservations', 'enyoi' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-reserve","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-reserve">
			<!-- wp:group {"className":"eny-reserve__card fade-in","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-reserve__card">
				<!-- wp:html -->
				<span class="eny-reserve__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M5 3h3.5l1.8 4.4-2.2 1.6a12 12 0 0 0 6.9 6.9l1.6-2.2L21 15.5V19a2 2 0 0 1-2.2 2A16.8 16.8 0 0 1 3 5.2 2 2 0 0 1 5 3z"/></svg></span>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"className":"eny-title"} -->
				<h3 class="wp-block-heading eny-title"><?php esc_html_e( 'Phone', 'enyoi' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"eny-body"} -->
				<p class="eny-body"><?php esc_html_e( 'Reservations and inquiries can also be made by phone.', 'enyoi' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"eny-reserve__value"} -->
				<p class="eny-reserve__value"><?php esc_html_e( '03-0000-0000', 'enyoi' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"eny-reserve__hours"} -->
				<p class="eny-reserve__hours">
					<?php
					printf(
						/* translators: 1: opening time, 2: closing time */
						esc_html__( 'Business hours: %1$s - %2$s', 'enyoi' ),
						esc_html__( '10:00', 'enyoi' ),
						esc_html__( '20:00', 'enyoi' )
					);
					?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"eny-reserve__card fade-in","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-reserve__card">
				<!-- wp:html -->
				<span class="eny-reserve__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="3" y="5" width="18" height="14"/><path d="M3 6l9 6 9-6"/></svg></span>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"className":"eny-title"} -->
				<h3 class="wp-block-heading eny-title"><?php esc_html_e( 'Email', 'enyoi' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"eny-body"} -->
				<p class="eny-body"><?php esc_html_e( 'Please send us a message using the contact form.', 'enyoi' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Contact form', 'enyoi' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
