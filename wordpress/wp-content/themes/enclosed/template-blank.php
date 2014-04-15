<?php
/*
Template Name: Blank
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    
	<link rel="profile" href="http://gmpg.org/xfn/11" />    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<div class="wrapper wrapper-margin">
			<div id="main" class="main blank">
				<?php if(have_posts()) while(have_posts()): the_post(); ?>
				<div class="container">
					<div id="content" class="content content-wide">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="page-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
