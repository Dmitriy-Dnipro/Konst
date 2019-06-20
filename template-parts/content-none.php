<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstrack
 */
 
 $lang = pll_current_language();

?>

<section class="no-results not-found">
	<header class="page-header">
		<?php if($lang == 'ru'){?>
			<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'konstrack' ); ?></h1>
		<?}else if($lang == 'uk'){?>
			<h1 class="page-title"><?php esc_html_e( 'Нічого не знайдено', 'konstrack' ); ?></h1>
		<?}?>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'konstrack' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<?php if($lang == 'ru'){?>
				<p><?php esc_html_e( 'Извините, но ничего не соответствует вашим условиям поиска. Пожалуйста, попытайтесь снова с другими ключевыми словами.', 'konstrack' ); ?></p>
			<?}else if($lang == 'uk'){?>
				<p><?php esc_html_e( 'Вибачте, але нічого не відповідає даним критеріям пошуку. Будь ласка, спробуйте знову з іншими ключовими словами.', 'konstrack' ); ?></p>
			<?}?>
			<?php
			
		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'konstrack' ); ?></p>
			<?php


		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
