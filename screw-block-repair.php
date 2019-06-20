<?php
/**
* Template Name: Шаблон для страницы Ремонт и восстановление винтовых блоков
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area screw-block-repair">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content screw-block-repair">	

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

					<?php include'template-parts/about-section/about-with-right-images.php' ?> 

				</div>
			</section>
			<!-- About section EOF -->	
  
			<!-- Services block -->
			<section class="services-tabs-block" id="services-tabs-block">

				<div class="container">

					<?php include'template-parts/tabs/4-vertical-tabs-block.php' ?>
	
				</div>
				<div class="truest__bg"> 
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob"> 
				</div>
			</section>
			<!-- Services block EOF-->

			<!---->
			<section class="relized-projects-block main-bg" id="relized-projects-block">
				<div class="container">

					<?php include'template-parts/text-section.php';  ?>
					
				</div>
			</section>
			<!---->

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

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
