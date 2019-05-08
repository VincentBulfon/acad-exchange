<?php get_header() ?>


<div class="main__head">
		
	<div class="head__intro">
		<p class="intro__name">
			<?= get_field('service_name'); ?>
		</p>
		<p class="intro__teaser">
			<?= get_field('service_teaser'); ?>
		</p>
	</div>
</div>
<section class="main__content">
	<h2 class="content__title"></h2>
	<div class="content__steps">

		<?php foreach (get_field('service_explanation_repeater') as $step):  ?>

			<?php var_dump($step) ?>

		<?php endforeach; ?>
	</div>
</section>
<section class="main__description">
	<h2 class="description__h2"><?= get_field('service_h2') ;?></h2>
	<?php
	$field = get_field('service_form');
	echo do_shortcode($field);
	?>
</section>
<section class="main__map">
	<h2 class="map__title"> <?= get_field('map_title'); ?> </h2>
	<div class="map__view"></div>
</section>



<?php get_footer() ?>


