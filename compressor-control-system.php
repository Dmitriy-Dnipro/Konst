<?php
/**
* Template Name: Шаблон для страницы Система управления компрессорами MS-CONNECT
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area compressor-control-system">

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

					<?php include'template-parts/about-section/about-with-vertical-slider.php' ?>

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

			<!--  Users benefits section -->	
			<section class="users-benefits main-bg" id="users-benefits">
				<div class="container">

					<?php include'template-parts/users-benefits.php' ?> 

				</div>
			</section>
			<!-- Users benefits section EOF -->

			<!-- Truest section -->
			<section class="program-features-block" id="program-features-block">
				<div class="container">

					<?php include'template-parts/program-features.php' ?>

					<div class="truest__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
					</div>

				</div>
			</section>
			<!-- Truest section EOF -->

			<!-- Seo-text section -->
			<section class="seo-text-block main-bg" id="seo-text-block">
				<div class="container">
					
					<?php include'template-parts/feedback/general-form.php' ?>
					
				</div>
			</section>
			<!--/Seo-text section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
