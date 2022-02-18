<?php


// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'belremcor_scripts' );
// add_action('wp_print_styles', 'belremcor2_scripts'); // можно использовать этот хук он более поздний
function belremcor_scripts() {
	//<link rel="icon" href="icon/logo-belremkor-icon.ico" />
	
	wp_enqueue_style( 'belremcor-bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'belremcor-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'belremcor-responsive', get_template_directory_uri().'/css/responsive.css' );

	//wp_enqueue_style( 'belremcor-icon', get_template_directory_uri().'/icon/logo-belremkor-icon.ico' );

	wp_enqueue_style( 'belremcor-jquery.mCustomScrollbar.min', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css' );
	wp_enqueue_style( 'belremcor-font-awesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css');
	wp_enqueue_style( 'belremcor-jquery.fancybox.min', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css' );

	// wp_enqueue_style( 'belremcor-style', get_template_directory_uri().'/css/style.css' );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'belremcor-bootstrap.bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array(), 'null', true );
	wp_enqueue_script( 'belremcor-jquery-3.0.0.min', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), 'null', true );
	wp_enqueue_script( 'belremcor-jquery.mCustomScrollbar.concat.min', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), 'null', true );
	wp_enqueue_script( 'belremcor-custom', get_template_directory_uri() . '/js/custom.js', array(), 'null', true );
}

add_action('after_setup_theme', function (){
	register_nav_menus([
		'top'=> 'Меню в шапке сайта',
		'footer_menu' => 'Меню в подвале сайта'
	]);
});

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	if ( 'top' === $args->theme_location ) {
		$classes = [ 'nav-item' ];
	} 
	if ($item ->current){
		$classes[]= 'active';
	}

	return $classes;
}

add_filter( 'nav_menu_link_attributes', 'nav_link_filter', 10, 4 );
function nav_link_filter( $atts, $item, $args, $depth ){
	if($args->theme_location === 'top'){
		$atts['class']='nav-link';
	}
    // if ( $item->current ) {
	// 	$class = 'nav-link';
	// 	$atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
	// }
    return $atts;
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

// function add_favicon() {
// 	echo ‘<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri()'.'/icon/logo-belremkor-icon.ico'" />’;
// }
// add_action('wp_head', 'add_favicon');

add_action( 'wp_head', 'ilc_favicon');
function ilc_favicon(){
    echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/icon/logo-belremkor2.ico' />" . "\n";
}

?>