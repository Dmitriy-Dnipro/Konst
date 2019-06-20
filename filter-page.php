<?php
/**
* Template Name: Шаблон для страницы Фильтров
* Template Post Type: page
*
*/

get_header();
$calculator = get_field('calculator');
?>
<?php

$seo_text = get_field('seo_text');

global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

?>

<div id="primary" class="content-area filter-page">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Include top banner -->
			<?php include'template-parts/main-top-block/without-elements.php' ?>

			<!-- Include second menu for filters-->
			<?php include'template-parts/second-menu-block.php' ?>

			<!-- About section -->	
			<section class="about-block" id="about-block">
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

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- About section EOF -->	

			<!--  About second section -->
			<section class="services-block main-bg" id="services-block">
				<div class="container">
					
					<?php include'template-parts/about-section/about-with-images.php' ?>

				</div>
			</section>
			<!-- About second section EOF -->

			<!--  Technical characteristics section -->	
			<section class="characteristics-block" id="characteristics-block">
				<div class="container">

					<?php include'template-parts/technical-characteristics/filter-page-section.php' ?>

				</div>

				<div class="characteristics-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!--  Technical characteristics section EOF -->

			<!--  Feedback section section -->
			<section class="feedback-block" id="feedback-block">
				<div class="container">

					<?php include'template-parts/feedback/library-form.php' ?>

				</div>

				<div class="feedback-block__bg"></div>
				<div class="feedback-block__white-bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Feedback section section -->

			<!--  Application industries section -->	
			<section class="application-industries-block main-bg" id="application-industries-block">
				<div class="container">

					<?php include'template-parts/sliders/vertical-slider-staggered.php' ?>

				</div>
			</section>
			<!-- Application industries section EOF -->

			<!-- Truest section -->
			<section class="truest" id="truest-block">
				<div class="container">

					<?php include'template-parts/sliders/our-clients-block.php' ?>

					<div class="truest__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
					</div>

				</div>
			</section>
			<!-- Truest section EOF -->

			<!--  Services section -->	
			<section id="optional-equipment" class="services-block main-bg">
				<div class="container">

					<?php include'template-parts/services-block.php' ?>

				</div>
			</section>
			<!-- /Services section EOF -->

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


			<!--  Calculator section -->	
			<?php 
			// global $wp;  
			// $current_url = home_url(add_query_arg(array($_GET), $wp->request));
			// var_dump($current_url);
			if (is_page(110) || is_page(2975)) {
			?>
						<section id="calc-block" class="calculator-block"> 

							<div class="container">

								<div class="row "> 
									<div class="col-xl-8 col-lg-8 col-md-8 offset-md-4 col-12">

										<div id="calculator-block" class="calculator-block__text b-description_readmore js-description_readmore">
											<?= $calculator['text']; ?>
										</div>
									</div>
								</div>

								<div class="row align-items-center align-items-md-center">
									<div class="col-xl-4 col-lg-4 col-md-4 col-12">
										<div class="title-bl calculator-block__tit-padd">
											<div class="title-bl__title"><?= $calculator['title']; ?></div>
											<div class="title-bl__description"><?= $calculator['description']; ?></div>
										</div>
									</div>

									<div class="scene scene--card col-xl-8 col-lg-8 col-md-8 col-12">
										<div class="card">
											<div class="card__face card__face--front">

												<div class="calculator-block__img">
													<img src="<?= $calculator['image']['url']; ?>" alt="" class="img-fluid">
												</div>



												<div class="calculator-block__button" >
													<p><?= $calculator['button']['text']; ?></p>
													<span class="open-calc-button"><?= $calculator['button']['button_title']; ?></span>
													<svg width="37" height="43" viewBox="0 0 37 53" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M34.182 0H2.136C0.956 0 0 0.957 0 2.137V44.864C0 46.044 0.957 47.001 2.136 47.001H34.182C35.362 47.001 36.318 46.044 36.318 44.864V2.137C36.318 0.957 35.362 0 34.182 0ZM32.045 4.272V10.681H4.272V4.272H32.045ZM4.272 42.729V14.954H32.045V42.726H4.272V42.729Z" fill="#1423F0"/>
														<path d="M11.9112 16.844H7.4762C6.8862 16.844 6.4082 17.323 6.4082 17.912V22.35C6.4082 22.94 6.8872 23.418 7.4762 23.418H11.9112C12.5012 23.418 12.9792 22.939 12.9792 22.35V17.912C12.9802 17.321 12.5032 16.844 11.9112 16.844Z" fill="#1423F0"/>
														<path d="M20.375 16.844H15.941C15.351 16.844 14.873 17.323 14.873 17.912V22.35C14.873 22.94 15.351 23.418 15.941 23.418H20.375C20.965 23.418 21.443 22.939 21.443 22.35V17.912C21.444 17.321 20.965 16.844 20.375 16.844Z" fill="#1423F0"/>
														<path d="M28.8399 16.844H24.4049C23.8149 16.844 23.3379 17.323 23.3379 17.912V22.35C23.3379 22.94 23.8159 23.418 24.4049 23.418H28.8399C29.4299 23.418 29.9079 22.939 29.9079 22.35V17.912C29.9079 17.321 29.4299 16.844 28.8399 16.844Z" fill="#1423F0"/>
														<path d="M11.9112 25.5549H7.4762C6.8862 25.5549 6.4082 26.0329 6.4082 26.6219V31.0599C6.4082 31.6499 6.8872 32.1269 7.4762 32.1269H11.9112C12.5012 32.1269 12.9792 31.6489 12.9792 31.0599V26.6219C12.9802 26.0309 12.5032 25.5549 11.9112 25.5549Z" fill="#1423F0"/>
														<path d="M20.375 25.5549H15.941C15.351 25.5549 14.873 26.0329 14.873 26.6219V31.0599C14.873 31.6499 15.351 32.1269 15.941 32.1269H20.375C20.965 32.1269 21.443 31.6489 21.443 31.0599V26.6219C21.444 26.0309 20.965 25.5549 20.375 25.5549Z" fill="#1423F0"/>
														<path d="M11.9112 34.2661H7.4762C6.8862 34.2661 6.4082 34.7441 6.4082 35.3321V39.7701C6.4082 40.3621 6.8872 40.8381 7.4762 40.8381H11.9112C12.5012 40.8381 12.9792 40.3591 12.9792 39.7701V35.3321C12.9802 34.7421 12.5032 34.2661 11.9112 34.2661Z" fill="#1423F0"/>
														<path d="M20.375 34.2661H15.941C15.351 34.2661 14.873 34.7441 14.873 35.3321V39.7701C14.873 40.3621 15.351 40.8381 15.941 40.8381H20.375C20.965 40.8381 21.443 40.3591 21.443 39.7701V35.3321C21.444 34.7421 20.965 34.2661 20.375 34.2661Z" fill="#1423F0"/>
														<path d="M28.8399 25.5549H24.4049C23.8149 25.5549 23.3379 26.0329 23.3379 26.6219V39.7699C23.3379 40.3619 23.8159 40.8379 24.4049 40.8379H28.8399C29.4299 40.8379 29.9079 40.3589 29.9079 39.7699V26.6219C29.9079 26.0309 29.4299 25.5549 28.8399 25.5549Z" fill="#1423F0"/>
													</svg>
												</div>

											</div>
											<div class="card__face card__face--back">
												<?php include 'calculator/calculator-first.php'; ?>
											</div>
										</div>
									</div>
								</div>

								<?php include ('calculator/results.php'); ?>
							</div>



							<div class="calculator-block__bg">
								<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
								<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
								<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
							</div>
						</section>
			<?php } ?>
			<!-- /Calculator section EOF -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
