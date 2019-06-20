<?php
/**
* Template Name: Шаблон страницы Анализ эффективности
* Template Post Type: page
*
*/

get_header();
?>
<?php

?>
<div id="primary" class="content-area audit-analiz-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content" id="audit-page">	

			<!-- Top banner section -->	
			<?php include ('template-parts/top-banner-block.php'); ?>
			<!-- Top banner section EOF -->	

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

					<?php include'template-parts/about-section/about-with-vertical-slider.php' ?>

				</div>
			</section>
			<!-- About section EOF -->		

			<!-- Text with file block -->
			<section class="monitoring-block" id="services-tabs-block">

				<div class="container">
					<?php include'template-parts/monitoring-section.php' ?>
				</div>
				<div class="characteristics-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- Text with file block EOF-->	

			<!--  Feedback section section -->
			<section class="feedback-block second">
				<div class="container">

					<? include ('template-parts/feedback/library-form.php'); ?>
				</div>

				<div class="feedback-block__bg"></div>
			</section>
			<!-- /Feedback section section -->	

				<!-- Text with file block -->
			<section class="monitoring-block third main-bg" id="services-tabs-block">
				<div class="truest__bg top">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second-form.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second-form.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg-form.svg" alt="" class="mob">
				</div>

				<div class="container">
					<?php include'template-parts/about-section/about-with-images.php' ?>
				</div>
			</section>
			<!-- Text with file block EOF-->	
			

			<!--  White feedback block section section -->
			<section class="category main-form main-bg-top" id="white-feedback-block">

				<div class="container">

					<?php include('template-parts/feedback/general-form.php') ?>
				</div>
				<div class="truest__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
				</div>
				
			</section>
			<!-- /White feedback block section section -->
		</main>	
	</div>
</div><!-- #primary -->


<?php
get_footer();
