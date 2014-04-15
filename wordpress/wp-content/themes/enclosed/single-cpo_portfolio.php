<?php get_header(); ?>
	
<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content content-wide">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="portfolio-content">
				<?php the_content(); ?>
			</div>
			<?php wp_link_pages(array('before' => '<div id="postpagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
		</div>
		<?php endwhile; ?>
	</section>
</div>

<?php get_footer(); ?>