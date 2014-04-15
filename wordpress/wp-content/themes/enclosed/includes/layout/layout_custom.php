<?php 
add_action('wp_head', 'cpotheme_styling_custom', 19);
function cpotheme_styling_custom(){
	
	//Background styling
	$bg_texture = cpotheme_get_option('bg_texture');
	$texture_file = '';
	if($bg_texture != '' && $bg_texture != 'none')
		$texture_file = get_template_directory_uri().'/images/textures/texture_'.$bg_texture.'.png';
	?>
	<style type="text/css">
		body {
			<?php if($bg_color != ''): ?>
			background-color:<?php echo $bg_color; ?>; 
			<?php endif; ?>
		}
		<?php if($texture_file != ''): ?>
		.outer { background-image:url(<?php echo $texture_file; ?>); }
		<?php endif; ?>
		@media only screen and (max-width: 800px){
			body { background-image:none; }
		}
				
    </style>
	<?php
}