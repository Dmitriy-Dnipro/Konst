<?php
/**
* Template Name: Шаблон страницы Детекция
* Template Post Type: page
*
*/

get_header();
?>
<?php

?>
<div id="primary" class="content-area audit-detecting-page ">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content" id="audit-detecting-page">	

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

					<?php include'template-parts/text-section.php';  ?>

				</div>
			</section>
			<!-- About section EOF -->		

			<!-- Text with file block -->
			<section class="about-block third" id="services-tabs-block">

				<div class="container">
					<?php include'template-parts/about-section/about-with-video-block-second.php' ?>

					<div class="row">
						<div class="offset-md-4 col-lg-8 col-12">
							<?php $file = get_field('only_file'); ?>
							<?php if (!empty($file)) {?>
								<div class="file">
									<a class="main-form__inp-submit main-form__inp-submit_p file_button" href="<?= $file['url']; ?>" target="_blank">
										<span>Download</span> 
										<span>
											<svg width="24" height="31" viewBox="0 0 24 31" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.3991 13.2931C17.4752 13.183 17.5048 13.1124 17.5166 13.0745C17.4537 13.0402 17.3705 12.9707 16.9163 12.9707C16.6584 12.9707 16.3345 12.9823 15.9912 13.0276C16.4075 13.3579 16.5092 13.5249 16.7815 13.5249C16.9005 13.5254 17.2417 13.5202 17.3991 13.2931Z" fill="white"/>
												<path d="M7.67607 17.1763C7.75218 17.1516 8.19661 16.9426 9.02467 15.3672C7.9325 15.9995 7.48808 16.5192 7.45641 16.812C7.45079 16.8604 7.437 16.9878 7.67607 17.1763Z" fill="white"/>
												<path d="M23.4935 20.5254V7.35651C23.4935 6.95337 23.4465 6.65496 23.2125 6.4134L17.2679 0.289461C17.0897 0.105785 16.8424 0 16.5896 0H1.76405C1.1582 0 0.505859 0.482084 0.505859 1.53993V20.5254H23.4935ZM16.3418 1.78466C16.3418 1.54361 16.6243 1.42309 16.7898 1.59361L21.9467 6.90653C22.1122 7.07705 21.9952 7.36809 21.7613 7.36809H16.3418V1.78466ZM6.60116 16.7124C6.69413 15.8556 7.72245 14.9588 9.65852 14.0452C10.4268 12.3105 11.1578 10.1732 11.5936 8.38752C11.0838 7.24441 10.5882 5.76132 10.9494 4.89136C11.0761 4.58664 11.2339 4.35296 11.5287 4.25191C11.6452 4.21192 11.9394 4.16139 12.0477 4.16139C12.3052 4.16139 12.5315 4.50296 12.6919 4.71347C12.8426 4.91136 13.1843 5.33081 12.5013 8.29331C13.1899 9.75851 14.1656 11.2511 15.1005 12.2731C15.7702 12.1484 16.3464 12.0847 16.8159 12.0847C17.6158 12.0847 18.1006 12.2768 18.2983 12.6726C18.4618 12.9999 18.3948 13.3826 18.0991 13.8094C17.8145 14.2194 17.4222 14.4362 16.965 14.4362C16.3438 14.4362 15.6205 14.032 14.8139 13.2336C13.3646 13.5457 11.6717 14.1025 10.3042 14.7188C9.87716 15.6525 9.46798 16.4045 9.08689 16.9561C8.56431 17.7129 8.11273 18.065 7.66575 18.065C7.48798 18.065 7.31736 18.0055 7.17177 17.8934C6.63896 17.4813 6.56745 17.024 6.60116 16.7124Z" fill="white"/>
												<path d="M8.02739 24.1346C7.95485 24.0315 7.8537 23.9452 7.72344 23.8757C7.59317 23.8062 7.42051 23.7715 7.20646 23.7715H6.57812V25.8725H7.34643C7.4486 25.8725 7.54975 25.8546 7.65039 25.8183C7.75051 25.7825 7.84246 25.7235 7.92624 25.642C8.01002 25.5604 8.07745 25.4467 8.12854 25.3004C8.17962 25.1541 8.20516 24.973 8.20516 24.7572C8.20516 24.6709 8.19341 24.5709 8.17043 24.4588C8.14693 24.3462 8.09942 24.2383 8.02739 24.1346Z" fill="white"/>
												<path d="M12.1755 9.56445C11.8098 10.8665 11.3281 12.2723 10.8096 13.5454C11.8772 13.1186 13.0378 12.746 14.128 12.4823C13.4383 11.657 12.7492 10.6265 12.1755 9.56445Z" fill="white"/>
												<path d="M0.505859 21.5781V29.4726C0.505859 30.0036 1.12908 30.5251 1.76405 30.5251H22.2353C22.8703 30.5251 23.4935 30.0036 23.4935 29.4726V21.5781H0.505859ZM8.88154 25.488C8.79316 25.7064 8.66954 25.8901 8.51118 26.0385C8.35282 26.1869 8.16177 26.3022 7.93853 26.3837C7.7153 26.4653 7.46805 26.5058 7.19833 26.5058H6.57664V28.42H5.73836V23.117H7.21876C7.4374 23.117 7.654 23.1528 7.86804 23.2249C8.08208 23.297 8.27415 23.4049 8.44426 23.5486C8.61437 23.6923 8.75179 23.8665 8.85651 24.0701C8.96123 24.2738 9.01384 24.5027 9.01384 24.7575C9.01435 25.0264 8.96991 25.2696 8.88154 25.488ZM14.0185 26.74C13.9276 27.0495 13.8126 27.3084 13.6727 27.5174C13.5327 27.7263 13.3759 27.8905 13.2012 28.0105C13.0265 28.1305 12.8579 28.22 12.6949 28.2805C12.532 28.3405 12.3828 28.3789 12.248 28.3958C12.1131 28.4115 12.013 28.42 11.9476 28.42H9.99925V23.117H11.5496C11.9828 23.117 12.3634 23.1881 12.6914 23.3291C13.0193 23.4702 13.2921 23.6591 13.5087 23.8938C13.7253 24.1286 13.8867 24.3964 13.994 24.6959C14.1008 24.9954 14.1544 25.3038 14.1544 25.6206C14.1549 26.0574 14.1094 26.4306 14.0185 26.74ZM18.5895 23.7717H16.2217V25.4411H18.3729V26.0311H16.2217V28.42H15.3697V23.117H18.5895V23.7717Z" fill="white"/>
												<path d="M12.9017 24.3583C12.7551 24.183 12.5558 24.0415 12.3045 23.9336C12.0532 23.8257 11.7273 23.7715 11.3268 23.7715H10.8379V27.7865H11.669C12.2371 27.7865 12.6468 27.5996 12.8981 27.2255C13.1494 26.8513 13.2751 26.3092 13.2751 25.5993C13.2751 25.3787 13.2496 25.1603 13.1985 24.9446C13.1469 24.7288 13.0483 24.5335 12.9017 24.3583Z" fill="white"/>
												<path d="M11.8646 5.1114C11.8145 5.12877 11.1852 6.03645 11.9136 6.8046C12.3984 5.69107 11.8866 5.10403 11.8646 5.1114Z" fill="white"/>
											</svg>
										</span>
									</a> 
									<span><?= $file['title']; ?></span>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="characteristics-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- Text with file block EOF-->	

			<!--  Feedback section section -->
			<section class="feedback-block">
				<div class="container">

					<?php include ('template-parts/feedback/library-form.php'); ?>
				</div>

				<div class="feedback-block__bg"></div>
			</section>
			<!-- /Feedback section section -->	

			<!-- Text with file block -->
			<section class="about-block second main-bg hide-block__calc" >

				<div class="container">
					<?php // include'template-parts/calc-second-block.php' ?>

					<?php include'calculator-second/index.php' ?>
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
