<?php
/**
* Template Name: Шаблон для страницы Контактов
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area contacts-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!--  Calculator section -->	
			<section id="maps-block" class="about-block"> 

				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include ('template-parts/maps-block.php'); ?>

				</div>

				<div class="calculator-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Calculator section EOF -->

			<!--  Services section -->	
			<section class="services-block main-bg">
				<div class="container">
					<?php include ('template-parts/feedback/general-form.php'); ?>
				</div>
			</section>
			<!-- /Services section EOF -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
