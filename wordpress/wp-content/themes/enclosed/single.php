<?php get_header(); ?>

<div class="container">
	<section id="content" class="content-wide">
		<?php get_template_part('element', 'page-header'); ?>
		
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="page-link">'.__('Pages', 'cpotheme').':', 'after' => '</div>')); ?>
			</div>
		</div>
		<?php comments_template('', true); ?>
		<?php endwhile; ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>