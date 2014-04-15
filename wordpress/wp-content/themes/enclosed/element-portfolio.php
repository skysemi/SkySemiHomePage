<?php
/*
  This template is used to display individual portfolio previews.
 */
?>

<div class="portfolio-item">
	<a class="portfolio-item-image" href="<?php the_permalink(); ?>">
		<div class="portfolio-item-overlay"></div>
		<div class="portfolio-item-icon icon-search"></div>
		<?php the_post_thumbnail('portfolio', array('title' => '')); ?>
	</a>
	<a href="<?php the_permalink(); ?>">
		<h3 class="portfolio-item-title"><?php the_title(); ?></h3>
	</a>
</div>