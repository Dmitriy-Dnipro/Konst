

	<article id="post-id-<?php the_id(); ?>" class="item post">
		<?php $id = get_the_ID(); ?>
		<a href="<?php the_permalink() ?>"><div class="post-image" style="background: url(<?= get_the_post_thumbnail_url( $id, 'large' ); ?>)no-repeat 50% / cover; width: 100%;"></div></a>
		<a href="<?php the_permalink() ?>" class="title"><h3><?php the_title(); ?></h3></a>
		<div class="text"><?php the_content() ?>
		
	</article>