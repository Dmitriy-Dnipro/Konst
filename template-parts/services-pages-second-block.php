<?php
$work_way = get_field('work_way');
?>

<?php if (!empty($work_way['title']) || !empty($work_way['description']) ) {?>

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
												<div class="work-way__slider-nav-blur">
													<img src="<?= get_template_directory_uri(); ?>/img/home/slider-nav-shadow.png" alt="Slider shadow" />
												</div>
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

								<div class="work-way__slider-blur-bg">
									<img src="<?= get_template_directory_uri(); ?>/img/home/blur-image.png" alt="" class="desc" />
									<img src="<?= get_template_directory_uri(); ?>/img/home/blur-image-t.png" alt="" class="tab" />
								</div>

							</div>

						</div>
					</div>

	<?php } ?>