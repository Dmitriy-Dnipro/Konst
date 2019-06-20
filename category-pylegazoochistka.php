<?php
/**
* Template Name: Шаблон для Пылегазоочистка и аспирация
* Template Post Type: page
*
*/

get_header();
?>
<?php

$slider_shortcode = get_field('slider_shortcode');
$calculator = get_field('calculator');
$services = get_field('services');
$advantages = get_field('advantages');
$library = get_field('library');
$testimonials = get_field('testimonials');
$feedback_block = get_field('feedback_block');
$seo_text = get_field('seo_text');

?>

<?= do_shortcode($testimonials['shortcode_testimonials']); ?>

<div id="primary" class="content-area pylegaz-category">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<section class="main-block">

				<div class="container">
					<?php include'template-parts/main-top-block/8-elements.php' ?>
				</div>
			</section>	

			<!--  Calculator section -->	
			<section id="calc-block" class="calculator-block"> 

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
			<!-- /Calculator section EOF -->

			<!--  Services section -->	
			<section class="services-block main-bg">

				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl services-block__tit-padd">
								<div class="title-bl__title"><?= $services['title']; ?></div>
								<div class="title-bl__description"><?= $services['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 services-block__content">

							<div class="row">
								
								<?php foreach ($services['services_list'] as $item) { ?>
									<div class="services-block__item col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
										<a href="<?= $item['link']; ?>">
											<div class="img" style="background: url('<?= $item['image']['url']; ?>') no-repeat 50% / cover;">
												<p class="text"><?= $item['title']; ?></p>
												<div class="services-block__item-bg"></div>
											</div>
										</a>
									</div>
								<?php } ?>

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- /Services section EOF -->

			<!--  Advantages section -->	
			<section class="advantages-block" id="advantages">

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

				<div class="advantages-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!--  Advantages section -->

			<!--  Feedback section section -->
			<section class="feedback-block" id="fb-block">
				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl services-block__tit-padd">
								<div class="title-bl__title"><?= $library['title']; ?></div>
							</div>

						</div>
						<div class="right-content col-xl-8 col-lg-8 col-md-8 col-12">
							<div class="text-block row">
								<div class="form-title col-lg-10"><?= $library['text']; ?></div>
								<div class="col-lg-10">
									<ol>
										<?php $i = 0; ?>
										<?php foreach ($library['list'] as $item) { ?>
											<?php $i++; ?>
											<li><?= ($i < 10) ? '0'.$i : $i; ?>. <?= $item['title']; ?></li>
										<?php } ?>
										<?php unset($i); unset($item); ?>
									</ol>
								</div>
								<div class="col-lg-10">
									<?= do_shortcode($library['shortcode_library']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="feedback-block__bg"></div>
				<div class="feedback-block__white-bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Feedback section section -->

			<!--  Reviews section section -->
			<section class="reviews-block main-bg">

				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl we-values__tit-padd ">
								<div class="title-bl__title"><?= $testimonials['title']; ?></div>
								<div class="title-bl__description"><?= $testimonials['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 reviews-block__slider">

							<?php
							$args = array(
								'post_type' => array (
									'articles' => 'articles',
								),
								'tax_query' => array(
									array(
										'taxonomy' => 'articles_category',
										'field' => 'slug',
										'post_count' => 5,
										'terms' => $testimonials['category_slug']
									)
								)
							);

							$loop = new WP_Query( $args );
							?>

							<div class="slider-for">

								<?php foreach ($loop->posts as $post) { ?>
									<?php $testimonial_position = get_field('reviews_company_name', $post); ?>
									<?php $testimonial_image = get_field('review_image', $post); ?>

									<div class="item">
										<div class="img"><div style='background: url("<?= get_the_post_thumbnail_url($post->ID, 'large'); ?>") no-repeat 50% / contain; width:100%; height: 100%; position: relative; margin: auto'></div></div>
										<div class="review-info">
											<div class="title"><?= $testimonial_position; ?></div>
											<div class="review"><?= $post->post_content; ?></div>
											<a data-toggle="modal" data-target="#reviewModal" id="review-readmore" href="#" data-img="<?= $testimonial_image['url']; ?>"><?= $testimonials['button_name']; ?></a>
										</div>
									</div>

									
								<?php } ?>
							</div>

							<div class="slider-nav">
								<?php foreach ($loop->posts as $post) { ?>
									<?php $testimonial_position = get_field('reviews_company_name', $post); ?>
									<div class="row item">
										<div class="img"><div style='background: url("<?= get_the_post_thumbnail_url($post->ID, 'large'); ?>") no-repeat 50% / contain; width:100%; height: 100%; position: relative; margin: auto'></div></div>
										<div class="review-info">
											<!--<div class="title"><?= $post->post_title; ?></div>-->
											<div class="title"><?= $testimonial_position; ?></div>
										</div>
									</div>
								<?php } ?>
							</div>

						</div>
					</div>
					<!-- <div class="we-values__bg">
						<img src="build/images/home/we-values.svg" alt="" >
					</div> -->
				</div>
			</section>
			<!-- /Reviews section section -->

			<!--  Reviews section section -->
			<section class="category main-form">

				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl truest__tit-padd">
								<div class="title-bl__title"><?= $feedback_block['title']; ?></div>
								<div class="title-bl__description"><?= $feedback_block['description']; ?></div>
							</div>
						</div>

						<div class="col-xl-8 col-lg-8 col-md-8 col-12">

							<div class="main-form__wrp">
								<?=  do_shortcode($feedback_block['form_shortcode']);  ?>
							</div>

						</div>

					</div>

					<div class="truest__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
					</div>
				</div>
			</section>
			<!-- /Reviews section section -->

			<!-- Seo-text section -->
			<section class="seo-text-block main-bg">

				<div class="container">

					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl advantages-block__tit-padd">
								<div class="title-bl__title"><?= $seo_text['title']; ?></div>
								<div class="title-bl__description"><?= $seo_text['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 advantages-block__slider">
							<h1><?= $seo_text['text_title']; ?></h1>

							<div id="seo-text" class="calculator-block__text b-description_readmore js-description_readmore">
								<?= $seo_text['text']; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/Seo-text section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
