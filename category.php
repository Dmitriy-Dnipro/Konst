<?php
/**
*
*/

get_header();
$lang = pll_current_language();
?>

<div id="primary" class="content-area blog-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	
			<?php include ('template-parts/top-banner-blog-block.php'); ?>

			<!--  Blog section -->	
			<section class="blog-block">

				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs"> 
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						//echo do_shortcode('[yoast-breadcrumb]');
						?>
					</div>
					<!-- /Breadscrumbs section -->
					

					<?php 
						if($lang == 'ru'){
							$cat = get_category_by_slug('blog-articles'); 
						}else if($lang == 'uk'){
							$cat = get_category_by_slug('blog-ua');
						}
						

					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

					$args = array(
						'post_type' => 'post',
						'post_status'=>'publish',
						'posts_per_page' => 6, 
						'cat' => get_queried_object()->term_id,
						'paged' => $paged,
					);

					$the_query = new WP_Query($args);
					?> 

					<div class="masonry">
						<div class="item categories-blog">
							<h1><?= get_queried_object()->name; ?></h1>
							<?php $get_categories = get_categories(array('hide_empty' => 0, 'child_of' => $cat->term_id)); ?>
							<div class="categories-blog__list">
							
								<?php if($lang == 'ru'){?>
									<a href="<?= site_url() . '/blog-2/'; ?>" class="categories-blog__item" id="category-all">Все</a>
								<?}else if($lang == 'uk'){?>
									<a href="<?= site_url() . '/blog-3/'; ?>" class="categories-blog__item" id="category-all">Всi</a>
								<?}?>

								<?php
								if ( $get_categories ) {
									foreach ( $get_categories as $cat ) { ?>
										
										<?php if (!($cat->slug == 'otrasli-primeneniya')) { ?>
											<a href="<?= get_term_link($cat->term_id); ?>" class="categories-blog__item" id="category-<?= $cat->term_id; ?>"><?= $cat->name; ?></a>
										<?php } ?>
										
									<?php } 
								}
								?>
								<div class="no-posts"></div>
							</div>
						</div>
						<span class="inner-posts" id="allPosts">
							<?php
						if ( $the_query-> have_posts() ) { ?>
							<?php while ( $the_query->have_posts() ) {
								$the_query->the_post(); ?>  
								
								<?php
								get_template_part( 'template-parts/content-posts' );
								?>

							<?php } ?>
						<?php } ?>	
						</span>		
						<?php the_posts_pagination();?>			

					</div>


				

				</div>

				
			</section>
			<!-- /Blog section EOF -->

		</main>	
	</div>
</div><!-- #primary -->
<?php wp_reset_postdata(); ?>





<?php

get_footer();
