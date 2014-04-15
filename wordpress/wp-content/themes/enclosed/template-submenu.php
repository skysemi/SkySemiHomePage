<?php
/*
  Template Name: Submenu
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
		<?php comments_template('', true); ?>
		<?php endwhile; ?>
	</section>
	<aside id="sidebar" class="sidebar">
		<ul id="submenu" class="menu-sub">
			<?php $ancestors = array_reverse(get_post_ancestors(get_the_ID())); ?>
			<?php if(empty($ancestors[0]) || $ancestors[0] == 0) $ancestors[0] = get_the_ID(); ?>
			<?php wp_list_pages("title_li=&child_of=".$ancestors[0]); ?>
		</ul>
	</aside>
</div>

<?php get_footer(); ?>