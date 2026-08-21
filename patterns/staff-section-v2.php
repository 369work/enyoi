<?php
/**
 * Title: Staff Section (v2)
 * Slug: enyoi/staff-section-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Staff Section v2"},"align":"full","className":"eny-section eny-section--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eny-section eny-section--paper" id="staff">
	<!-- wp:group {"className":"eny-container","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container">
		<!-- wp:group {"className":"eny-section-head fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-section-head fade-in">
			<!-- wp:paragraph {"className":"eny-eyebrow"} -->
			<p class="eny-eyebrow"><?php esc_html_e( 'STAFF', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"eny-headline"} -->
			<h2 class="wp-block-heading eny-headline"><?php esc_html_e( 'Staff Introduction', 'enyoi' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-staff","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-staff">
			<!-- wp:group {"tagName":"article","className":"eny-staff__row fade-in","layout":{"type":"default"}} -->
			<article class="wp-block-group eny-staff__row fade-in">
				<!-- wp:group {"className":"eny-staff__figure","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-staff__figure">
					<!-- wp:group {"className":"eny-staff__photo","layout":{"type":"default"}} -->
					<div class="wp-block-group eny-staff__photo">
						<!-- wp:html -->
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><circle cx="12" cy="8.5" r="3.5"/><path d="M4.5 20c1.2-3.6 4-5.5 7.5-5.5s6.3 1.9 7.5 5.5"/></svg>
						<!-- /wp:html -->

						<!-- wp:paragraph {"className":"eny-staff__placeholder-label"} -->
						<p class="eny-staff__placeholder-label"><?php esc_html_e( 'Staff Image', 'enyoi' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"eny-staff__body","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-staff__body">
					<!-- wp:paragraph {"className":"eny-staff__role"} -->
					<p class="eny-staff__role"><?php esc_html_e( 'Chief Stylist', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"className":"eny-headline eny-staff__name"} -->
					<h3 class="wp-block-heading eny-headline eny-staff__name"><?php esc_html_e( 'Miho Tanaka', 'enyoi' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"eny-body eny-staff__bio"} -->
					<p class="eny-body eny-staff__bio"><?php esc_html_e( 'A veteran stylist with 15 years of experience, she is good at proposing styles that are in line with the latest trends.', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"className":"eny-btn-ghost"} -->
					<div class="wp-block-buttons eny-btn-ghost">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Reservation', 'enyoi' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"eny-staff__row eny-staff__row--flip fade-in","layout":{"type":"default"}} -->
			<article class="wp-block-group eny-staff__row eny-staff__row--flip fade-in">
				<!-- wp:group {"className":"eny-staff__figure","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-staff__figure">
					<!-- wp:group {"className":"eny-staff__photo","layout":{"type":"default"}} -->
					<div class="wp-block-group eny-staff__photo">
						<!-- wp:html -->
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><circle cx="12" cy="8.5" r="3.5"/><path d="M4.5 20c1.2-3.6 4-5.5 7.5-5.5s6.3 1.9 7.5 5.5"/></svg>
						<!-- /wp:html -->

						<!-- wp:paragraph {"className":"eny-staff__placeholder-label"} -->
						<p class="eny-staff__placeholder-label"><?php esc_html_e( 'Staff Image', 'enyoi' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"eny-staff__body","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-staff__body">
					<!-- wp:paragraph {"className":"eny-staff__role"} -->
					<p class="eny-staff__role"><?php esc_html_e( 'stylist', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"className":"eny-headline eny-staff__name"} -->
					<h3 class="wp-block-heading eny-headline eny-staff__name"><?php esc_html_e( 'Ken Sato', 'enyoi' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"eny-body eny-staff__bio"} -->
					<p class="eny-body eny-staff__bio"><?php esc_html_e( 'Specialists in mens haircuts and coloring, offering styles to suit your lifestyle.', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"className":"eny-btn-ghost"} -->
					<div class="wp-block-buttons eny-btn-ghost">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Reservation', 'enyoi' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</article>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
