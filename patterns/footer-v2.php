<?php
/**
 * Title: Main Footer (v2)
 * Slug: enyoi/footer-v2
 * Categories: enyoi_patterns
 *
 * @package enyoi
 */

?>
<!-- wp:group {"align":"full","className":"eny-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull eny-footer">
	<!-- wp:group {"className":"eny-container eny-footer__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container eny-footer__grid">
		<!-- wp:group {"className":"eny-footer__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-footer__intro">
			<!-- wp:paragraph {"className":"eny-footer__brand"} -->
			<p class="eny-footer__brand"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"eny-body eny-footer__desc"} -->
			<p class="eny-body eny-footer__desc"><?php esc_html_e( 'With the best techniques and space, we will bring out your beauty. We offer relaxation for the mind and body and help you discover a new you.', 'enyoi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-footer__col","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-footer__col">
			<!-- wp:heading {"level":4,"className":"eny-eyebrow"} -->
			<h4 class="wp-block-heading eny-eyebrow"><?php esc_html_e( 'Menu', 'enyoi' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><a href="#about"><?php esc_html_e( 'Salon', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#menu"><?php esc_html_e( 'Menu', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#blog"><?php esc_html_e( 'News', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#staff"><?php esc_html_e( 'Staff', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#access"><?php esc_html_e( 'Access', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#contact"><?php esc_html_e( 'Reserve', 'enyoi' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"eny-footer__col","layout":{"type":"default"}} -->
		<div class="wp-block-group eny-footer__col">
			<!-- wp:heading {"level":4,"className":"eny-eyebrow"} -->
			<h4 class="wp-block-heading eny-eyebrow"><?php esc_html_e( 'Info', 'enyoi' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"eny-footer__info"} -->
			<p class="eny-footer__info">
				<?php esc_html_e( 'Store', 'enyoi' ); ?><br>
				<?php esc_html_e( 'Jingumae, Shibuya-ku, Tokyo', 'enyoi' ); ?><br>
				<?php esc_html_e( '03-0000-0000', 'enyoi' ); ?><br>
				<?php
				printf(
					/* translators: 1: opening time, 2: closing time, 3: regular holiday */
					esc_html__( '%1$s - %2$s (Closed: %3$s)', 'enyoi' ),
					esc_html__( '10:00', 'enyoi' ),
					esc_html__( '20:00', 'enyoi' ),
					esc_html__( 'Tue', 'enyoi' )
				);
				?>
				<br>
				<?php
				printf(
					/* translators: %s: nearest station and walking time */
					esc_html__( 'Nearest station: %s', 'enyoi' ),
					esc_html__( 'Meiji Jingu-mae 4-minute walk', 'enyoi' )
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"eny-container eny-footer__bottom","layout":{"type":"default"}} -->
	<div class="wp-block-group eny-container eny-footer__bottom">
		<!-- wp:paragraph -->
		<p>
			<?php
			printf(
				/* translators: 1: copyright year, 2: site name */
				esc_html__( 'Copyright &copy; %1$s %2$s. All rights reserved.', 'enyoi' ),
				esc_html( gmdate( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
			?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<?php
			printf(
				/* translators: %s: theme name */
				esc_html__( 'Designed by %s', 'enyoi' ),
				esc_html__( 'Enyoi', 'enyoi' )
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
