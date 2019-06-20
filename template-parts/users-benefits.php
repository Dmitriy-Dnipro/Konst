<?php

$user_benefits = get_field('user_benefits');

?>

<?php if (!empty($user_benefits['title']) || !empty($user_benefits['description']) || !empty($user_benefits['text_title']) || !empty($user_benefits['text'])) {?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($user_benefits['title'])) ? $user_benefits['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($user_benefits['description'])) ? $user_benefits['description'] : ''; ?></div>
			</div>

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<div class="row users-benefits__list row">
				<?php for ($i = 0; $i < count($user_benefits['benefits_list']); $i++) { ?>
					<div class="users-benefits__item col-lg-4 col-md-6 col-6">
						<div class="users-benefits__item--content"><div class="inner"><?= (!empty($user_benefits['benefits_list'][$i]['text'])) ? $user_benefits['benefits_list'][$i]['text'] : ''; ?></div></div>
						<div class="users-benefits__item--bg"><span><?= ($i < 10 && !empty($i+1)) ? '0'.($i+1) : $i+1; ?></span></div>
					</div>
				<?php }?>

			</div>

		</div>
	</div>

<?php } ?>