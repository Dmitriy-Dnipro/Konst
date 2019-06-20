<?php
/**
* Template Name: Шаблон для страницы Модульные компрессорные станции
* Template Post Type: page
*
*/

get_header();
?>
<?php

$seo_text = get_field('seo_text');

global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

?>

<div id="primary" class="content-area compressor-cart-second-page">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- About section -->	
			<section class="about-block main-bg-top" id="about-block">
				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include'template-parts/about-section/about-with-vertical-slider.php'; ?>

				</div>
			</section>
			<!-- About section EOF -->	

			<!-- Proposition timeline block -->
			<section class="proposition-timeline" id="proposition-timeline">

				<div class="container">

					<?php include'template-parts/work-stages-block.php' ?>
				
				</div>
			</section>
			<!-- Proposition timeline block EOF-->

			<!--  Application industries section -->	
			<section class="application-industries-block main-bg" id="application-industries-block">
				<div class="container">

					<?php include'template-parts/sliders/vertical-slider-staggered.php' ?>
					
				</div>
			</section>
			<!-- Application industries section EOF -->

			<!--  White feedback block section section -->
			<section class="category main-form" id="white-feedback-block">

				<div class="container">

					<?php include'template-parts/feedback/general-form.php' ?>

					<div class="truest__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
					</div>
				</div>
			</section>
			<!-- /White feedback block section section -->

			<!-- Seo-text section -->
			<section class="seo-text-block main-bg" id="seo-text-block">
				<div class="container">
					
					<?php include'template-parts/seo-text-section.php' ?>
					
				</div>
			</section>
			<!--/Seo-text section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
