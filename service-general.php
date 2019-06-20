<?php
/**
* Template Name: Шаблон для страницы Сервисы (Общий)
* Template Post Type: page
*
*/

get_header();

$advantages = get_field('advantages');
?>

<div id="primary" class="content-area service-general">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Include top banner -->
			<?php include'template-parts/top-banner-block.php' ?>

			<!-- About section -->	
			<section class="about-block main-bg-top" id="service-block">
				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include'template-parts/about-section/about-with-horizontal-slider-second.php' ?> 

				</div>
			</section>
			<!-- About section EOF -->	
			
			<!-- Service pages block -->
			<section class="service-pages" id="services-pages">

				<div class="container">

					<?php include'template-parts/services-pages-second-block.php' ?>
					
					
				</div>
				<div class="truest__bg"> 
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob"> 
				</div>
			</section>
			<!-- Service pages block EOF-->

			<!--  Advantages section -->	
			<section class="advantages-block main-bg-top" id="advantages">

				<div class="container">

					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl advantages-block__tit-padd">
								<div class="title-bl__title"><?= $advantages['title']; ?></div>
								<div class="title-bl__description"><?= $advantages['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 advantages-block__slider">
							<div class="slider-for">
								<?php foreach( $advantages['slider'] as $item) {?>
									<div class="item">
										<div class="img" style="background: url('<?= (!empty($item['image']['url'])) ? $item['image']['url']: get_template_directory_uri() . '/img/home/no-image.png'; ?>') no-repeat 50% 50% / cover;"></div>
										<div class="slider-bg"></div>
										<div class="slider-text">
											<?= $item['title']; ?>
										</div>
									</div>
								<?php } ?>
							</div>


							<div class="slider-nav">


								<?php foreach ($advantages['slider'] as $item) { ?>

									<div class="item">
										<div class="img" style="background: url('<?= (!empty($item['image']['url'])) ? $item['image']['url']: get_template_directory_uri() . '/img/home/no-image.png'; ?>')no-repeat 50% 50% / cover">
											<div class="slider-bg"></div>
										</div>
										<div class="slider-text">
											<?= $item['title']; ?>
										</div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>

				</div>

			</section>
			<!--  Advantages section -->


			<section class="feedback-m-block" id="service-block">
				<div class="container">
					<?php include'template-parts/feedback/general-form.php' ?> 
				</div>
				<div class="truest__bg"> 
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob"> 
				</div>
			</section>

			<!--  White feedback block section section -->
			<section class="seo-text-block main-bg" id="seo-text-block">

				<div class="container">

					<?php include'template-parts/seo-text-section.php' ?>

				</div>
			</section>
			<!-- /White feedback block section section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
