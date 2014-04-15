<?php 

function cpotheme_metadata_branding(){
	$cpotheme_config = array();
	
	//Branding
	$cpotheme_config[] = array(
	'id' => 'branding',
	'name' => __('Site Branding', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'general_logo',
	'name' => __('Custom Logo', 'cpocore'),
	'desc' => __('Insert the URL of an image to be used as a custom logo.', 'cpocore'),
	'type' => 'upload');

	$cpotheme_config[] = array(
	'id' => 'general_favicon',
	'name' => __('Custom Favicon', 'cpocore'),
	'desc' => __('Insert the URL of an image to be used as a custom favicon. Recommended sizes are 16x16 pixels.', 'cpocore'),
	'type' => 'upload');
	
	$cpotheme_config[] = array(
	'id' => 'general_texttitle',
	'name' => __('Enable Text Title?', 'cpocore'),
	'desc' => __('Activate this to display the site title as text.', 'cpocore'),
	'type' => 'yesno',
	'std' => '0');
	
	return $cpotheme_config;
}


function cpotheme_metadata_loginbranding(){
	$cpotheme_config = array();
	
	//Branding
	$cpotheme_config[] = array(
	'id' => 'login',
	'name' => __('Login Page Branding', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'login_logo',
	'name' => __('Login Logo', 'cpocore'),
	'desc' => __('Insert the URL of an image to be used as a custom logo in the WordPress login page.', 'cpocore'),
	'type' => 'upload');

	$cpotheme_config[] = array(
	'id' => 'login_bg',
	'name' => __('Login Background', 'cpocore'),
	'desc' => __('Insert the URL of an image to be used as a custom background image in the WordPress login page.', 'cpocore'),
	'type' => 'upload');
	
	$cpotheme_config[] = array(
	'id' => 'login_url',
	'name' => __('Login Logo URL', 'cpocore'),
	'desc' => __('Insert the URL of the logo in the WordPress login page.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'login_title',
	'name' => __('Login Logo Title', 'cpocore'),
	'desc' => __('Insert the hover title of the logo in the WordPress login page.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'login_css',
	'name' => __('Custom Login CSS', 'cpocore'),
	'desc' => __('Here you can add CSS rules to modify the login page as you need to.', 'cpocore'),
	'type' => 'textarea');
	
	return $cpotheme_config;
}


function cpotheme_metadata_management(){
	$cpotheme_config = array();
	
	//Management
	$cpotheme_config[] = array(
	'id' => 'management',
	'name' => __('Management', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'general_editlinks',
	'name' => __('Activate Edit Links?', 'cpocore'),
	'desc' => __('Activate this option to display shortcut edit links through out the site for logged in users.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'general_analytics',
	'name' => __('Analytics Tracking Code', 'cpocore'),
	'desc' => __('Insert here your analytics tool\'s tracking code.', 'cpocore'),
	'type' => 'textarea');
	
	return $cpotheme_config;
}


function cpotheme_metadata_customization(){
	$cpotheme_config = array();
	
	//Customization
	$cpotheme_config[] = array(
	'id' => 'customization',
	'name' => __('Customization', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'general_css',
	'name' => __('Custom CSS', 'cpocore'),
	'desc' => __('Here you can insert custom CSS styling for the entire site. This code will override the default stylesheet, but it might not have higher priority than plugins.', 'cpocore'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'general_js',
	'name' => __('Custom Javascript', 'cpocore'),
	'desc' => __('Here you can insert custom Javascript code for the entire site.', 'cpocore'),
	'type' => 'textarea');
	
	return $cpotheme_config;
}


function cpotheme_metadata_layout(){
	$cpotheme_config = array();
	
	//General Layout
	$cpotheme_config[] = array(
	'id' => 'general_layout',
	'name' => __('General Layout', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'sidebar_position',
	'name' => __('Sidebar Position', 'cpocore'),
	'desc' => __('Determines the location of the sidebar by default.', 'cpocore'),
	'type' => 'select',
	'option' => cpotheme_metadata_sidebar(),
	'std' => 'right');
	
	$cpotheme_config[] = array(
	'id' => 'layout_responsive',
	'name' => __('Enable Responsive Design', 'cpocore'),
	'desc' => __('Toggles the responsive mode of the site for mobile devices.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'layout_breadcrumbs',
	'name' => __('Enable Breadcrumbs', 'cpocore'),
	'desc' => __('Enables or disables breadcrumb navigation on all pages. If you are going to use a breadcrumb plugin, disabling this option is recommended.', 'cpocore'),
	'type' => 'yesno',
	'std'  => '1');
	
	$cpotheme_config[] = array(
	'id' => 'layout_languages',
	'name' => __('Enable Language Switcher', 'cpocore'),
	'desc' => __('Enables or disables the language switcher located in the header. Requires the WPML plugin.', 'cpocore'),
	'type' => 'yesno',
	'std'  => '1');
	
	$cpotheme_config[] = array(
	'id' => 'general_credit',
	'name' => __('Enable Credit Link', 'cpocore'),
	'desc' => __('Enables a small, non-obtrusive credit link in the footer. If you decide to activate it, thanks a lot for supporting CPOThemes!', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	return $cpotheme_config;
}

function cpotheme_metadata_postappearance(){
	$cpotheme_config = array();
	
	//Post Appearance
	$cpotheme_config[] = array(
	'id' => 'post_appearance',
	'name' => __('Post Appearance', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_dates',
	'name' => __('Display Post Dates', 'cpocore'),
	'desc' => __('Toggles display of authors in posts.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_authors',
	'name' => __('Display Post Authors', 'cpocore'),
	'desc' => __('Toggles display of authors in posts.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_comments',
	'name' => __('Display Comment Count', 'cpocore'),
	'desc' => __('Toggles display of comment count in posts.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_categories',
	'name' => __('Display Post Categories', 'cpocore'),
	'desc' => __('Determines whether post categories are displayed or not.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_tags',
	'name' => __('Display Post Tags', 'cpocore'),
	'desc' => __('Determines whether post tags are displayed or not.', 'cpocore'),
	'type' => 'yesno',
	'std' => '1');
	
	$cpotheme_config[] = array(
	'id' => 'postpage_preview',
	'name' => __('Display Full Previews', 'cpocore'),
	'desc' => __('Determines whether post lists display the full content or not.', 'cpocore'),
	'type' => 'yesno',
	'std' => '0');
	
	return $cpotheme_config;
}


function cpotheme_metadata_social(){
	$cpotheme_config = array();
	
	//Social Profiles
	$cpotheme_config[] = array(
	'id' => 'social_profiles',
	'name' => __('Social Profiles', 'cpocore'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'social_facebook',
	'name' => __('Facebook Page', 'cpocore'),
	'desc' => __('Enter the URL of your Facebook page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_twitter',
	'name' => __('Twitter Page', 'cpocore'),
	'desc' => __('Enter the URL of your Twitter page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_gplus',
	'name' => __('Google Plus Page', 'cpocore'),
	'desc' => __('Enter the URL of your Google Plus page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_youtube',
	'name' => __('YouTube Page', 'cpocore'),
	'desc' => __('Enter the URL of your YouTube profile to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_linkedin',
	'name' => __('LinkedIn Page', 'cpocore'),
	'desc' => __('Enter the URL of your LinkedIn page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_pinterest',
	'name' => __('Pinterest Page', 'cpocore'),
	'desc' => __('Enter the URL of your Pinterest page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_foursquare',
	'name' => __('Foursquare Page', 'cpocore'),
	'desc' => __('Enter the URL of your Foursquare page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_tumblr',
	'name' => __('Tumblr Page', 'cpocore'),
	'desc' => __('Enter the URL of your Tumblr page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_flickr',
	'name' => __('Flickr Page', 'cpocore'),
	'desc' => __('Enter the URL of your Flickr page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_instagram',
	'name' => __('Instagram Page', 'cpocore'),
	'desc' => __('Enter the URL of your Instagram page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_dribbble',
	'name' => __('Dribbble Page', 'cpocore'),
	'desc' => __('Enter the URL of your Dribbble page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	$cpotheme_config[] = array(
	'id' => 'social_skype',
	'name' => __('Skype Page', 'cpocore'),
	'desc' => __('Enter the URL of your Skype page to display a link in the site.', 'cpocore'),
	'type' => 'text');
	
	return $cpotheme_config;
}


function cpotheme_metadata_auxnavigation(){
	$cpotheme_data = array(
	'none' => __('None', 'cpocore'),
	'children' => __('Menu of Children Pages', 'cpocore'),
	'siblings' => __('Menu of Sibling Pages', 'cpocore'));
	return $cpotheme_data;
}


function cpotheme_metadata_sidebar(){
	$cpotheme_data = array(
	'right' => __('To The Right', 'cpocore'),
	'left' => __('To The Left', 'cpocore'));
	return $cpotheme_data;
}


function cpotheme_metadata_fonts($key = null){
	$cpotheme_data = array(
	'(Standard)' => array('name' => __('Standard Fonts', 'cpocore'), 'type' => 'separator'),
	'Arial' => 'Arial',
	'Georgia' => 'Georgia',
	'Times+New+Roman' => 'Times New Roman',
	'Verdana' => 'Verdana',
	
	'(Serif)' => array('name' => __('Serif Fonts', 'cpocore'), 'type' => 'separator'),
	'Alegreya' => 'Alegreya',
	'Amethysta' => 'Amethysta',
	'Arapey' => 'Arapey',
	'Arbutus+Slab' => 'Arbutus Slab',
	'Artifika' => 'Artifika',
	'Bree+Serif' => 'Bree Serif',
	'Cambo' => 'Cambo',
	'Cinzel' => 'Cinzel',
	'Crete+Round' => 'Crete Round',
	'Della+Respira' => 'Della Respira',
	'Fauna+One' => 'Fauna One',
	'Gabriela' => 'Gabriela',
	'Glegoo' => 'Glegoo',
	'Habibi' => 'Habibi',
	'Italiana' => 'Italiana',
	'Josefin+Slab' => 'Josefin Slab',
	'Kotta+One' => 'Kotta One',
	'Marcellus' => 'Marcellus',
	'Marko+One' => 'Marko One',
	'Ovo' => 'Ovo',
	'Petrona' => 'Petrona',
	'Poly' => 'Poly',
	'Quando' => 'Quando',
	'Quattrocento' => 'Quattrocento',
	'Radley' => 'Radley',
	'Rosarivo' => 'Rosarivo',
	'Sorts+Mill+Goudy' => 'Sorts Mill Goudy',
	'Tienne' => 'Tienne',
	'Unna' => 'Unna',
	
	'(Sans Serif)' => array('name' => __('Sans Serif Fonts', 'cpocore'), 'type' => 'separator'),
	'ABeeZee' => 'ABeeZee',
	'Abel' => 'Abel',
	'Aclonica' => 'Aclonica',
	'Actor' => 'Actor',
	'Alef' => 'Alef',
	'Allerta' => 'Allerta',
	'Anaheim' => 'Anaheim',
	'Andika' => 'Andika',
	'Antic' => 'Antic',
	'Arimo' => 'Arimo',
	'Asap' => 'Asap',
	'Average+Sans' => 'Average Sans',
	'Basic' => 'Basic',
	'Cagliostro' => 'Cagliostro',
	'Comfortaa' => 'Comfortaa',
	'Cantarell' => 'Cantarell',
	'Carme' => 'Carme',
	'Didact+Gothic' => 'Didact Gothic',
	'Dosis' => 'Dosis',
	'Droid+Sans' => 'Droid Sans',
	'Economica' => 'Economica',
	'Fresca' => 'Fresca',
	'Gudea' => 'Gudea',
	'Imprima' => 'Imprima',
	'Istok+Web' => 'Istok Web',
	'Josefin+Sans' => 'Josefin Sans',
	'Julius+Sans+One' => 'Julius Sans One',
	'Jura' => 'Jura',
	'Karla' => 'Karla',
	'Lato' => 'Lato',
	'Mako' => 'Mako',
	'Maven+Pro' => 'Maven Pro',
	'Metrophobic' => 'Metrophobic',
	'Molengo' => 'Molengo',
	'Montserrat' => 'Montserrat',
	'Muli' => 'Muli',
	'Open+Sans' => 'Open Sans',
	'Orienta' => 'Orienta',
	'Oxygen' => 'Oxygen',
	'PT+Sans' => 'PT Sans',
	'Pontano+Sans' => 'Pontano Sans',
	'Quicksand' => 'Quicksand',
	'Raleway' => 'Raleway',
	'Rambla' => 'Rambla',
	'Roboto' => 'Roboto',
	'Rosario' => 'Rosario',
	'Ruluko' => 'Ruluko',
	'Snippet' => 'Snippet',
	'Strait' => 'Strait',
	'Telex' => 'Telex',
	'Ubuntu' => 'Ubuntu',
	'Varela+Round' => 'Varela Round',
	'Voltaire' => 'Voltaire',
	'Yanone+Kaffeesatz' => 'Yanone Kaffeesatz',
	
	'(Display)' => array('name' => __('Display Fonts', 'cpocore'), 'type' => 'separator'),
	'Allan' => 'Allan',
	'Amarante' => 'Amarante',
	'Aubrey' => 'Aubrey',
	'Averia+Libre' => 'Averia Libre',
	'Baumans' => 'Baumans',
	'Boogaloo' => 'Boogaloo',
	'Buda' => 'Buda',
	'Carter+One' => 'Carter One',
	'Chicle' => 'Chicle',
	'Concert+One' => 'Concert One',
	'Dynalight' => 'Dynalight',
	'Flamenco' => 'Flamenco',
	'Forum' => 'Forum',
	'Fredoka+One' => 'Fredoka One',
	'Fugaz+One' => 'Fugaz One',
	'Graduate' => 'Graduate',
	'Great+Vibes' => 'Great Vibes',
	'Gruppo' => 'Gruppo',
	'Kavoon' => 'Kavoon',
	'Lobster' => 'Lobster',
	'Macondo' => 'Macondo',
	'McLaren' => 'McLaren',
	'Oleo+Script' => 'Oleo Script',
	'Overlock' => 'Overlock',
	'Petit+Formal+Script' => 'Petit Formal Script',
	'Poiret+One' => 'Poiret One',
	'Salsa' => 'Salsa',
	'Sofadi+One' => 'Sofadi One',
	
	'(Handwriting)' => array('name' => __('Handwritten Fonts', 'cpocore'), 'type' => 'separator'),
	'Allura' => 'Allura',
	'Arizonia' => 'Arizonia',
	'Berkshire+Swash' => 'Berkshire Swash',
	'Coming+Soon' => 'Coming Soon',
	'Condiment' => 'Condiment',
	'Courgette' => 'Courgette',
	'Damion' => 'Damion',
	'Dancing+Script' => 'Dancing Script',
	'Delius' => 'Delius',
	'Felipa' => 'Felipa',
	'Grand+Hotel' => 'Grand Hotel',
	'League+Script' => 'League Script',
	'Montez' => 'Montez',
	'Neucha' => 'Neucha',
	'Niconne' => 'Niconne',
	'Paprika' => 'Paprika',
	'Parisienne' => 'Parisienne',
	'Rancho' => 'Rancho');	
	
	return $key == null ? $cpotheme_data : $cpotheme_data[$key];
}

function cpotheme_metadata_icons(){
	$cpotheme_data = array(	
	'0' => __('(None)', 'cpocore'),
	'&#xf000;' => '&#xf000; glass',
	'&#xf001;' => '&#xf001; music',
	'&#xf002;' => '&#xf002; search',
	'&#xf003;' => '&#xf003; envelope',
	'&#xf004;' => '&#xf004; heart',
	'&#xf005;' => '&#xf005; star',
	'&#xf006;' => '&#xf006; star-empty',
	'&#xf007;' => '&#xf007; user',
	'&#xf008;' => '&#xf008; film',
	'&#xf009;' => '&#xf009; th-large',
	'&#xf00a;' => '&#xf00a; th',
	'&#xf00b;' => '&#xf00b; th-list',
	'&#xf00c;' => '&#xf00c; ok',
	'&#xf00d;' => '&#xf00d; remove',
	'&#xf00e;' => '&#xf00e; zoom-in',
	'&#xf010;' => '&#xf010; zoom-out',
	'&#xf011;' => '&#xf011; off',
	'&#xf012;' => '&#xf012; signal',
	'&#xf013;' => '&#xf013; cog',
	'&#xf014;' => '&#xf014; trash',
	'&#xf015;' => '&#xf015; home',
	'&#xf016;' => '&#xf016; file',
	'&#xf017;' => '&#xf017; time',
	'&#xf018;' => '&#xf018; road',
	'&#xf019;' => '&#xf019; download-alt',
	'&#xf01a;' => '&#xf01a; download',
	'&#xf01b;' => '&#xf01b; upload',
	'&#xf01c;' => '&#xf01c; inbox',
	'&#xf01d;' => '&#xf01d; play-circle',
	'&#xf01e;' => '&#xf01e; repeat',
	'&#xf021;' => '&#xf021; refresh',
	'&#xf022;' => '&#xf022; list-alt',
	'&#xf023;' => '&#xf023; lock',
	'&#xf024;' => '&#xf024; flag',
	'&#xf025;' => '&#xf025; headphones',
	'&#xf026;' => '&#xf026; volume-off',
	'&#xf027;' => '&#xf027; volume-down',
	'&#xf028;' => '&#xf028; volume-up',
	'&#xf029;' => '&#xf029; qrcode',
	'&#xf02a;' => '&#xf02a; barcode',
	'&#xf02b;' => '&#xf02b; tag',
	'&#xf02c;' => '&#xf02c; tags',
	'&#xf02d;' => '&#xf02d; book',
	'&#xf02e;' => '&#xf02e; bookmark',
	'&#xf02f;' => '&#xf02f; print',
	'&#xf030;' => '&#xf030; camera',
	'&#xf031;' => '&#xf031; font',
	'&#xf032;' => '&#xf032; bold',
	'&#xf033;' => '&#xf033; italic',
	'&#xf034;' => '&#xf034; text-height',
	'&#xf035;' => '&#xf035; text-width',
	'&#xf036;' => '&#xf036; align-left',
	'&#xf037;' => '&#xf037; align-center',
	'&#xf038;' => '&#xf038; align-right',
	'&#xf039;' => '&#xf039; align-justify',
	'&#xf03a;' => '&#xf03a; list',
	'&#xf03b;' => '&#xf03b; indent-left',
	'&#xf03c;' => '&#xf03c; indent-right',
	'&#xf03d;' => '&#xf03d; facetime-video',
	'&#xf03e;' => '&#xf03e; picture',
	'&#xf040;' => '&#xf040; pencil',
	'&#xf041;' => '&#xf041; map-marker',
	'&#xf042;' => '&#xf042; adjust',
	'&#xf043;' => '&#xf043; tint',
	'&#xf044;' => '&#xf044; edit',
	'&#xf045;' => '&#xf045; share',
	'&#xf046;' => '&#xf046; check',
	'&#xf047;' => '&#xf047; move',
	'&#xf048;' => '&#xf048; step-backward',
	'&#xf049;' => '&#xf049; fast-backward',
	'&#xf04a;' => '&#xf04a; backward',
	'&#xf04b;' => '&#xf04b; play',
	'&#xf04c;' => '&#xf04c; pause',
	'&#xf04d;' => '&#xf04d; stop',
	'&#xf04e;' => '&#xf04e; forward',
	'&#xf050;' => '&#xf050; fast-forward',
	'&#xf051;' => '&#xf051; step-forward',
	'&#xf052;' => '&#xf052; eject',
	'&#xf053;' => '&#xf053; chevron-left',
	'&#xf054;' => '&#xf054; chevron-right',
	'&#xf055;' => '&#xf055; plus-sign',
	'&#xf056;' => '&#xf056; minus-sign',
	'&#xf057;' => '&#xf057; remove-sign',
	'&#xf058;' => '&#xf058; ok-sign',
	'&#xf059;' => '&#xf059; question-sign',
	'&#xf05a;' => '&#xf05a; info-sign',
	'&#xf05b;' => '&#xf05b; screenshot',
	'&#xf05c;' => '&#xf05c; remove-circle',
	'&#xf05d;' => '&#xf05d; ok-circle',
	'&#xf05e;' => '&#xf05e; ban-circle',
	'&#xf060;' => '&#xf060; arrow-left',
	'&#xf061;' => '&#xf061; arrow-right',
	'&#xf062;' => '&#xf062; arrow-up',
	'&#xf063;' => '&#xf063; arrow-down',
	'&#xf064;' => '&#xf064; share-alt',
	'&#xf065;' => '&#xf065; resize-full',
	'&#xf066;' => '&#xf066; resize-small',
	'&#xf067;' => '&#xf067; plus',
	'&#xf068;' => '&#xf068; minus',
	'&#xf069;' => '&#xf069; asterisk',
	'&#xf06a;' => '&#xf06a; exclamation-sign',
	'&#xf06b;' => '&#xf06b; gift',
	'&#xf06c;' => '&#xf06c; leaf',
	'&#xf06d;' => '&#xf06d; fire',
	'&#xf06e;' => '&#xf06e; eye-open',
	'&#xf070;' => '&#xf070; eye-close',
	'&#xf071;' => '&#xf071; warning-sign',
	'&#xf072;' => '&#xf072; plane',
	'&#xf073;' => '&#xf073; calendar',
	'&#xf074;' => '&#xf074; random',
	'&#xf075;' => '&#xf075; comment',
	'&#xf076;' => '&#xf076; magnet',
	'&#xf077;' => '&#xf077; chevron-up',
	'&#xf078;' => '&#xf078; chevron-down',
	'&#xf079;' => '&#xf079; retweet',
	'&#xf07a;' => '&#xf07a; shopping-cart',
	'&#xf07b;' => '&#xf07b; folder-close',
	'&#xf07c;' => '&#xf07c; folder-open',
	'&#xf07d;' => '&#xf07d; resize-vertical',
	'&#xf07e;' => '&#xf07e; resize-horizontal',
	'&#xf080;' => '&#xf080; bar-chart',
	'&#xf081;' => '&#xf081; twitter-sign',
	'&#xf082;' => '&#xf082; facebook-sign',
	'&#xf083;' => '&#xf083; camera-retro',
	'&#xf084;' => '&#xf084; key',
	'&#xf085;' => '&#xf085; cogs',
	'&#xf086;' => '&#xf086; comments',
	'&#xf087;' => '&#xf087; thumbs-up',
	'&#xf088;' => '&#xf088; thumbs-down',
	'&#xf089;' => '&#xf089; star-half',
	'&#xf08a;' => '&#xf08a; heart-empty',
	'&#xf08b;' => '&#xf08b; signout',
	'&#xf08c;' => '&#xf08c; linkedin-sign',
	'&#xf08d;' => '&#xf08d; pushpin',
	'&#xf08e;' => '&#xf08e; external-link',
	'&#xf090;' => '&#xf090; signin',
	'&#xf091;' => '&#xf091; trophy',
	'&#xf092;' => '&#xf092; github-sign',
	'&#xf093;' => '&#xf093; upload-alt',
	'&#xf094;' => '&#xf094; lemon',
	'&#xf095;' => '&#xf095; phone',
	'&#xf096;' => '&#xf096; check-empty',
	'&#xf097;' => '&#xf097; bookmark-empty',
	'&#xf098;' => '&#xf098; phone-sign',
	'&#xf099;' => '&#xf099; twitter',
	'&#xf09a;' => '&#xf09a; facebook',
	'&#xf09b;' => '&#xf09b; github',
	'&#xf09c;' => '&#xf09c; unlock',
	'&#xf09d;' => '&#xf09d; credit-card',
	'&#xf09e;' => '&#xf09e; rss',
	'&#xf0a0;' => '&#xf0a0; hdd',
	'&#xf0a1;' => '&#xf0a1; bullhorn',
	'&#xf0a2;' => '&#xf0a2; bell',
	'&#xf0a3;' => '&#xf0a3; certificate',
	'&#xf0a4;' => '&#xf0a4; hand-right',
	'&#xf0a5;' => '&#xf0a5; hand-left',
	'&#xf0a6;' => '&#xf0a6; hand-up',
	'&#xf0a7;' => '&#xf0a7; hand-down',
	'&#xf0a8;' => '&#xf0a8; circle-arrow-left',
	'&#xf0a9;' => '&#xf0a9; circle-arrow-right',
	'&#xf0aa;' => '&#xf0aa; circle-arrow-up',
	'&#xf0ab;' => '&#xf0ab; circle-arrow-down',
	'&#xf0ac;' => '&#xf0ac; globe',
	'&#xf0ad;' => '&#xf0ad; wrench',
	'&#xf0ae;' => '&#xf0ae; tasks',
	'&#xf0b0;' => '&#xf0b0; filter',
	'&#xf0b1;' => '&#xf0b1; briefcase',
	'&#xf0b2;' => '&#xf0b2; fullscreen',
	'&#xf0c0;' => '&#xf0c0; group',
	'&#xf0c1;' => '&#xf0c1; link',
	'&#xf0c2;' => '&#xf0c2; cloud',
	'&#xf0c3;' => '&#xf0c3; beaker',
	'&#xf0c4;' => '&#xf0c4; cut',
	'&#xf0c5;' => '&#xf0c5; copy',
	'&#xf0c6;' => '&#xf0c6; paper-clip',
	'&#xf0c7;' => '&#xf0c7; save',
	'&#xf0c8;' => '&#xf0c8; sign-blank',
	'&#xf0c9;' => '&#xf0c9; reorder',
	'&#xf0ca;' => '&#xf0ca; list-ul',
	'&#xf0cb;' => '&#xf0cb; list-ol',
	'&#xf0cc;' => '&#xf0cc; strikethrough',
	'&#xf0cd;' => '&#xf0cd; underline',
	'&#xf0ce;' => '&#xf0ce; table',
	'&#xf0d0;' => '&#xf0d0; magic',
	'&#xf0d1;' => '&#xf0d1; truck',
	'&#xf0d2;' => '&#xf0d2; pinterest',
	'&#xf0d3;' => '&#xf0d3; pinterest-sign',
	'&#xf0d4;' => '&#xf0d4; google-plus-sign',
	'&#xf0d5;' => '&#xf0d5; google-plus',
	'&#xf0d6;' => '&#xf0d6; money',
	'&#xf0d7;' => '&#xf0d7; caret-down',
	'&#xf0d8;' => '&#xf0d8; caret-up',
	'&#xf0d9;' => '&#xf0d9; caret-left',
	'&#xf0da;' => '&#xf0da; caret-right',
	'&#xf0db;' => '&#xf0db; columns',
	'&#xf0dc;' => '&#xf0dc; sort',
	'&#xf0dd;' => '&#xf0dd; sort-down',
	'&#xf0de;' => '&#xf0de; sort-up',
	'&#xf0e0;' => '&#xf0e0; envelope-alt',
	'&#xf0e1;' => '&#xf0e1; linkedin',
	'&#xf0e2;' => '&#xf0e2; undo',
	'&#xf0e3;' => '&#xf0e3; legal',
	'&#xf0e4;' => '&#xf0e4; dashboard',
	'&#xf0e5;' => '&#xf0e5; comment-alt',
	'&#xf0e6;' => '&#xf0e6; comments-alt',
	'&#xf0e7;' => '&#xf0e7; bolt',
	'&#xf0e8;' => '&#xf0e8; sitemap',
	'&#xf0e9;' => '&#xf0e9; umbrella',
	'&#xf0ea;' => '&#xf0ea; paste',
	'&#xf0eb;' => '&#xf0eb; lightbulb',
	'&#xf0ec;' => '&#xf0ec; exchange',
	'&#xf0ed;' => '&#xf0ed; cloud-download',
	'&#xf0ee;' => '&#xf0ee; cloud-upload',
	'&#xf0f0;' => '&#xf0f0; user-md',
	'&#xf0f1;' => '&#xf0f1; stethoscope',
	'&#xf0f2;' => '&#xf0f2; suitcase',
	'&#xf0f3;' => '&#xf0f3; bell-alt',
	'&#xf0f4;' => '&#xf0f4; coffee',
	'&#xf0f5;' => '&#xf0f5; food',
	'&#xf0f6;' => '&#xf0f6; file-alt',
	'&#xf0f7;' => '&#xf0f7; building',
	'&#xf0f8;' => '&#xf0f8; hospital',
	'&#xf0f9;' => '&#xf0f9; ambulance',
	'&#xf0fa;' => '&#xf0fa; medkit',
	'&#xf0fb;' => '&#xf0fb; fighter-jet',
	'&#xf0fc;' => '&#xf0fc; beer',
	'&#xf0fd;' => '&#xf0fd; h-sign',
	'&#xf0fe;' => '&#xf0fe; plus-sign-alt',
	'&#xf100;' => '&#xf100; double-angle-left',
	'&#xf101;' => '&#xf101; double-angle-right',
	'&#xf102;' => '&#xf102; double-angle-up',
	'&#xf103;' => '&#xf103; double-angle-down',
	'&#xf104;' => '&#xf104; angle-left',
	'&#xf105;' => '&#xf105; angle-right',
	'&#xf106;' => '&#xf106; angle-up',
	'&#xf107;' => '&#xf107; angle-down',
	'&#xf108;' => '&#xf108; desktop',
	'&#xf109;' => '&#xf109; laptop',
	'&#xf10a;' => '&#xf10a; tablet',
	'&#xf10b;' => '&#xf10b; mobile-phone',
	'&#xf10c;' => '&#xf10c; circle-blank',
	'&#xf10d;' => '&#xf10d; quote-left',
	'&#xf10e;' => '&#xf10e; quote-right',
	'&#xf110;' => '&#xf110; spinner',
	'&#xf111;' => '&#xf111; circle',
	'&#xf112;' => '&#xf112; reply',
	'&#xf113;' => '&#xf113 icon-github-alt',
	'&#xf114;' => '&#xf114 icon-folder-close-alt',
	'&#xf115;' => '&#xf115 icon-folder-open-alt',
	'&#xf116;' => '&#xf116 icon-expand-alt',
	'&#xf117;' => '&#xf117 icon-collapse-alt',
	'&#xf118;' => '&#xf118 icon-smile',
	'&#xf119;' => '&#xf119 icon-frown',
	'&#xf11a;' => '&#xf11a icon-meh',
	'&#xf11b;' => '&#xf11b icon-gamepad',
	'&#xf11c;' => '&#xf11c icon-keyboard',
	'&#xf11d;' => '&#xf11d icon-flag-alt',
	'&#xf11e;' => '&#xf11e icon-flag-checkered',
	'&#xf120;' => '&#xf120 icon-terminal',
	'&#xf121;' => '&#xf121 icon-code',
	'&#xf122;' => '&#xf122 icon-reply-all',
	'&#xf122;' => '&#xf122 icon-mail-reply-all',
	'&#xf123;' => '&#xf123 icon-star-half-empty',
	'&#xf124;' => '&#xf124 icon-location-arrow',
	'&#xf125;' => '&#xf125 icon-crop',
	'&#xf126;' => '&#xf126 icon-code-fork',
	'&#xf127;' => '&#xf127 icon-unlink',
	'&#xf128;' => '&#xf128 icon-question',
	'&#xf129;' => '&#xf129 icon-info',
	'&#xf12a;' => '&#xf12a icon-exclamation',
	'&#xf12b;' => '&#xf12b icon-superscript',
	'&#xf12c;' => '&#xf12c icon-subscript',
	'&#xf12d;' => '&#xf12d icon-eraser',
	'&#xf12e;' => '&#xf12e icon-puzzle-piece',
	'&#xf130;' => '&#xf130 icon-microphone',
	'&#xf131;' => '&#xf131 icon-microphone-off',
	'&#xf132;' => '&#xf132 icon-shield',
	'&#xf133;' => '&#xf133 icon-calendar-empty',
	'&#xf134;' => '&#xf134 icon-fire-extinguisher',
	'&#xf135;' => '&#xf135 icon-rocket',
	'&#xf136;' => '&#xf136 icon-maxcdn',
	'&#xf137;' => '&#xf137 icon-chevron-sign-left',
	'&#xf138;' => '&#xf138 icon-chevron-sign-right',
	'&#xf139;' => '&#xf139 icon-chevron-sign-up',
	'&#xf13a;' => '&#xf13a icon-chevron-sign-down',
	'&#xf13b;' => '&#xf13b icon-html5',
	'&#xf13c;' => '&#xf13c icon-css3',
	'&#xf13d;' => '&#xf13d icon-anchor',
	'&#xf13e;' => '&#xf13e icon-unlock-alt',
	'&#xf140;' => '&#xf140 icon-bullseye',
	'&#xf141;' => '&#xf141 icon-ellipsis-horizontal',
	'&#xf142;' => '&#xf142 icon-ellipsis-vertical',
	'&#xf143;' => '&#xf143 icon-rss-sign',
	'&#xf144;' => '&#xf144 icon-play-sign',
	'&#xf145;' => '&#xf145 icon-ticket',
	'&#xf146;' => '&#xf146 icon-minus-sign-alt',
	'&#xf147;' => '&#xf147 icon-check-minus',
	'&#xf148;' => '&#xf148 icon-level-up',
	'&#xf149;' => '&#xf149 icon-level-down',
	'&#xf14a;' => '&#xf14a icon-check-sign',
	'&#xf14b;' => '&#xf14b icon-edit-sign',
	'&#xf14c;' => '&#xf14c icon-external-link-sign',
	'&#xf14d;' => '&#xf14d icon-share-sign',
	'&#xf14e;' => '&#xf14e icon-compass',
	'&#xf150;' => '&#xf150 icon-collapse',
	'&#xf151;' => '&#xf151 icon-collapse-top',
	'&#xf152;' => '&#xf152 icon-expand',
	'&#xf153;' => '&#xf153 icon-eur',
	'&#xf154;' => '&#xf154 icon-gbp',
	'&#xf155;' => '&#xf155 icon-usd',
	'&#xf156;' => '&#xf156 icon-inr',
	'&#xf157;' => '&#xf157 icon-jpy',
	'&#xf158;' => '&#xf158 icon-cny',
	'&#xf159;' => '&#xf159 icon-krw',
	'&#xf15a;' => '&#xf15a icon-btc',
	'&#xf15b;' => '&#xf15b icon-file',
	'&#xf15c;' => '&#xf15c icon-file-text',
	'&#xf15d;' => '&#xf15d icon-sort-by-alphabet',
	'&#xf15e;' => '&#xf15e icon-sort-by-alphabet-alt',
	'&#xf160;' => '&#xf160 icon-sort-by-attributes',
	'&#xf161;' => '&#xf161 icon-sort-by-attributes-alt',
	'&#xf162;' => '&#xf162 icon-sort-by-order',
	'&#xf163;' => '&#xf163 icon-sort-by-order-alt',
	'&#xf164;' => '&#xf164 icon-thumbs-up',
	'&#xf165;' => '&#xf165 icon-thumbs-down',
	'&#xf166;' => '&#xf166 icon-youtube-sign',
	'&#xf167;' => '&#xf167 icon-youtube',
	'&#xf168;' => '&#xf168 icon-xing',
	'&#xf169;' => '&#xf169 icon-xing-sign',
	'&#xf16a;' => '&#xf16a icon-youtube-play',
	'&#xf16b;' => '&#xf16b icon-dropbox',
	'&#xf16c;' => '&#xf16c icon-stackexchange',
	'&#xf16d;' => '&#xf16d icon-instagram',
	'&#xf16e;' => '&#xf16e icon-flickr',
	'&#xf170;' => '&#xf170 icon-adn',
	'&#xf171;' => '&#xf171 icon-bitbucket',
	'&#xf172;' => '&#xf172 icon-bitbucket-sign',
	'&#xf173;' => '&#xf173 icon-tumblr',
	'&#xf174;' => '&#xf174 icon-tumblr-sign',
	'&#xf175;' => '&#xf175 icon-long-arrow-down',
	'&#xf176;' => '&#xf176 icon-long-arrow-up',
	'&#xf177;' => '&#xf177 icon-long-arrow-left',
	'&#xf178;' => '&#xf178 icon-long-arrow-right',
	'&#xf179;' => '&#xf179 icon-apple',
	'&#xf17a;' => '&#xf17a icon-windows',
	'&#xf17b;' => '&#xf17b icon-android',
	'&#xf17c;' => '&#xf17c icon-linux',
	'&#xf17d;' => '&#xf17d icon-dribbble',
	'&#xf17e;' => '&#xf17e icon-skype',
	'&#xf180;' => '&#xf180 icon-foursquare',
	'&#xf181;' => '&#xf181 icon-trello',
	'&#xf182;' => '&#xf182 icon-female',
	'&#xf183;' => '&#xf183 icon-male',
	'&#xf184;' => '&#xf184 icon-gittip',
	'&#xf185;' => '&#xf185 icon-sun',
	'&#xf186;' => '&#xf186 icon-moon',
	'&#xf187;' => '&#xf187 icon-archive',
	'&#xf188;' => '&#xf188 icon-bug',
	'&#xf189;' => '&#xf189 icon-vk',
	'&#xf18a;' => '&#xf18a icon-weibo',
	'&#xf18b;' => '&#xf18b icon-renren');
	
	return $cpotheme_data;
}