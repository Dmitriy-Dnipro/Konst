
<div id="primary" class="content-area">
	<div id="content" class="site-content single-blog" role="main">
		<div class="container d-flex flex-column justify-content-center">
			<div class="col-lg-12">
					<!-- Breadscrumbs section -->
					<div class="breadscrumbs"> 
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						//echo do_shortcode('[yoast-breadcrumb]');
						?>
					</div>
					<!-- /Breadscrumbs section -->
			</div>
			<div class="col-lg-12">
				<?php 
					$cat = get_category_by_slug('blog-articles'); 

					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

					$args = array(
						'post_type' => 'post',
						'post_status'=>'publish',
						'posts_per_page' => 6, 
						'cat' => $cat->term_id,
						'paged' => $paged,
					);

					$the_query = new WP_Query($args);
					?> 

						<div class="item categories-blog">
							<?php $get_categories = get_categories(array('hide_empty' => 0, 'child_of' => $cat->term_id)); ?>
							<div class="categories-blog__list">
								<?php
								if ( $get_categories ) {
									foreach ( $get_categories as $cat ) { ?>
											<a href="<?= get_term_link($cat->term_id); ?>" class="categories-blog__item" id="category-<?= $cat->term_id; ?>"><?= $cat->name; ?></a>
									<?php } 
								}
								?>
								<div class="no-posts"></div>
							</div>
						</div>

						<?php wp_reset_postdata(); ?>



			</div>
			<div class="col-lg-8">
				<div class="title">
					<?= the_title(); ?>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-lg-12 row">
				<div class="col-lg-12">
					<nav id="nav-single" class="row"> 
						<div class="nav-previous col-lg-6" style="padding: 0"><?php previous_post_link( '<i class="fas fa-angle-left prev"></i> %link', 'Назад', true); ?></div>
						<div class="nav-next col-lg-6" style="padding: 0"><?php next_post_link ('%link <i class="fas fa-angle-right next"></i>',  'Вперед', true); ?></div>
					</nav> 
				</div>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->

