<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content">
		<div class="widget_search">
			<form role="search" method="get" id="search-form" class="search-form" action="<?php echo home_url('/'); ?>">
				<input type="text" value="<?php if(isset($_GET['s'])) echo $_GET['s']; ?>" name="s" id="s" />
				<input type="submit" id="search-submit" value="<?php _e('Search', 'cpotheme'); ?>" />
			</form>
		</div>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article class="search-result" id="post-<?php the_ID(); ?>"> 			
			<h2 class="search-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<div class="search-byline">
				<?php the_permalink(); ?>
			</div>
		</article>
		<?php endwhile; ?>
		<?php cpotheme_pagination(); ?>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
