<?php
/**
* Template Name: Home Page
* Template Post Type: page
*
*/

get_header();
?>
<?php

$top_banner = get_field('main_categories');
$about_us_block = get_field('about_us_block');
$work_way = get_field('work_way');
$we_numbers = get_field('we_numbers');
$we_values = get_field('we_values');
$truest = get_field('truest');
$feedback_block = get_field('feedback_block');

?>
	<div id="primary" class="content-area">
		<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content" id="front-page">	

			<!-- Top bunner section -->	
			<section class="main-block">

				<div class="container">

					<?php include'template-parts/main-top-block/5-elements.php' ?>

				</div>
			</section>		
			<!-- Top bunner section EOF -->	

			<!-- About section -->	
			<section class="about-block" id="about-block">

				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl about-block__tit-padd">
								<h2 class="title-bl__title"><?= (!empty($about_us_block['title'])) ? $about_us_block['title'] : ''; ?></h2>
								<div class="title-bl__description"><?= (!empty($about_us_block['description'])) ? $about_us_block['description'] : ''; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12">

							<div class="about-block__video" data-toggle="modal" data-target="#exampleModal">
								<img src="<?= (!empty($about_us_block['image'])) ? $about_us_block['image']['url'] : ''; ?>" alt="<?= $about_us_block['image']['url']; ?>" class="img-fluid" />
							</div>

						</div>
						<div class="col-xl-8 offset-xl-4 col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">

							<?php if (!empty($about_us_block['text'])) { ?>
							<div id="about-us" class="about-block__text b-description_readmore js-description_readmore">
								<?= $about_us_block['text']; ?>
							</div>
							<?php } ?>
						</div>
					</div>

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- About section EOF -->	

			<!-- Work-way section -->	
			<section class="work-way main-bg">

				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl work-way__tit-padd">
								<h2 class="title-bl__title"><?= $work_way['title']; ?></h2>
								<div class="title-bl__description"><?= $work_way['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12">

							<div class="work-way__slider-wrap">

								<div class="work-way__slider">
									<?php
									$i = 0;
									if (!empty($work_way['categories_slider'])) {
									?>
										<?php foreach($work_way['categories_slider'] as $category) { ?>
											<?php $i ++; ?>
											<div class="work-way__slider-item">
												<a href="<?= get_permalink($category->ID); ?>">
													<div class="work-way__slider-item-wrp">
														<div class="work-way__slider-numb"><?= ($i < 10) ? '0' . $i : $i; ?></div>
														<img src="<?= get_the_post_thumbnail_url( $category->ID, 'large' ); ?>" alt="<?= $category->post_title; ?>" />
														<div class="work-way__slider-bg"></div>
													</div>
												</a>
											</div>
										<?php } ?>
										<?php 
										unset($i); 
										unset($category);
										unset($cat);
										unset($image);
										?>
									<?php } ?>
								</div>

								<div class="work-way__slider-nav">
									<?php
									$i = 0;
									if (!empty($work_way['categories_slider'])) {
									?>
										<?php foreach($work_way['categories_slider'] as $category) { ?>
										<?php 
										$i ++;
										$cat = get_category_by_slug($category->post_name);
										$image = get_field('image_block', $cat);
										?>
										<div class="work-way__slider-nav-item">
											<div class="work-way__slider-nav-wrp">
												<div class="work-way__slider-nav-numb"><?= ($i < 10) ? '0' . $i : $i;?></div>
												<img src="<?= get_the_post_thumbnail_url( $category->ID, 'large' ); ?>" alt="<?= $category->post_title; ?>" />
												<div class="work-way__slider-nav-bg"></div>
												<!-- <div class="work-way__slider-nav-blur">
													<img src="<?= get_template_directory_uri(); ?>/img/home/slider-nav-shadow.png" alt="Slider shadow" />
												</div> -->
											</div>
										</div>
										<?php } ?>
										<?php 
										unset($i); 
										unset($category);
										unset($cat);
										unset($image);
										?>
									<?php } ?>
								</div>

								<div class="work-way__links-wrp">

									<?php
									$i = 0;
									if (!empty($work_way['categories_slider'])) {
									?>

										<?php foreach($work_way['categories_slider'] as $category) { ?>
										<?php 
										$i ++;
										?>
											<a href="<?= get_page_link( $category->ID ) ?>" class="work-way__link-item active">
												<div class="work-way__link-text">
													<?= ($i < 10) ? '0' . $i: $i; ?> <?= trim($category->post_title); ?>
												</div>
											</a>
										<?php } ?>
										<?php 
										unset($i); 
										unset($category);
										?>
									<?php } ?>

								</div>

								<!-- <div class="work-way__slider-blur-bg">
									<img src="<?= get_template_directory_uri(); ?>/img/home/blur-image.png" alt="" class="desc" />
									<img src="<?= get_template_directory_uri(); ?>/img/home/blur-image-t.png" alt="" class="tab" />
								</div> -->

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- Work-way section EOF -->	

			<!-- We numbers section -->
			<section class="we-numbers" id="we-numbers">

				<div class="container">

					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl we-numbers__tit-padd">
								<h2 class="title-bl__title"><?= $we_numbers['title']; ?></h2>
								<div class="title-bl__description"><?= $we_numbers['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 we-numbers__item-padd">
							<div class="row">
								<?php $i = 1; ?>
								<?php foreach($we_numbers['counters'] as $item) { ?>
									<?php if($i % 3 == 0) { ?>
									<div class="col-lg-12  we-numbers__padd">
									<?php } else { ?>
									<div class="col-lg-6 col-md-12  we-numbers__padd">
									<?php } ?>
										<div class="we-numbers__desc"><?= $item['top_text']; ?></div>
										<div class="we-numbers__title"><span class="counter" data-count="<?= $item['number']; ?>">0</span> <?= $item['number_text']; ?></div>
										<div class="we-numbers__txt">
											<?= $item['bottom_text']; ?> 
										</div>
									</div>
									<?php $i++; ?>
								<?php } ?>
								<?php
								unset($i);
								unset($item);
								?>
							</div>

						</div>
					</div>

				</div>

				<div class="we-numbers__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- We numbers section EOF -->

			<!-- We values section -->
			<section class="we-values main-bg">

				<div class="container">
					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl we-values__tit-padd">
								<h2 class="title-bl__title"><?= $we_values['title']; ?></h2>
								<div class="title-bl__description"><?= $we_values['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12">
							<div class="slider">
								<?php foreach($we_values['values'] as $item) { ?>
								    <div class="row align-items-center we-values__w-item">
										<div class="col-lg-7 col-md-7 col-7">
											<div class="we-values__item">
												<h3 class="we-values__title"><?= $item['title']; ?></h3>
												<div class="we-values__txt"><?= $item['text']; ?></div>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-5">
											<div class="we-values__img">
												<img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['alt']; ?>" class="img-fluid">
												<div class="we-values__img-bg"></div>
											</div>
										</div>
									</div>
								<?php } ?>
								<?php
								unset($item);
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- We values section EOF -->

			<!-- Truest section -->
			<section class="truest">
 
				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl truest__tit-padd">
								<h2 class="title-bl__title"><?= $truest['title']; ?></h2>
								<div class="title-bl__description"><?= $truest['description']; ?></div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12">

							<div class="partner-slider swiper-container">
								<div class="swiper-wrapper">
									<?php foreach($truest['images_block'] as $image) {?>
									<div class="swiper-slide">
										<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
									</div>
									<?php } ?>
									<?php
									unset($image);
									?>
								</div>

								<!-- Add Pagination	<div class="swiper-pagination"></div> -->

								<!-- Add Arrows -->

								<div class="swiper-button-prev">
									<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7 1L1 7.5L7 14" stroke="#1423F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>			
								</div>
								<div class="swiper-button-next">
									<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 14L7 7.5L1 1" stroke="#1423F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>		
								</div>

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
			<!-- Truest section EOF -->

			<!--  Reviews section section -->
			<?php $testimonials = get_field('testimonials'); ?>
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

									<?php unset($testimonial_position); ?>
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
						<?php wp_reset_query(); wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- /Reviews section section -->

			<!-- Main form section -->
			<!--<section class="main-form main-bg">

				<div class="container">

					<div class="row align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-5 col-12">

							<div class="title-bl main-form__tit-padd">
								<h2 class="title-bl__title"><?= $feedback_block['title']; ?></h2>
								<div class="title-bl__description"><?= $feedback_block['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-7 col-12">

							<div class="main-form__wrp">
								<?=  do_shortcode($feedback_block['form_shortcode']); ?>
							</div>

						</div>
					</div>
				</div>
			</section>-->
			<!-- Main form section EOF -->


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



	<!-- Modal block video -->
	<?php if (!empty($about_us_block['video'])) { ?>
		<div class="about-video modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="43" height="43" rx="5" fill="url(#paint0_linear)"/>
								<path d="M15 15L27.8619 27.9326" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.1387 28L28.0006 15.0674" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<defs>
									<linearGradient id="paint0_linear" x1="0.447916" y1="5.25437" x2="44.0927" y2="7.92483" gradientUnits="userSpaceOnUse">
										<stop stop-color="#263EBA"/>
										<stop offset="1" stop-color="#2D9CDB"/>
									</linearGradient>
								</defs>
							</svg>			
						</button>
					</div>

					<div class="modal-body">

						<!-- <video src="img/home/Nebula Space Interstellar Background.mp4"></video> -->

						<video width="100%" height="100%"  controls="controls" poster="<?= (!empty($about_us_block['image'])) ? $about_us_block['image']['url'] : ''; ?>">
							<source src="<?= $about_us_block['video']; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
						</video>

					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- Modal block video EOF -->


<?php
get_footer();
