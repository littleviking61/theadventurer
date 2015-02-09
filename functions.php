<?php
require_once('lib/reverie.php');

/**********************
Add theme supports
 **********************/

function startup_theme_support() {
		// Add language supports.
		load_theme_textdomain('reverie', get_template_directory() . '/lang');

		add_theme_support('post-thumbnails');
		// add_image_size( 'small', '240', '240', false );

		add_theme_support('menus');
		register_nav_menus(array(
				'primary' => __('Primary Navigation', 'reverie'),
				'secondary' => __('Secondary Navigation', 'reverie')
		));
}
add_action('after_setup_theme', 'startup_theme_support'); /* end Reverie theme support */

/**********************
search metabox configurations
 **********************/

// function my_acf_result_query_salons( $args, $field, $post )
// {
// 		// eg from https://codex.wordpress.org/Class_Reference/WP_Query#Custom_Field_Parameters
// 		$args['post_type'] = 'page';
// 		$args['post_parent'] = 1390;

// 		return $args;
// }
// add_filter('acf/fields/relationship/query/name=relation_salons', 'my_acf_result_query_salons', 10, 3);

/**********************
Menu
 **********************/

// function add_search_form($items, $args) {
// 	if( $args->theme_location == 'primary' )
// 		$items .=  file_get_contents(locate_template('search-home.php'));
// 	return $items;
// }
// add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// font on menu
/*function menu( $nav ){
		$menu_item = preg_replace_callback(
				'/(<li[^>]+class=")([^"]+)("?[^>]+>[^>]+>)([^<]+)<\/a>/',
				'replace',
				$nav
		);
		return $menu_item;
}
		
function replace( $a ){
		$start = $a[ 1 ];
		$classes = $a[ 2 ];
		$rest = $a[ 3 ];
		$text = $a[ 4 ];
		$before = true;
		
		$class_array = explode( ' ', $classes );
		$icon_class = array();
		foreach( $class_array as $key => $val ){
				if( 'icon' == substr( $val, 0, 4 ) ){
						if( 'icon' == $val ){
								unset( $class_array[ $key ] );
						} elseif( 'icon-after' == $val ){
								$before = false;
								unset( $class_array[ $key ] );
						} else {
								$icon_class[] = $val;
								unset( $class_array[ $key ] );
						}
				}
		}
		
		if( !empty( $icon_class ) ){
				$icon_class[] = 'icon';
				//$settings = get_option( 'n9m-font-awesome-4-menus', $this->defaults );
				if( $before ){
						$newtext = '<i class="'.implode( ' ', $icon_class ).'"></i><span>'.$text.'</span>';
				} else {
						$newtext = '<span>'.$text.'</span><i class="'.implode( ' ', $icon_class ).'"></i>';
				}
		} else {
				$newtext = $text;
		}
		
		$item = $start.implode( ' ', $class_array ).$rest.$newtext.'</a>';
		return $item;
}
add_filter( 'wp_nav_menu' , 'menu', 10, 2 );*/

/**********************
Body class
 **********************/

// add category nicenames in body class
/*function add_body_class($classes) {
	global $post;
	// foreach((get_the_category($post->ID)) as $category)
	$classes[] = 'page-'.$post->post_name;
	$classes[] = 'type-'.get_field('page_type_acf');
	$classes[] = get_field('category');
	return $classes;
}
add_filter('body_class', 'add_body_class');
*/
/**********************
Navigation
 **********************/
