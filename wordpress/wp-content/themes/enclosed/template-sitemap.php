<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
<div class="container">		
	<section id="content" class="content">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="page-link">'.__('Pages', 'cpotheme').':', 'after' => '</div>')); ?>
			</div>
		</div>
		<?php endwhile; ?>
		
		<div class="column col2">
			<h3><?php _e('Pages', 'cpotheme'); ?></h3>
			<ul><?php wp_list_pages('sort_column=menu_order&title_li='); ?></ul>
		</div>
		<div class="column col2 col-last">
			<h3><?php _e('Post Categories', 'cpotheme'); ?></h3>
			<ul><?php wp_list_categories('title_li=&show_count=1'); ?></ul>
			<h3><?php _e('Post Tags', 'cpotheme'); ?></h3>
			<ul><?php wp_tag_cloud(); ?></ul>
		</div>
		<div class="clear"></div>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>