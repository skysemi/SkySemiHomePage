<?php 

/* Button Shortcode */
if(!function_exists('cpotheme_shortcode_button')){
	function cpotheme_shortcode_button($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'url' => '',
			'position' => '',
			'size' => '',
			'icon' => '',
			'color' => ''
			), 
			$atts));
		
		$content = trim(strip_tags($content));
		$url = htmlentities($url);
		
		$size = trim(strip_tags($size));
		switch($size){
			case 'small': $button_size = ' button-small'; break;
			case 'medium': $button_size = ' button-medium'; break;
			case 'large': $button_size = ' button-large'; break;
			default: $button_size = ' button-normal'; break;
		}
		/*if (preg_match('/^#[a-f0-9]{6}$/i', $color)) { 
			$button_color = $color;
			$button_textcolor ='#ffffff';
		}
		else if($color == 'white'){
			$button_color= '#ffffff';
			$button_textcolor ='#555555';
		}
		
		$faded_color = cpotheme_alter_brightness($button_color, -50);*/
		
		if($color == '') $color = 'default';
		if($position != '') $position = ' button-'.$position;
		
		$button_class = '';
		if($icon != ''){
			$button_class .= ' button-has-icon';
			$icon = '<span class="button-icon icon-'.htmlentities($icon).'"></span> ';
		}
		
		$output = '';
		$output .= '<a class="button button-'.$color.$button_size.$position.' '.$button_class.'" href="'.$url.'">'.$icon.$content.'</a>';
		
		
		return $output;
	}
	add_shortcode('button', 'cpotheme_shortcode_button');
}


/* Message Shortcode */
if(!function_exists('cpotheme_shortcode_message')){
	function cpotheme_shortcode_message($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'type' => ''), 
			$atts));
		
		$content = trim(strip_tags($content));	
		$type = trim(strip_tags($type));
		switch($type){
			case 'ok': $type = 'message-ok'; break;
			case 'error': $type = 'message-error'; break;
			case 'warning': $type = 'message-warn'; break;
			case 'info': $type = 'message-info'; break;
			default: $type = ''; break;
		}
		
		return '<span class="message-box '.$type.'">'.$content.'</span>';
	}
	add_shortcode('message', 'cpotheme_shortcode_message');
}


/* Notice Shortcode */
if(!function_exists('cpotheme_shortcode_notice')){
	function cpotheme_shortcode_notice($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'type' => ''), 
			$atts));
		
		$content = trim($content);	
		$type = trim(strip_tags($type));
		switch($type){
			case 'highlight': $type = 'notice-highlight'; break;
			default: $type = ''; break;
		}
		
		return '<div class="notice-box '.$type.'">'.(cpotheme_do_shortcode($content)).'</div>';
	}
	add_shortcode('notice', 'cpotheme_shortcode_notice');
}


/* Progress Bar Shortcode */
if(!function_exists('cpotheme_shortcode_bar')){
	function cpotheme_shortcode_bar($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'style' => '',
			'title' => '',
			'value' => '100',
			'size' => '',
			'icon' => '',
			'color' => '',
			'direction' => ''
			), 
			$atts));
		
		$content = trim(strip_tags($content));		
		$style = $style != '' ? ' progress-bar-'.trim(strip_tags($style)) : '';
		$size = $size != '' ? ' progress-bar-'.trim(strip_tags($size)) : '';
		$direction = $direction != '' ? ' progress-bar-'.trim(strip_tags($direction)) : '';
		
		
		$value = htmlentities($value);
		if($value < 0) $value = 0;
		if($value > 100) $value = 100;
		
		switch($color){
			case 'red': $bar_color = ' gradient-red'; break;
			case 'blue': $bar_color = ' gradient-blue'; break;
			case 'green': $bar_color = ' gradient-green'; break;
			case 'gray': $bar_color = ' gradient-gray'; break;
			case 'pink': $bar_color = ' gradient-pink'; break;
			case 'orange': $bar_color = ' gradient-orange'; break;
			case 'purple': $bar_color = ' gradient-purple'; break;
			case 'teal': $bar_color = ' gradient-teal'; break;
			case 'yellow': $bar_color = ' gradient-yellow'; break;
			case 'black': $bar_color = ' gradient-black'; break;
			case 'white': $bar_color = ' gradient-white'; break;
			default: $bar_color = ' primary-color-bg'; break;
		}
		if($icon != '') $icon = '<span class="bar-icon icon-'.htmlentities($icon).'"></span> ';
		
		$output = '';
		$output .= '<div class="progress-bar'.$direction.$size.$style.'">';
		$output .= '<div class="bar-content '.$bar_color.'" style="width:'.$value.'%;">';
		if($title != '') $output .= '<div class="bar-title">'.$icon.' '.$title.'</div>';
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode('progress', 'cpotheme_shortcode_bar');
}


/* Counter Shortcode */
if(!function_exists('cpotheme_shortcode_counter')){
	function cpotheme_shortcode_counter($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'title' => '',
		'size' => '',
		'icon' => '',
		'color' => '',
		'number' => '',
		'description' => ''
		), 
		$atts));
		$random_id = rand();
				
		$size = 'counter-'.trim(strip_tags($size));
		
		if($color == '') $color = 'default';
		
		$counter_class = '';
		if($icon != '')
			$counter_class .= ' counter-has-icon';
		
		$output = '';
		$output .= '<style>';
		//Section Styling
		$output .= '.counter-'.$random_id.' .counter-icon {';
		if($color != '') $output .= ' color:'.$color.';';
		$output .= ' }';
		$output .= '</style>';
		//Element Styling
		$output .= '<div class="counter counter-'.$random_id.' counter-'.$color.' '.$size.' '.$counter_class.'">';
		$output .= '<div class="counter-number">';
		if($icon != '') $output .= '<div class="counter-icon icon-'.$icon.'"></div>';
		$output .= $number;
		$output .= '</div>';
		$output .= '<div class="counter-title heading">'.$title.'</div>';
		$output .= '<div class="counter-content">'.$content.'</div>';
		$output .= '</div>';
		
		
		return $output;
	}
	add_shortcode('counter', 'cpotheme_shortcode_counter');
}


/* Dropcap Shortcode */
if(!function_exists('cpotheme_shortcode_dropcap')){
	function cpotheme_shortcode_dropcap($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'title' => '',
		'style' => '',
		'color' => '',
		'icon' => ''), $atts));
		
		$title = trim(strip_tags($title));
		$color = trim(strip_tags($color));
		$style = trim(strip_tags($style));
		$content = trim(strip_tags($content));
		
		
		$random_id = rand();

		$output = '';
		
		if($style != '') $color_property = 'background-'; else $color_property = '';
		if($color != '') 
			$output .= '<style>.dropcap-'.$random_id.' { '.$color_property.'color:'.$color.'; }</style>';
		
		$output .= '<span class="dropcap dropcap-'.$random_id.' dropcap-'.$style.'">'.$content.'</span>';
		
		return $output;
	}
	add_shortcode('dropcap', 'cpotheme_shortcode_dropcap');
}


/* Dropcap Shortcode */
if(!function_exists('cpotheme_shortcode_leading')){
	function cpotheme_shortcode_leading($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'icon' => ''), $atts));
		
		$content = trim($content);
		$output = '<span class="leading">'.$content.'</span>';
		
		return $output;
	}
	add_shortcode('leading', 'cpotheme_shortcode_leading');
}

/* Feature Block Shortcode */
if(!function_exists('cpotheme_shortcode_feature')){
	function cpotheme_shortcode_feature($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'title' => '(No Title)', 
		'icon' => '', 
		'style' => ''),
		$atts));
		
		$content = trim($content);
		$title = trim(htmlentities(strip_tags($title), ENT_QUOTES, "UTF-8"));
		
		$output = '<div class="inline-feature inline-feature-'.$style.'">';
		if($icon != ''){
			wp_enqueue_style('style_fontawesome');
			$output .= '<div class="feature-icon primary-color icon-'.$icon.'"></div>';
		}
		$output .= '<h4 class="feature-title">'.$title.'</h4>';
		$output .= '<div class="feature-content">'.cpotheme_do_shortcode($content).'</div>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('feature', 'cpotheme_shortcode_feature');
}


/* Accordion Shortcode */
if(!function_exists('cpotheme_shortcode_testimonial')){
	function cpotheme_shortcode_testimonial($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'name' => '(No Name)', 
			'image' => '', 
			'style' => 'left', 
			'title' => ''),
			$atts));
		
		$content = trim($content);
		$style = trim(htmlentities(strip_tags($style), ENT_QUOTES, "UTF-8"));
		$name = trim(htmlentities(strip_tags($name), ENT_QUOTES, "UTF-8"));
		
		$classes = 'testimonial-'.$style;
		if($image == '') $classes .= 'noimage';
		$output = "<div class='testimonial $classes'>";
		$output .= '<div class="testimonial-content">';
		$output .= $content;
		$output .= '</div>';
		if($image != '') $output .= "<div><img class='testimonial-image' src='$image' alt='$title'/></div>";
		$output .= '<div class="testimonial-meta">';
		$output .= '<div class="testimonial-name heading">'.$name.'</div>';
		if($title != '') $output .= "<span class='testimonial-title'>$title</span>";
		$output .= '</div>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('testimonial', 'cpotheme_shortcode_testimonial');
}


/* Team Member Shortcode */
if(!function_exists('cpotheme_shortcode_team')){
	function cpotheme_shortcode_team($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'name' => '(No Name)', 
			'image' => '', 
			'title' => '', 
			'facebook' => '', 
			'twitter' => '', 
			'gplus' => '', 
			'linkedin' => '', 
			'pinterest' => '', 
			'tumblr' => '', 
			'web' => '', 
			'state' => ''),
			$atts));
		
		$content = trim($content);
		$name = trim(htmlentities(strip_tags($name), ENT_QUOTES, "UTF-8"));
		
		$classes = '';
		if($image == '') $classes .= 'noimage';
		$output = "<div class='team-member $classes'>";
		if($image != '')
			$output .= "<img class='member-image' src='$image' alt='$title'/>";
		$output .= '<div class="member-content">';
		$output .= '<h3 class="member-name">'.$name.'</h3>';
		if($title != '') $output .= "<span class='member-title'>$title</span>";
		$output .= $content;
		$output .= '<div class="member-meta">';
		if($web != '') $output .= "<a class='primary-color primary-color-border' href='$web'><span class='icon-link'></span></a>";
		if($facebook != '') $output .= "<a class='primary-color primary-color-border' href='$facebook'><span class='icon-facebook'></span></a>";
		if($twitter != '') $output .= "<a class='primary-color primary-color-border' href='$twitter'><span class='icon-twitter'></span></a>";
		if($gplus != '') $output .= "<a class='primary-color primary-color-border' href='$gplus'><span class='icon-google-plus'></span></a>";
		if($linkedin != '') $output .= "<a class='primary-color primary-color-border' href='$linkedin'><span class='icon-linkedin'></span></a>";
		if($pinterest != '') $output .= "<a class='primary-color primary-color-border' href='$pinterest'><span class='icon-pinterest'></span></a>";
		if($tumblr != '') $output .= "<a class='primary-color primary-color-border' href='$tumblr'><span class='icon-tumblr'></span></a>";
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('team', 'cpotheme_shortcode_team');
}


/* Pricing Table Shortcode */
if(!function_exists('cpotheme_shortcode_pricing_table')){
	function cpotheme_shortcode_pricing_table($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'columns' => 1, 
			'state' => ''),
			$atts));
		
		$content = cpotheme_do_shortcode($content);
		
		$output = '<div class="pricing-table pricing-col'.$columns.'">';
		$output .= do_shortcode($content);
		$output .= '<div class="clear"></div>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('pricing_table', 'cpotheme_shortcode_pricing_table');
}

/* Pricing Item Shortcode */
if(!function_exists('cpotheme_shortcode_pricing_cell')){
	function cpotheme_shortcode_pricing_cell($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
		'type' => 'none',
		'title' => '',
		'subtitle' => '',
		'description' => '',
		'price' => '',
		'color' => '',
		'before' => '$',
		'after' => '',
		'url' => '',
		'urltitle' => '',
		'urlcolor' => '',
		'coin' => '$'
		), $atts));
		$random_id = rand();
		
		
		$output = '<div class="pricing-column pricing-column-'.$random_id.' pricing-column-'.$type.'">';
		
		$output .= '<style>';
		//Section Styling
		$output .= '.pricing-column-'.$random_id.' .pricing-item-highlight .pricing-title {';
		if($color != '') $output .= "color:#fff; background:$color;";
		$output .= ' }';
		$output .= '</style>';
		
		$output .= '<div class="pricing-item pricing-item-'.$type.'">';
		if($title != ''){
			$output .= '<div class="pricing-title primary-color">';
			$output .= $title;
			if($subtitle != '') $output .= '<div class="pricing-subtitle">'.$subtitle.'</div>';
			$output .= '</div>';
		}
		if($price != ''){
			$output .= '<div class="pricing-price">';
			if($before != '') $output .= '<span class="pricing-before">'.$before.'</span>';
			$output .= '<span class="pricing-price-value">'.$price.'</span>';
			if($after != '') $output .= '<span class="pricing-after">'.$after.'</span>';
			if($description != '') $output .= '<span class="pricing-description">'.$description.'</span>';
			$output .= '</div>';
		}
		$output .= '<div class="pricing-content">';
		$output .= cpotheme_do_shortcode($content);
		$output .= '</div>';
		if($url != ''){
			if($urlcolor == '') $urlcolor = 'default';
			$output .= '<div class="pricing-url">';
			$output .= '<a class="button button-'.$urlcolor.'" href="'.$url.'">';
			if($urltitle == '') $output .= __('Read More', 'cpocore'); else $output .= $urltitle;
			$output .= '</a>';
			$output .= '</div>';
		}
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode('pricing_item', 'cpotheme_shortcode_pricing_cell');
}

/* List Shortcode */
if(!function_exists('cpotheme_shortcode_list')){
	function cpotheme_shortcode_list($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'icon' => '',
			'size' => '',
			'style' => '',
			'color' => ''
			), 
			$atts));
		
		$icon = trim(strip_tags($icon));
		$style = trim(strip_tags($style));
		$size = trim(strip_tags($size));
		$color = trim(strip_tags($color));
		
		
		$random_id = rand();
		
		$output = '';
		$output .= '<style>';
		//Section Styling
		$output .= '.custom-list-'.$random_id.' .custom-list-icon { ';
		$classes = '';
		if($color != ''){
			if(in_array($style, array('round', 'square'))) 
				$output .= ' background-color:'.$color.'; color:#fff;';
			else
				$output .= ' color:'.$color.';';
		}else{
			if(in_array($style, array('round', 'square'))) 
				$classes = ' primary-color-bg';
			else
				$classes = ' primary-color';
		}
		$output .= ' }';
		$output .= '</style>';
		
		if($icon != '') $content = str_replace('<li>', '<li><span class="custom-list-icon icon-'.$icon.$classes.'"></span> ', $content);
		$output .= '<div class="custom-list custom-list-'.$random_id.' custom-list-'.$style.'">';
		$output .= cpotheme_do_shortcode($content);
		$output .= '</div>';
				
		return $output;
	}
	add_shortcode('list', 'cpotheme_shortcode_list');
}

/* Definition Lists Shortcode */
if(!function_exists('cpotheme_shortcode_definition')){
	function cpotheme_shortcode_definition($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'title' => '', 
			),
			$atts));
		
		$content = cpotheme_do_shortcode($content);
		
		$output = '<dl class="definition-list">';
		if($title != '') $output .= '<dt class="definition-term">'.$title.'</dt>';
		if($content != '') $output .= '<dd class="definition-description">'.$content.'</dd>';
		$output .= '</dl>';
		
		return $output;
	}
	add_shortcode('definition', 'cpotheme_shortcode_definition');
}


/* Definition Lists Shortcode */
if(!function_exists('cpotheme_shortcode_map')){
	function cpotheme_shortcode_map($atts, $content = null){
		$attributes = extract(shortcode_atts(array(
			'color' => '', 
			'height' => '400', 
			'latitude' => '', 
			'longitude' => '', 
			),
			$atts));
		wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), false, true);
		$output = '<div class="inline-map" data-lat="'.$latitude.'" data-lng="'.$longitude.'" data-color="'.$color.'" style="height:'.$height.'px"></div>';		
		return $output;
	}
	add_shortcode('map', 'cpotheme_shortcode_map');
}