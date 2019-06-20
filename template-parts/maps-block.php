<?php
$contacts = get_field('contacts');
?>

<?php foreach ($contacts['addresses'] as $item) { ?>

	<div class="contacts row "> 
		<div class="map-block col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
			<div class="map">
				<?= (!empty($item['map_code'])) ? $item['map_code'] : ''; ?>
				<div class="bg"></div>
				<a href="<?= $item['map_link']; ?>">
					<div class="map-title">
						<span><svg width="14" height="16" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.8081 0C3.05409 0 0 3.05409 0 6.80806C0 11.4669 6.09258 18.3062 6.35198 18.5951C6.59562 18.8665 7.02101 18.866 7.26422 18.5951C7.52362 18.3062 13.6162 11.4669 13.6162 6.80806C13.6161 3.05409 10.5621 0 6.8081 0ZM6.8081 10.2334C4.91937 10.2334 3.38281 8.6968 3.38281 6.80806C3.38281 4.91933 4.9194 3.38277 6.8081 3.38277C8.6968 3.38277 10.2334 4.91937 10.2334 6.8081C10.2334 8.69683 8.6968 10.2334 6.8081 10.2334Z" fill="white"/>
						</svg>
					</span>
					<?= $item['map_text']; ?>
				</div>
			</a>
			</div>
		</div>
		<div class="address-block col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
			<div class="address-content">
				<p class="city"><?= (!empty($item['city'])) ? $item['city'] : ''; ?></p>
				<p class="address"><?= (!empty($item['address'])) ? $item['address'] : ''; ?></p>
			</div>
			<div class="phones-content">
				<?php if (!empty($item['phones_list'])) { ?>
					<?php foreach ($item['phones_list'] as $phone) { ?>
						<p><a href="tel:<?= $phone['phone']; ?>"><?= $phone['format_phone'] ; ?></a></p>
					<?php } ?>
				<?php } ?>
			</div>

			<?php if (!empty($item['mail'])) { ?>
				<div class="mail-content">
					<a href="mailto:<?= $item['mail']; ?>"><?= $item['mail']; ?></a>
				</div>
			<?php } ?>
		</div> 
	</div>

<?php } ?>