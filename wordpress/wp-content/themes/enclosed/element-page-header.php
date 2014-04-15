<?php
/*
  This template is used to display the heading and banner of most pages.
 */
?>

<?php if(!is_home() && !is_front_page()){ wp_reset_query(); ?>

<section id="pagetitle" class="pagetitle">
	<?php if(is_singular()) the_post_thumbnail(array(1000, 1000), array('class' => 'pagetitle-image')); ?>
	<h1 class="pagetitle-title<?php if(has_post_thumbnail()) echo ' has-thumbnail'; ?>">
		<?php global $post;
		if(isset($post->ID)) $current_id = $post->ID; else $current_id = false;
		if(is_category() || is_tag() || is_tax())
			echo single_tag_title('', true);
		elseif(is_author())
			_e('Author Archive', 'cpotheme');
		elseif(is_archive())
			_e('Archive', 'cpotheme');
		elseif(is_404())
			echo __('Page Not Found', 'cpotheme');
		elseif(is_search())
			echo __('Search Results for', 'cpotheme').' "'.get_search_query().'"';
		else
			echo get_the_title($current_id);
		?>
	</h1>
</section>
<div class="container">
	<?php cpotheme_breadcrumb(true); ?>
</div>
<?php } ?>