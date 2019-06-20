<?php
/**
* Template Name: Шаблон для страницы Блог
* Template Post Type: page
*
*/

get_header();
$lang = pll_current_language();
?>

<div id="primary" class="content-area blog-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	
			<?php include ('template-parts/top-banner-block.php'); ?>

			<!--  Blog section -->	
			<section class="blog-block">

				<div class="container">
					<?php
						if($lang == 'ru'){
							$cat = get_category_by_slug('blg-articles'); 
						}else if($lang == 'uk'){
							$cat = get_category_by_slug('blog-ua'); 
						}
						
					?>

					<?php
					// Protect against arbitrary paged values
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

<!---
					<?php
					$categories=get_categories(
						array( 'parent' => $cat->term_id )
					);
					?>
					<pre>
						<?php var_dump($categories); ?>
					</pre>
-->
					<div class="masonry">
						<div class="item categories-blog">
							<h1><?= get_the_title(); ?></h1>
							<div class="categories-blog__list">
								<div class="categories-blog__item">Наше хобби</div>
								<div class="categories-blog__item">Новости</div>
								<div class="categories-blog__item">Проекты</div>
								<div class="categories-blog__item">Категория4</div>
							</div>
						</div>
						<?php
						if ( $the_query-> have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
								<div class="item">
									<?php $id = get_the_ID(); ?>
									<a href=""><div style="background: url(<?= get_the_post_thumbnail_url( $id, 'thumbnail' ); ?>)no-repeat 50% / cover; width: 100%; height: 300px;"></div></a>
									<a href="#" class="title"><?php the_title(); ?></a>
									<p class="text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более</p> 
								</div>

							<?php endwhile; ?>
						<?php endif; ?>
						
						
					</div>
					<div class="pagination">
						<?php
						echo paginate_links( array(
							'format'  => 'page/%#%',
							'current' => $paged,
							'total'   => $the_query->max_num_pages,
							'mid_size'        => 2,
							'prev_text'       => __('<i class="fas fa-angle-left"></i>'),
							'next_text'       => __('<i class="fas fa-angle-right"></i>')
						) );
						?>
						<?php 
						the_posts_pagination();
						wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="calculator-block__bg">
					<img src="img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Blog section EOF -->

		</main>	
	</div>
</div><!-- #primary -->
<?php wp_reset_postdata(); ?>


<?php
get_footer();
