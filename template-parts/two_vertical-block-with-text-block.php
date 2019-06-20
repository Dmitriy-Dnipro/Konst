<?php

$blocks_before_after = get_field('blocks_before_after');

?>

<?php if (!empty($blocks_before_after['title']) || !empty($blocks_before_after['description']) || !empty($blocks_before_after['text_title']) || !empty($blocks_before_after['text'])) {?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($blocks_before_after['title'])) ? $blocks_before_after['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($blocks_before_after['description'])) ? $blocks_before_after['description'] : ''; ?></div>
			</div>

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12">
			<p class="title-content"><?= $blocks_before_after['content_title']; ?></p>
			<div class="row inner-content">
				<div class="inner-content__title col-lg-12 col-12"><p><?= (!empty($blocks_before_after['block_list']['label'])) ? $blocks_before_after['block_list']['label'] : ''; ?></p></div>
				<div class="inner-content__list col-lg-12 col-12">
					<?php if (!empty($blocks_before_after['block_list'])) { ?>
						<?php $i = 1; ?>
						<?php foreach ($blocks_before_after['block_list'] as $item) { ?>
							<div class="row inner-content__item--title col-lg-12 col-12">
								<div><?= (!empty($item['label'])) ? $item['label'] : ''; ?></div>
							</div>

							<div class="inner-content__item row">
								<div class="inner-content__item--image col-lg-6 col-12">
									<div style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : ''; ?>)no-repeat 50% / cover; width: 100%; height: 215px;"></div>
								</div>
								<div class="inner-content__item--text col-lg-6 col-12">
									<div class="text"><?= (!empty($item['text'])) ? $item['text'] : ''; ?></div>
									<div class="bg"><span><?= ($i < 10) ? '0' . $i : $i; ?></span></div>
								</div>
							</div>
							
							<?php if (count($blocks_before_after['block_list']) > $i) { ?>
								<div class="arrow  col-lg-6">
									<span class="down-button"></span>
								</div>
							<?php } ?>
							<?php $i ++; ?>
						<?php } ?>
					<?php } ?>
					<?php unset($i); ?>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>