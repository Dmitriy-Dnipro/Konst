<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package konstrack
 */

get_header();

$lang = pll_current_language();

?>

	<section class="result-search">
		<div class="container">
		<!-- Breadscrumbs section -->
		<div class="breadscrumbs"> 
			<?php
				if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			?>
		</div>
		<!-- /Breadscrumbs section -->

		<div class="search-for__page">
		  <?php if($lang == 'ru'){?>	
			<p>Поиск</p>
		  <?}else if($lang == 'uk'){?>
			<p>Пошук</p>
		  <?}?>
			<div class="search__form">
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<?php if($lang == 'ru'){?>
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"  placeholder="Поиск"/>
						<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Поиск', 'submit button' ); ?>" />
					<?}else if($lang == 'uk'){?>
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"  placeholder="Пошук"/>
						<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Пошук', 'submit button' ); ?>" />
					<?}?>

				</div>
			</form>
			</div>
		</div>
		<?php if (have_posts() ) : ?>
			<div class="page-header">
			   <?php if($lang == 'ru'){?>
					<p class="page-title">
						Результаты поиска
					</p>
				<?}else if($lang == 'uk'){?>
					<p class="page-title">
						Результати пошуку
					</p>
				<?}?>
			</div><!-- .page-header -->

			<?php
			/* Start the Loop */
			echo '<div class="search-result__content">';
			while (have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			echo '</div>';

			if($lang == 'ru'){
				$args = array(
					'prev_next'    => True,
					'prev_text'    => __('« Назад'),
					'next_text'    => __('Вперед »'),
				);
			}else if($lang == 'uk'){
				$args = array(
					'prev_next'    => True,
					'prev_text'    => __('« Назад'),
					'next_text'    => __('Вперед »'),
				);
			}

			echo '<div class="paginate-search">';
			echo paginate_links($args);
			echo '</div>';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	 </div>
	</section>

<?php
get_footer();
