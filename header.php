<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package konstrack
 */

?>
<?php 

$header_phones = get_field('header_phones', 'option');  
$header_menu = get_field('top_menu', 'option');
$logo = get_field('general_options', 'option');

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/favicon.ico">
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/favicon.ico" sizes="32x32">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="msapplication-TileColor" content="#00aba9">

	<?php wp_head(); ?>
	<?php if(is_page('otrasli-primeneniya')) echo '<meta name="robots" content="noindex, nofollow" />';	?>

	<!-- Google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-44489178-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!-- end googel analytics -->

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">
		<div id="top"></div>
		
		<header  class="header"> 

			<div class="container">
				<div class="header-wrp">
					<div class="header-wrp__item">
						<div class="desc" id="header_phones">
							<div class="logo"><a href="<?= home_url(); ?>"><img src="<?= $logo['logo']['url']; ?>" alt="<?= $logo['logo']['alt']; ?>" /></a></div>
							<div class="phones-hdr-btn">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.1199 0.880126C14.5333 0.293412 13.8266 0 13.0002 0H3.00002C2.1737 0 1.46697 0.293412 0.88014 0.880126C0.293417 1.46695 0 2.17363 0 2.99997V12.9999C0 13.8262 0.293417 14.5329 0.88014 15.1198C1.46697 15.7066 2.1737 16 3.00002 16H13.0001C13.8264 16 14.5332 15.7066 15.1198 15.1198C15.7066 14.5329 16 13.8262 16 12.9999V2.99997C16 2.17363 15.7065 1.46684 15.1199 0.880126ZM13.104 12.1449C12.9582 12.4643 12.6301 12.7422 12.1197 12.9784C11.6093 13.2147 11.156 13.3328 10.7601 13.3328C10.649 13.3328 10.5309 13.3242 10.4059 13.3068C10.2809 13.2894 10.1752 13.2721 10.0884 13.2547C10.0016 13.2374 9.88685 13.2062 9.74463 13.161C9.60215 13.1159 9.49963 13.0811 9.43735 13.0568C9.37467 13.0326 9.26017 12.9892 9.09362 12.9267C8.92691 12.864 8.82264 12.8258 8.78123 12.8122C7.64233 12.3953 6.5293 11.6437 5.44255 10.557C4.35579 9.46996 3.604 8.35721 3.1873 7.21851C3.17351 7.17681 3.13531 7.07261 3.07274 6.90602C3.01028 6.73946 2.96675 6.62479 2.94245 6.56237C2.9183 6.49987 2.88352 6.39742 2.83836 6.25516C2.79322 6.11276 2.76206 5.99827 2.74466 5.91136C2.72722 5.82468 2.71 5.71883 2.6926 5.5938C2.67523 5.46877 2.66658 5.35055 2.66658 5.23953C2.66658 4.84367 2.78469 4.39056 3.02086 3.88014C3.25699 3.36979 3.53472 3.04168 3.85422 2.89581C4.22229 2.74297 4.57299 2.66658 4.90636 2.66658C4.98265 2.66658 5.03829 2.67358 5.07291 2.68744C5.10768 2.70149 5.165 2.76384 5.2449 2.87498C5.32481 2.98611 5.41157 3.12669 5.5053 3.29685C5.59907 3.46706 5.69109 3.632 5.78135 3.79166C5.87162 3.95136 5.95845 4.10926 6.04182 4.26564C6.12515 4.42176 6.17722 4.52085 6.19802 4.56237C6.21885 4.59729 6.26402 4.66314 6.33341 4.76045C6.40281 4.85761 6.45502 4.94429 6.48968 5.02077C6.52434 5.09717 6.54175 5.1701 6.54175 5.23953C6.54175 5.34384 6.47049 5.47052 6.32816 5.6197C6.18576 5.76904 6.02949 5.90626 5.85932 6.03129C5.68915 6.15632 5.53296 6.29004 5.39059 6.43241C5.24833 6.57466 5.17708 6.69098 5.17708 6.78128C5.17708 6.82991 5.18923 6.88715 5.21356 6.95312C5.23786 7.01923 5.26045 7.07305 5.28128 7.11464C5.30211 7.15627 5.33517 7.21534 5.38023 7.29181C5.42536 7.36828 5.45495 7.41684 5.46874 7.43771C5.85064 8.1252 6.28996 8.71724 6.78638 9.21384C7.28302 9.71051 7.87496 10.1496 8.56257 10.5316C8.58326 10.5456 8.63197 10.575 8.70866 10.6202C8.78495 10.6652 8.84413 10.6982 8.88572 10.719C8.92743 10.7398 8.9811 10.7624 9.04717 10.7866C9.11325 10.8108 9.17053 10.823 9.21935 10.823C9.33012 10.823 9.48295 10.7085 9.6776 10.4794C9.872 10.25 10.07 10.0227 10.2714 9.79694C10.4727 9.57142 10.6358 9.45858 10.761 9.45858C10.8304 9.45858 10.9032 9.47583 10.9799 9.51053C11.0563 9.54523 11.1429 9.59744 11.2401 9.66683C11.3375 9.73652 11.4034 9.78147 11.4381 9.80259L11.99 10.1044C12.3581 10.2989 12.6654 10.4707 12.912 10.62C13.1586 10.7694 13.2923 10.8717 13.3132 10.9272C13.327 10.9619 13.3337 11.0176 13.3337 11.094C13.3335 11.4271 13.2571 11.7778 13.104 12.1449Z" fill="#1423F0"/>
								</svg>
							</div>
							<?php 
								$lang = pll_current_language();
							?>
							<?php if($lang == 'ru'){?>
							<div class="numbers "> 
								<?php if(!empty($header_phones)) {?>
									<?php foreach ($header_phones as $phone) { ?>
										<?php if (!empty($phone['phone-without-formating'])) { ?>
											<a href="tel:<?= $phone['phone-without-formating'] ; ?>" class="header-wrp__number"><?= (!empty($phone['city'])) ? $phone['city'] : ''; ?> <span><?= (!empty($phone['phone'])) ? $phone['phone'] : $phone['phone-without-formating'] ;?></span></a>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							</div>
							<?}else if($lang == 'uk'){?>
								<div class="numbers "> 
									<a href="tel:+380442236088" class="header-wrp__number">Київ <span>+38 044 223 60 88</span></a>
									<a href="tel:+380567901775" class="header-wrp__number">Днiпро <span>+38 056 790 17 75</span></a>
							</div>
							<?}?>
						</div>
						<div class="mob" id="header_phones_mob">
							<div class="logo"><a href="<?= home_url(); ?>"><img src="<?= $logo['logo']['url']; ?>" alt="<?= $logo['logo']['alt']; ?>" /></a></div>
							<div class="phones-hdr-btn">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.1199 0.880126C14.5333 0.293412 13.8266 0 13.0002 0H3.00002C2.1737 0 1.46697 0.293412 0.88014 0.880126C0.293417 1.46695 0 2.17363 0 2.99997V12.9999C0 13.8262 0.293417 14.5329 0.88014 15.1198C1.46697 15.7066 2.1737 16 3.00002 16H13.0001C13.8264 16 14.5332 15.7066 15.1198 15.1198C15.7066 14.5329 16 13.8262 16 12.9999V2.99997C16 2.17363 15.7065 1.46684 15.1199 0.880126ZM13.104 12.1449C12.9582 12.4643 12.6301 12.7422 12.1197 12.9784C11.6093 13.2147 11.156 13.3328 10.7601 13.3328C10.649 13.3328 10.5309 13.3242 10.4059 13.3068C10.2809 13.2894 10.1752 13.2721 10.0884 13.2547C10.0016 13.2374 9.88685 13.2062 9.74463 13.161C9.60215 13.1159 9.49963 13.0811 9.43735 13.0568C9.37467 13.0326 9.26017 12.9892 9.09362 12.9267C8.92691 12.864 8.82264 12.8258 8.78123 12.8122C7.64233 12.3953 6.5293 11.6437 5.44255 10.557C4.35579 9.46996 3.604 8.35721 3.1873 7.21851C3.17351 7.17681 3.13531 7.07261 3.07274 6.90602C3.01028 6.73946 2.96675 6.62479 2.94245 6.56237C2.9183 6.49987 2.88352 6.39742 2.83836 6.25516C2.79322 6.11276 2.76206 5.99827 2.74466 5.91136C2.72722 5.82468 2.71 5.71883 2.6926 5.5938C2.67523 5.46877 2.66658 5.35055 2.66658 5.23953C2.66658 4.84367 2.78469 4.39056 3.02086 3.88014C3.25699 3.36979 3.53472 3.04168 3.85422 2.89581C4.22229 2.74297 4.57299 2.66658 4.90636 2.66658C4.98265 2.66658 5.03829 2.67358 5.07291 2.68744C5.10768 2.70149 5.165 2.76384 5.2449 2.87498C5.32481 2.98611 5.41157 3.12669 5.5053 3.29685C5.59907 3.46706 5.69109 3.632 5.78135 3.79166C5.87162 3.95136 5.95845 4.10926 6.04182 4.26564C6.12515 4.42176 6.17722 4.52085 6.19802 4.56237C6.21885 4.59729 6.26402 4.66314 6.33341 4.76045C6.40281 4.85761 6.45502 4.94429 6.48968 5.02077C6.52434 5.09717 6.54175 5.1701 6.54175 5.23953C6.54175 5.34384 6.47049 5.47052 6.32816 5.6197C6.18576 5.76904 6.02949 5.90626 5.85932 6.03129C5.68915 6.15632 5.53296 6.29004 5.39059 6.43241C5.24833 6.57466 5.17708 6.69098 5.17708 6.78128C5.17708 6.82991 5.18923 6.88715 5.21356 6.95312C5.23786 7.01923 5.26045 7.07305 5.28128 7.11464C5.30211 7.15627 5.33517 7.21534 5.38023 7.29181C5.42536 7.36828 5.45495 7.41684 5.46874 7.43771C5.85064 8.1252 6.28996 8.71724 6.78638 9.21384C7.28302 9.71051 7.87496 10.1496 8.56257 10.5316C8.58326 10.5456 8.63197 10.575 8.70866 10.6202C8.78495 10.6652 8.84413 10.6982 8.88572 10.719C8.92743 10.7398 8.9811 10.7624 9.04717 10.7866C9.11325 10.8108 9.17053 10.823 9.21935 10.823C9.33012 10.823 9.48295 10.7085 9.6776 10.4794C9.872 10.25 10.07 10.0227 10.2714 9.79694C10.4727 9.57142 10.6358 9.45858 10.761 9.45858C10.8304 9.45858 10.9032 9.47583 10.9799 9.51053C11.0563 9.54523 11.1429 9.59744 11.2401 9.66683C11.3375 9.73652 11.4034 9.78147 11.4381 9.80259L11.99 10.1044C12.3581 10.2989 12.6654 10.4707 12.912 10.62C13.1586 10.7694 13.2923 10.8717 13.3132 10.9272C13.327 10.9619 13.3337 11.0176 13.3337 11.094C13.3335 11.4271 13.2571 11.7778 13.104 12.1449Z" fill="#1423F0"/>
								</svg>		
							</div>
							

						</div>
					</div>

					<div class="header-wrp__item header-wrp__mob">
						<div class="langs-main__menu">
							<ul>
							   <?php pll_the_languages(); ?>			
							</ul>
						</div>
					</div>

					<div class="header-wrp__item">
						<div class="seacrh-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.2859 18.0004C14.073 18.0004 17.143 14.9304 17.143 11.1433C17.143 7.35618 14.073 4.28613 10.2859 4.28613C6.49876 4.28613 3.42871 7.35618 3.42871 11.1433C3.42871 14.9304 6.49876 18.0004 10.2859 18.0004Z" stroke="#1423F0" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M18.8575 19.7139L15.1289 15.9854" stroke="#1423F0" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</div>

					<div class="header-wrp__item">
						<div class="search search-hdr-btn">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.71415 13.5001C10.5545 13.5001 12.857 11.1975 12.857 8.35721C12.857 5.51689 10.5545 3.21436 7.71415 3.21436C4.87382 3.21436 2.57129 5.51689 2.57129 8.35721C2.57129 11.1975 4.87382 13.5001 7.71415 13.5001Z" stroke="#1423F0" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.1429 14.7857L11.3464 11.9893" stroke="#1423F0" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>			
						</div>
						<div class="burger">
							<div class="burger___text">Меню</div>
							<div class="nav-icon burger__item">
								<span class="nav-icon__item"></span>
								<span class="nav-icon__item"></span>
								<span class="nav-icon__item"></span>
							</div>
						</div>
					</div>
				</div>


				<div class="header__search">
					<?php get_search_form(); ?>
				</div>

				<div class="header__phones">
					<div class="numbers_mob "> 
						<?php if(!empty($header_phones)) {?>
							<?php foreach ($header_phones as $phone) { ?>
								<?php if (!empty($phone['phone-without-formating'])) { ?>
									<a href="tel:<?= $phone['phone-without-formating'] ; ?>" class="header-wrp__number"><?= (!empty($phone['city'])) ? $phone['city'] : ''; ?> <span><?= (!empty($phone['phone'])) ? $phone['phone'] : $phone['phone-without-formating'] ;?></span></a>
								<?php } ?>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</header>


		<div class="main-mob main-mob_padd">

			<div class="container">
				<div class="row">
					<div class="main-menu col-lg-4 col-md-12">
						<div class="row">
							<div class="mobile-langs">
								<!-- <a href="#">ua</a>
								<a href="#" class="active-lang">ru</a> -->
								<ul>
									<?php pll_the_languages(); ?>			
								</ul>
							</div>
							<div class="main-menu__top col-lg-12 ">
								<div class="row">
									<div class="main-menu__image col-lg-12 col-md-8 col-sm-12">
										<?= (!empty($header_menu['image'])) ? '<img src="' . $header_menu['image']['sizes']['medium_large'] . '" alt="' . $header_menu['image']['alt'] . '" />' : ''; ?>
									</div>		
									<div class="main-menu__items col-lg-12 col-md-4 col-sm-12">
										<?php 
										wp_nav_menu( array(
											'menu_class'=>'row',
											'theme_location'=>'main_top',
											'after'=>''
										) );
										?>
										<div class="langs col-lg-12">
											<!-- <a href="#">ua</a>
											<a href="#" class="active-lang">ru</a> -->
											<ul>
												<?php pll_the_languages(); ?>
											</ul>
										</div>
									</div>
								</div>					
							</div>
							<div class="main-menu__description col-lg-12">
								<p class="text">
									<?= (!empty($header_menu)) ? $header_menu['text'] : ''; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="main-menu__categories col-lg-8 col-md-12">
						<?php 
						wp_nav_menu( array(
							'menu'            => 'Top categories',  
							'container'       => 'div',
							'menu_class'      => 'main-menu__items',
							'echo'            => true,            
							'fallback_cb'     => 'wp_page_menu',
							'depth'           => 3,             
							'theme_location'  => 'categories_top'    
						) );
						?>
					</div>
				</div>
			</div>
		</div>

