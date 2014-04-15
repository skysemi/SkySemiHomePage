<?php 

/* Section Shortcode */
if(!function_exists('cpotheme_shortcode_section')){
	function cpotheme_shortcode_section($atts, $content = null){
		$content = $content;
		$attributes = extract(shortcode_atts(array(
		'background' => '', 
		'image' => '', 
		'color' => '', 
		'position' => '', 
		'parallax' => '', 
		'padding' => ''), $atts));		
		$random_id = rand();
		
		
		//Content Color
		$color_data = '';
		if($color == 'dark'){
			$color_data = ' dark';
		}
		
		//Parallax scrolling
		$parallax_data = '';
		if($position == 'parallax'){
			wp_enqueue_script('cpotheme_skrollr');
			$parallax_data = ' data-bottom-top="background-position:center 100%;" data-top-bottom="background-position:center 0;"';
		}
		$position = ' section-'.$position;

		$output = '';
		//Output section wrapper-- styling must not go first for first-child selector
		$output .= '<div class="section section-'.$random_id.$position.$color_data.'"'.$parallax_data.'>';
		$output .= '<div class="container">';
		$output .= '<style>';
		//Section Styling
		$output .= '.section-'.$random_id.' {';
		if($color != '' || $color != 'dark' || $color != 'light') $output .= ' color:'.$color.';';
		if($background != '') $output .= ' background-color:'.$background.';';
		if($image != '') $output .= ' background:url('.$image.') center;';
		if($padding != '') $output .= ' padding-top:'.$padding.'px; padding-bottom:'.$padding.'px;';
		$output .= ' }';
		//Link Styling output
		$output .= '.section-'.$random_id.' a:link, .section-'.$random_id.' a:visited {';
		if($color != '') $output .= ' color:'.$color.';';
		$output .= ' }';
		$output .= '</style>';
		//Section output
		$output .= cpotheme_do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('section', 'cpotheme_shortcode_section');
}

/* Half Column Shortcode */
if(!function_exists('cpotheme_shortcode_column')){
	function cpotheme_shortcode_column($atts, $content = null){
		$content = $content;
		$attributes = extract(shortcode_atts(array(
		'number' => '2'), $atts));
		
		return '<div class="column col"'.$number.'>'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column', 'cpotheme_shortcode_column');
}

/* Half Column Shortcode */
if(!function_exists('cpotheme_shortcode_column2')){
	function cpotheme_shortcode_column2($atts, $content = null){
		$content = $content;	
		return '<div class="column col2">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_half', 'cpotheme_shortcode_column2');
}

/* Half Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column2_last')){
	function cpotheme_shortcode_column2_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col2 col2-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_half_last', 'cpotheme_shortcode_column2_last');
}



/* Third Column Shortcode */
if(!function_exists('cpotheme_shortcode_column3')){
	function cpotheme_shortcode_column3($atts, $content = null){
		$content = $content;	
		return '<div class="column col3">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_third', 'cpotheme_shortcode_column3');
}

/* Two-Thirds Column Shortcode */
if(!function_exists('cpotheme_shortcode_column3x2')){
	function cpotheme_shortcode_column3x2($atts, $content = null){
		$content = $content;	
		return '<div class="column col3x2">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_two_thirds', 'cpotheme_shortcode_column3x2');
}

/* Third Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column3_last')){
	function cpotheme_shortcode_column3_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col3 col3-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_third_last', 'cpotheme_shortcode_column3_last');
}

/* Two-Thirds Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column3x2_last')){
	function cpotheme_shortcode_column3x2_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col3x2 col3x2-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_two_thirds_last', 'cpotheme_shortcode_column3x2_last');
}



/* Quarter Column Shortcode */
if(!function_exists('cpotheme_shortcode_column4')){
	function cpotheme_shortcode_column4($atts, $content = null){
		$content = $content;	
		return '<div class="column col4">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_fourth', 'cpotheme_shortcode_column4');
}

/* Three-Quarters Column Shortcode */
if(!function_exists('cpotheme_shortcode_column4x3')){
	function cpotheme_shortcode_column4x3($atts, $content = null){
		$content = $content;	
		return '<div class="column col4x3">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_three_fourths', 'cpotheme_shortcode_column4x3');
}

/* Quarter Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column4_last')){
	function cpotheme_shortcode_column4_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col4 col4-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_fourth_last', 'cpotheme_shortcode_column4_last');
}

/* Three-Quarters Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column4x3_last')){
	function cpotheme_shortcode_column4x3_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col4x3 col4x3-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_three_fourths_last', 'cpotheme_shortcode_column4x3_last');
}



/* Fifth Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5')){
	function cpotheme_shortcode_column5($atts, $content = null){
		$content = $content;	
		return '<div class="column col5">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_fifth', 'cpotheme_shortcode_column5');
}

/* Two-Fifths Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x2')){
	function cpotheme_shortcode_column5x2($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x2">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_two_fifths', 'cpotheme_shortcode_column5x2');
}

/* Three-Fifths Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x3')){
	function cpotheme_shortcode_column5x3($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x3">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_three_fifths', 'cpotheme_shortcode_column5x3');
}

/* Four-Fifths Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x4')){
	function cpotheme_shortcode_column5x4($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x4">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_four_fifths', 'cpotheme_shortcode_column5x4');
}

/* Fifth Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5_last')){
	function cpotheme_shortcode_column5_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col5 col5-last col-last">'.cpotheme_do_shortcode($content).'</div><div class="col-divide"></div>';
	}
	add_shortcode('column_fifth_last', 'cpotheme_shortcode_column5_last');
}

/* Two-Fifths Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x2_last')){
	function cpotheme_shortcode_column5x2_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x2 col5x2-last col-last">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_two_fifths_last', 'cpotheme_shortcode_column5x2_last');
}

/* Three-Fifths Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x3_last')){
	function cpotheme_shortcode_column5x3_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x3 col5x3-last col-last">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_three_fifths_last', 'cpotheme_shortcode_column5x3_last');
}

/* Four-Fifths Last Column Shortcode */
if(!function_exists('cpotheme_shortcode_column5x4_last')){
	function cpotheme_shortcode_column5x4_last($atts, $content = null){
		$content = $content;	
		return '<div class="column col5x4 col5x4-last col-last">'.cpotheme_do_shortcode($content).'</div>';
	}
	add_shortcode('column_four_fifths_last', 'cpotheme_shortcode_column5x4_last');
}


/* Divider Shortcode */
if(!function_exists('cpotheme_shortcode_divide')){
	function cpotheme_shortcode_divide($atts, $content = null){
		return '<hr/>';
	}
	add_shortcode('divide', 'cpotheme_shortcode_divide');
}


/* Separator Shortcode */
if(!function_exists('cpotheme_shortcode_separator')){
	function cpotheme_shortcode_separator($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'style' => '',
		'title' => '',
		'color' => '',
		'top' => '',
		'icon' => ''), $atts));
		
		$title = trim(strip_tags($title));
		$color = trim(strip_tags($color));
		$style = trim(strip_tags($style));
		$top = trim(strip_tags($top));
		
		
		$random_id = rand();

		$output = '';
		if($color != '') 
		$output .= '<style>.separator-'.$random_id.' { color:'.$color.'; }</style>';
		
		$output .= '<div class="separator separator-'.$random_id.' separator-'.$style.'">';
		$output .= '<div class="separator-line"></div>';
		if($icon != '') $output .= '<div class="separator-icon icon-'.$icon.'"></div>';
		if($top != '') $output .= '<a class="separator-top skip-to" href="#top" rel="top">'.$top.'</a>';
		if($title != '') $output .= '<div class="separator-title">'.$title.'</div>';
		$output .= '<div class="clear"></div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode('separator', 'cpotheme_shortcode_separator');
}

/* Clearing Shortcode */
if(!function_exists('cpotheme_shortcode_clear')){
	function cpotheme_shortcode_clear($atts, $content = null){
		return '<div style="clear:both;width:100%;"></div>';
	}
	add_shortcode('clear', 'cpotheme_shortcode_clear');
}