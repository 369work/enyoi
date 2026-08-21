<?php
/**
 * Title: Access Section (v2)
 * Slug: enyoi/access-section-v2
 * Categories: enyoi_patterns
 *
 * 見出し以外の中身は、Enyoi Store Info プラグインが有効なら
 * ショートコードで出力し、無ければテーマ側の既定表示にする。
 *
 * @package enyoi
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Access Section v2"},"align":"full","className":"eny-section eny-section--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eny-section eny-section--paper" id="access">
	<!-- wp:group {"className":"eny-container","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container">
		<!-- wp:group {"className":"eny-section-head fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-section-head fade-in">
			<!-- wp:paragraph {"className":"eny-eyebrow"} -->
			<p class="eny-eyebrow"><?php esc_html_e( 'ACCESS', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"eny-headline"} -->
			<h2 class="wp-block-heading eny-headline"><?php esc_html_e( 'Access', 'enyoi' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<?php if ( class_exists( 'EnyoiStoreInfo' ) ) : ?>
		<!-- wp:group {"className":"eny-access-plugin fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-access-plugin">
			<!-- wp:shortcode -->
			[enyoi_store_info]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
		<?php else : ?>
		<!-- wp:group {"className":"eny-grid12 fade-in","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-grid12">
			<!-- wp:group {"className":"eny-access__list","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-access__list">
				<!-- wp:group {"className":"eny-access__row","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-access__row">
					<!-- wp:paragraph {"className":"eny-access__term"} -->
					<p class="eny-access__term"><?php esc_html_e( 'Store', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"eny-access__desc"} -->
					<p class="eny-access__desc"><?php esc_html_e( 'Jingumae, Shibuya-ku, Tokyo', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"eny-access__row","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-access__row">
					<!-- wp:paragraph {"className":"eny-access__term"} -->
					<p class="eny-access__term"><?php esc_html_e( 'Phone', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"eny-access__desc eny-price"} -->
					<p class="eny-access__desc eny-price"><?php esc_html_e( '03-0000-0000', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"eny-access__row","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-access__row">
					<!-- wp:paragraph {"className":"eny-access__term"} -->
					<p class="eny-access__term"><?php esc_html_e( 'Business hours', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"eny-access__desc eny-price"} -->
					<p class="eny-access__desc eny-price">
						<?php
						printf(
							/* translators: 1: opening time, 2: closing time, 3: regular holiday */
							esc_html__( '%1$s - %2$s (Closed: %3$s)', 'enyoi' ),
							esc_html__( '10:00', 'enyoi' ),
							esc_html__( '20:00', 'enyoi' ),
							esc_html__( 'Tue', 'enyoi' )
						);
						?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"eny-access__row","layout":{"type":"default"}} -->
				<div class="wp-block-group eny-access__row">
					<!-- wp:paragraph {"className":"eny-access__term"} -->
					<p class="eny-access__term"><?php esc_html_e( 'Nearest station', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"eny-access__desc"} -->
					<p class="eny-access__desc"><?php esc_html_e( 'Meiji Jingu-mae 4-minute walk', 'enyoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"eny-access__map","layout":{"type":"default"}} -->
			<div class="wp-block-group eny-access__map">
				<!-- wp:html -->
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><path d="M12 21s-7-5.6-7-11a7 7 0 0 1 14 0c0 5.4-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
				<!-- /wp:html -->

				<!-- wp:paragraph {"className":"eny-access__map-label"} -->
				<p class="eny-access__map-label"><?php esc_html_e( 'Map', 'enyoi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
