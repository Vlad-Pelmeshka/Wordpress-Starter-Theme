<?php /*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag');

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary' => 'Primary Menu',
		'footer_menu' => 'Footer Menu'
	)
);

// ACFPro options page setup
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Site settings');
}

/*
// Add woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}     
*/

/*-----------------------------------------------------------------------------------*/
/* Mini functions
/*-----------------------------------------------------------------------------------*/
function get_iframe_data($data){
	return ($data['video_type'] == 'type_src') ? $data['video_src'] : $data['file_type']['url'];
}

function is_set_image_link($data, $display_type){
	return ($display_type == 'image-link-text' || $display_type == 'image-link') ? $data : '';
}

function is_set_image_text($data, $display_type){
	return ($display_type == 'image-link-text' || $display_type == 'image-text') ? $data : '';
}


function get_social_shares($class){ 
    $social_share       = get_field('social_share', 'options');

	if(!$social_share)
		return;

	?>
	<div class="<?php echo $class ?>">
			<?php foreach ($social_share as $key => $item):
				if (!empty($item['link']) and !empty($item['icon'])): ?>
					<a href="<?php echo $item['link'] ?>">
						<img src="<?php echo $item['icon'] ?>" alt="<?php echo $item['link'] ?>">
					</a>
				<?php endif;
			endforeach; ?>
		</div>
<?php }