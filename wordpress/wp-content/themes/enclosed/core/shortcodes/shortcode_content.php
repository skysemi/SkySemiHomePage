<?php 

/* Recent Posts Shortcode */
if(!function_exists('cpotheme_shortcode_posts')){
	function cpotheme_shortcode_posts($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'type' => 'post',
		'columns' => 3,
		'number' => 5,
		), $atts));
		
		$template_element = 'element';
		$template_part = 'portfolio';
		$random_id = rand();
		$output = '';
		
		//Layout columns
		if(!is_numeric($columns)) $columns = 3; 
		elseif($columns < 1) $columns = 1; 
		elseif($columns > 5) $columns = 5;
		
		//Post number
		if(!is_numeric($number)) $number = 5; 
		elseif($number < 1) $number = 1; 
		elseif($number > 500) $number = 500;
		
		//Create the query
		$args = array(
		'post_type' => $type, 
		'posts_per_page' => $number, 
		'nopaging' => 0, 
		'post_status' => 'publish', 
		'ignore_sticky_posts' => 1);
		$query = new WP_Query($args);
		
		if($query->have_posts()): 
		$item_count = 0;
		ob_start();
		echo '<section id="postlist-'.$random_id.'" class="postlist">';
			while($query->have_posts()): $query->the_post();
			if($item_count % $columns == 0 && $item_count != 0) 
				echo '<div class="col-divide"></div>';
			$item_count++;
			if($item_count % $columns == 0 && $item_count != 0) 
				$col_last = ' col-last'; 
			else 
				$col_last = '';
				
			echo '<div class="column col'.$columns.$col_last.'">';
			get_template_part($template_element, $template_part);
			echo '</div>';
			endwhile;
		echo '<div class="clear"></div>';
		echo '</section>';
		
		//Finish up and return output
		$output = ob_get_clean();
		wp_reset_query();
		wp_reset_postdata();
		endif;
		
		return $output;
	}
	add_shortcode('posts', 'cpotheme_shortcode_posts');
}


/* Recent Posts Shortcode */
if(!function_exists('cpotheme_shortcode_portfolio')){
	function cpotheme_shortcode_portfolio($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'nav' => '',
		'category' => '',
		'style' => '',
		'columns' => 3,
		'number' => 5,
		), $atts));
		
		$template_element = 'element';
		$template_part = 'portfolio';
		$random_id = rand();
		$output = '';
		
		//Layout columns
		if(!is_numeric($columns)) $columns = 1; 
		elseif($columns < 1) $columns = 1; 
		elseif($columns > 5) $columns = 5;
		
		//Post number
		if(!is_numeric($number)) $number = 5; 
		elseif($number < 1) $number = 1; 
		elseif($number > 500) $number = 500;
		
		//Post Order
		$order = 'ASC';
		$orderby = 'menu_order';
		
		//Create the query
		$tax_query = array();
		if(is_numeric($category))
			$tax_query[] = array('taxonomy' => 'cpo_portfolio_category', 'terms' => $category, 'field' => 'id');
		$args = array(
		'post_type' => 'cpo_portfolio', 
		'order' => $order, 
		'orderby' => $orderby, 
		'posts_per_page' => $number);
		if(!empty($tax_query)) $args['tax_query'] = $tax_query;
		
		//Execute the query
		$query = new WP_Query($args);
		
		if($query->have_posts()): 
		$item_count = 0;
		ob_start();
		
		if($nav != '') 
			get_template_part($template_element, $template_part.'-nav');
		
		echo '<section id="portfolio-'.$random_id.'" class="portfolio">';
			while($query->have_posts()): $query->the_post();
			if($item_count % $columns == 0 && $item_count != 0) 
				echo '<div class="col-divide"></div>';
			$item_count++;
			if($item_count % $columns == 0 && $item_count != 0) 
				$col_last = ' col-last'; 
			else 
				$col_last = '';
				
			if($columns > 1) echo '<div class="column col'.$columns.$col_last.'">';
			get_template_part($template_element, $template_part);
			if($columns > 1) echo '</div>';
			endwhile;
		echo '<div class="clear"></div>';
		echo '</section>';
		
		//Finish up and return output
		$output = ob_get_clean();
		wp_reset_query();
		wp_reset_postdata();
		endif;
		
		return $output;
	}
	add_shortcode('portfolio', 'cpotheme_shortcode_portfolio');
}