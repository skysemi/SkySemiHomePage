<?php
/*
  This template is used to display individual blog entries.
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	
	<?php if(has_post_thumbnail()): ?>
	<div class="post-image">
		<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark">
			<?php the_post_thumbnail('thumbnail'); ?>
		</a>
	</div>
	<?php endif; ?>
	
	<div class="post-body">
		<?php if(!is_singular()): ?>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; ?>
		<div class="post-byline">
			<div class="post-date">
				<?php the_time(get_option('date_format')); ?>
			</div>
			<?php cpotheme_postpage_author(true); ?>
			<?php cpotheme_postpage_categories(true); ?>
		</div>
		<div class="post-content">
			<?php if(is_singular()) the_content(); else the_excerpt(); ?>
			<?php if(!is_singular()): ?>
			<a class="readmore" href="<?php the_permalink(); ?>"><?php _e('Read More', 'cpotheme'); ?> &rarr;</a>
			<?php else: ?>
			<?php cpotheme_postpage_tags(true); ?>
			<?php endif; ?>
		</div>
	</div>
</article>