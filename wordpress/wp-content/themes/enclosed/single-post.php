<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<?php get_template_part('element', 'blog'); ?>
		<?php if(get_the_author_meta('description')) cpotheme_post_authorbio(); ?>
		<?php comments_template('', true); ?>
		<?php endwhile; ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>