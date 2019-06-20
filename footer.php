<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package konstrack
 */

?>

<?php

$footer_first_block_title = get_field('footer_first_block_title', 'option');
$footer_second_block_title = get_field('footer_second_block_title', 'option');
$footer_third_block_title = get_field('footer_third_block_title', 'option');
$footer_contacts = get_field('contacts', 'option');
$footer_general_options = get_field('general_options', 'option');
$lang = pll_current_language();

?>

<footer class="footer">
	<div class="container">
		<div class="footer__wrp">
			<div class="row no-gutters">
				<div class="col-lg-3 col-md-3 col-6">
					<?php if($lang == 'ru'){?>
						<div class="footer__title"><?= $footer_first_block_title; ?></div>
					<?}else if($lang == 'en'){?>
						<div class="footer__title">Navigation</div>
					<?}else if($lang == 'uk'){?>
						<div class="footer__title">Навігація</div>
					<?}?>
					<?php 
					wp_nav_menu( array(
						'menu_class'=>'f_menu',
						'theme_location'=>'footer_first_menu',
						'after'=>''
					) );
					?>
				</div>
				<div class="col-lg-4 col-md-3 col-6">
					<?php if($lang == 'ru'){?>
						<div class="footer__title"><?= $footer_second_block_title; ?></div>
					<?}else if($lang == 'en'){?>
						<div class="footer__title">Сatalog</div>
					<?}else if($lang == 'uk'){?>
						<div class="footer__title">Каталог</div>
					<?}?>
					<?php 
					wp_nav_menu( array(
						'menu_class'=>'t_menu',
						'theme_location'=>'footer_second_menu',
						'after'=>''
					) );
					?>
				</div>
				<div class="col-lg-5 col-md-6 col-12 footer__padd">
					<?php if($lang == 'ru'){?>
						<div class="footer__title"><?= $footer_third_block_title; ?></div>
					<?}else if($lang == 'en'){?>
						<div class="footer__title">Contacts</div>
					<?}else if($lang == 'uk'){?>
						<div class="footer__title">Контакти</div>
					<?}?>
					<div class="row">
						<?php if($lang == 'ru'){?>
						<?php foreach($footer_contacts as $contact) {?>

							<div class="col-lg-6 col-md-6 col-6">
								<?=	(!empty($contact['city'])) ? '<p class="footer__itm footer__itm_p">' . $contact['city'] . '</p>' : '' ; ?>
								<?= (!empty($contact['address'])) ? '<p class="footer__itm footer__itm_p">' . $contact['address'] . '</p>' : '' ; ?>

								<?php
								if(!empty($contact['phones'])) {
									foreach ($contact['phones'] as $phone) { 
										if( !empty($phone['phone_without_formating']) ) { ?>
											<a href="tel:+38 044 223 60 88" class="footer__itm footer__itm_p">
												<?= (!empty($phone['phone'])) ? $phone['phone'] : $phone['phone_without_formating'] ;?>
											</a>
										<?php		}
									}
								}
								?>
								<?=
								(!empty($contact['mail'])) 
								? '<a href="mailto:' . $contact['mail'] . '" class="footer__itm footer__itm_p">' . $contact['mail'] . '</a>' 
								: '' ;
								?>
							</div>
						<?php } ?>
						<?}elseif($lang == 'en'){?>
							<div class="col-lg-6 col-md-6 col-6">
								<p class="footer__itm footer__itm_p">с. Kyiv</p>
								<p class="footer__itm footer__itm_p">Vatslava Havela Boulevard, 8, 212</p>
								<a href="tel:+38 056 790 17 75" class="footer__itm footer__itm_p">т. +38 056 790 17 75</a>
								<a href="tel:+38 063 335 25 16" class="footer__itm footer__itm_p">т. +38 063 3 352 516</a>
								<a href="mailto:office@konstrack.com" class="footer__itm footer__itm_p">office@konstrack.com</a> 
							</div>
							<div class="col-lg-6 col-md-6 col-6">
								<p class="footer__itm footer__itm_p">с. Dnieper</p>
								<p class="footer__itm footer__itm_p">вул. Березинська, 80</p>
								<a href="tel:+38 044 223 60 88" class="footer__itm footer__itm_p">т. +38 044 223 60 88</a>
								<a href="tel:+38 067 489 58 95" class="footer__itm footer__itm_p">т. +38 067 4 895 895</a>
								<a href="mailto:dnepr.sales@konstrack.com" class="footer__itm footer__itm_p">dnepr.sales@konstrack.com</a> 
							</div>
						<?}else if($lang == 'uk'){?>
							<div class="col-lg-6 col-md-6 col-6">
								<p class="footer__itm footer__itm_p">м. Київ</p>
								<p class="footer__itm footer__itm_p">бул. Вацлава Гавеля 8, оф. 212</p>
								<a href="tel:+380442236088" class="footer__itm footer__itm_p">т. +38 (044) 223 60 88</a>
								<a href="tel:+380633352516" class="footer__itm footer__itm_p">т. +38 (063) 335 25 16</a>
								<a href="mailto:office@konstrack.com" class="footer__itm footer__itm_p">office@konstrack.com</a> 
							</div>
							<div class="col-lg-6 col-md-6 col-6">
								<p class="footer__itm footer__itm_p">м. Днiпро</p>
								<p class="footer__itm footer__itm_p">вул. Березинська, 80</p>
								<a href="tel:+380567901775" class="footer__itm footer__itm_p">т. +38 (056) 790 17 75</a>
								<a href="tel:+380674895895" class="footer__itm footer__itm_p">т. +38 (067) 4 895 895</a>
								<a href="mailto:dnepr.sales@konstrack.com" class="footer__itm footer__itm_p">dnepr.sales@konstrack.com</a> 
							</div>
						<?}?>
					</div>

				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="social">
				<div class="social__item">
					<a href="<?= $footer_general_options['socials']['facebook']; ?>" target="_blank" class="social__link">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.4889 0H3.5C1.57778 0 0 1.57778 0 3.51111V10.5C0 12.4222 1.57778 14 3.5 14H10.4889C12.4222 14 14 12.4222 14 10.4889V3.51111C14 1.57778 12.4222 0 10.4889 0ZM8.87778 7H7.55556V11.3333H5.88889V7H5V5.22222H5.77778V4.46667C5.77778 3.75556 6.13333 2.63333 7.63333 2.63333H9V4.11111H8.03333C7.87778 4.11111 7.66667 4.21111 7.66667 4.55556V5.22222H9.03333L8.87778 7Z" fill="#274569"/>
						</svg>			
					</a>
					<a href="<?= $footer_general_options['socials']['facebook']; ?>" target="_blank" class="social__link">
						<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.36737 6.09989C8.08981 5.711 7.63462 5.45544 7.12391 5.45544C6.61321 5.45544 6.15801 5.711 5.88046 6.09989C5.70282 6.35544 5.5918 6.66656 5.5918 6.99989C5.5918 7.84433 6.28014 8.53322 7.12391 8.53322C7.96769 8.53322 8.65603 7.84433 8.65603 6.99989C8.65603 6.66656 8.54501 6.35544 8.36737 6.09989Z" fill="#274569"/>
							<path d="M9.33338 6.11108C9.44441 6.33331 9.51102 6.68886 9.51102 6.99997C9.51102 8.31108 8.4452 9.38886 7.12403 9.38886C5.80285 9.38886 4.73703 8.32219 4.73703 6.99997C4.73703 6.67775 4.80364 6.33331 4.91467 6.11108H3.57129V9.67775C3.57129 10.1444 3.98207 10.5555 4.44837 10.5555H9.79968C10.266 10.5555 10.6768 10.1444 10.6768 9.67775V6.11108H9.33338Z" fill="#274569"/>
							<path d="M10.2771 3.64441H8.98926V5.12219H10.4548V3.8333V3.6333L10.2771 3.64441Z" fill="#274569"/>
							<path d="M10.61 0H3.63772C1.70592 0 0.129395 1.57778 0.129395 3.51111V10.5C0.129395 12.4222 1.70592 14 3.63772 14H10.6211C12.5529 14 14.1294 12.4222 14.1294 10.4889V3.51111C14.1183 1.57778 12.5418 0 10.61 0ZM11.4537 6.1V9.67778C11.4537 10.6111 10.7321 11.3333 9.7995 11.3333H4.44819C3.5156 11.3333 2.79395 10.6111 2.79395 9.67778V6.1V4.32222C2.79395 3.38889 3.5156 2.66667 4.44819 2.66667H9.7995C10.7321 2.66667 11.4537 3.38889 11.4537 4.32222V6.1Z" fill="#274569"/>
						</svg>	
					</a>
				</div>
				<div class="social__item">
					<a target="_blank" href="https://ideadigital.agency/" class="idea">
						<span>CREATED BY:</span> IdeaDigital.Agency
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="#top" class="scrolltop"> 
	<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M14 7L7.5 1L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
	</svg>		
</a>

<div class="call-us">
	<img src="<?= get_template_directory_uri(); ?>/img/home/call-us.svg" alt="">
</div>		

<?php if (! is_front_page()) { ?>
	<a data-toggle="modal" data-target="#consultModal" href="#">
		<div class="consult">
			<?php if($lang == 'ru'){?>
				<span><?= $footer_general_options['consultaition_block']['title']; ?></span>
			<?}else if($lang == 'uk'){?>
				<span>Консультація інженера</span>
			<?}?>
		</div>
		<div class="consult-mob">
			<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M24.2741 22.1264L22.6447 17.3844C23.4284 15.8002 23.8429 14.0345 23.8457 12.2577C23.8504 9.19806 22.6666 6.30499 20.5122 4.11158C18.3575 1.91774 15.4862 0.682895 12.4273 0.63436C10.8247 0.608632 9.26963 0.903924 7.80289 1.51106C6.38821 2.09668 5.11956 2.94496 4.03221 4.03231C2.94482 5.11965 2.09653 6.38829 1.51095 7.80296C0.903809 9.26968 0.608839 10.8256 0.634196 12.4274C0.682639 15.4862 1.91754 18.3575 4.11139 20.5122C6.30055 22.6624 9.18618 23.8459 12.2393 23.8458C12.2452 23.8458 12.2515 23.8458 12.2575 23.8458C14.0343 23.843 15.8001 23.4285 17.3843 22.6448L22.1263 24.2742C22.3087 24.3369 22.4956 24.3675 22.6805 24.3675C23.1197 24.3675 23.5469 24.1949 23.8708 23.8709C24.3311 23.4106 24.4857 22.7421 24.2741 22.1264ZM22.8758 22.8759C22.8291 22.9226 22.7292 22.9934 22.5835 22.9434L17.5587 21.2168C17.4844 21.1913 17.4071 21.1786 17.3301 21.1786C17.2165 21.1786 17.1035 21.2061 17.001 21.2603C15.5488 22.0286 13.9078 22.4361 12.2553 22.4386C6.71331 22.4475 2.12898 17.9461 2.04118 12.4051C1.997 9.61722 3.05746 6.99709 5.02722 5.02735C6.99697 3.05766 9.61633 1.99739 12.405 2.04147C17.946 2.12932 22.4471 6.71135 22.4384 12.2555C22.4359 13.908 22.0284 15.5491 21.2602 17.0012C21.1692 17.1731 21.1535 17.375 21.2167 17.5589L22.9433 22.5837C22.9933 22.7292 22.9225 22.8293 22.8758 22.8759Z" fill="white"/>
				<path d="M12.125 17.4487C11.7569 17.4487 11.4044 17.7723 11.4214 18.1523C11.4384 18.5335 11.7305 18.8559 12.125 18.8559C12.493 18.8559 12.8456 18.5323 12.8286 18.1523C12.8115 17.7711 12.5194 17.4487 12.125 17.4487Z" fill="white"/>
				<path d="M12.1249 6.55151C10.1947 6.55151 8.62427 8.1219 8.62427 10.0521C8.62427 10.4407 8.93931 10.7557 9.32788 10.7557C9.71644 10.7557 10.0315 10.4407 10.0315 10.0521C10.0315 8.89786 10.9706 7.95872 12.1249 7.95872C13.2792 7.95872 14.2184 8.89786 14.2184 10.0521C14.2184 11.2064 13.2792 12.1456 12.1249 12.1456C11.7364 12.1456 11.4213 12.4606 11.4213 12.8492V15.7189C11.4213 16.1075 11.7364 16.4225 12.1249 16.4225C12.5135 16.4225 12.8285 16.1075 12.8285 15.7188V13.4817C14.4227 13.1551 15.6256 11.7415 15.6256 10.0521C15.6256 8.1219 14.0552 6.55151 12.1249 6.55151Z" fill="white"/>
			</svg>
		</div>
	</a>
<?php } ?>

<!-- Modal block video -->
<div class="about-video modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

				<img id="review-image-fbox" style="width: 100%; height: 100%" />

			</div>
		</div>
	</div>
</div>
<!-- Modal block video EOF -->

<!-- Consult modal -->
<div class="consult-modal modal animated fadeInLeft" id="consultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 2L13.8619 14.9326" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M1.13818 15L14.0001 2.06738" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

				</button>
			</div>

			<div class="modal-body">
				<?php if($lang == 'ru'){?>
					<?= do_shortcode($footer_general_options['consultaition_block']['form_shortcode']); ?>
				<?}else if($lang == 'uk'){?>
					<?= do_shortcode('[contact-form-7 id="3284" title="Консультация инженера_UA"]'); ?>
				<?}?>								
			</div>
			<div class="consult-inner">
				<?php if($lang == 'ru'){?>
					<span><?= $footer_general_options['consultaition_block']['title']; ?></span>
				<?}else if($lang == 'uk'){?>
					<span>Консультація інженера</span>
				<?}?>
			</div>
		</div>
	</div>
</div>
<!-- Consult modal EOF -->

<?php 

$form_shortcode = get_field('form_shortcode');

?>
<!-- Buy Parts Modal modal -->
<div class="buy-parts-modal modal animated fadeInDown" id="buyPartsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 2L13.8619 14.9326" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M1.13818 15L14.0001 2.06738" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

				</button>
			</div>

			<div class="modal-body">
				<?= do_shortcode($form_shortcode['shortcode']); ?>								
			</div>
		</div>
	</div>
</div>
<!-- Buy Parts Modal modal EOF -->


<?php $only_shortcode_form = get_field('only_shortcode_form'); ?>
<?php if(!empty($only_shortcode_form)) { ?>
	<!-- Buy Parts Modal Second modal -->
	<div class="buy-parts-modal modal animated fadeInDown" id="buyPartsModalSecond" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 2L13.8619 14.9326" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M1.13818 15L14.0001 2.06738" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

					</button>
				</div>

				<div class="modal-body">
					<?= do_shortcode($only_shortcode_form); ?>								
				</div>
			</div>
		</div>
	</div>
	<!-- Buy Parts Modal Second modal EOF -->
<?php } ?>


<?php 
$about_us_block = get_field('about_us_block');
?>

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

						<video width="100%" height="100%"  controls="controls" poster="">
							<source src="<?= $about_us_block['video']; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
						</video>

					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- Modal block video EOF -->




<!-- FOOTER EOF   -->

<div class="icon-load"></div>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
