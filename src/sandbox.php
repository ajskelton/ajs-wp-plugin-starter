<?php
/*
* Sandbox Playground
*
* @since 1.0.0
 */
namespace AJSkelton;


/*
* 'plugins_loaded'
* 'after_setup_theme'
* 'init'
*
* 'loop_start'
* 'loop_end'
*
 */

// add_action( 'loop_start', function() {
// 	d( 'loop start is firing' );
// 	add_action( 'init', __NAMESPACE__ . '\testing_init_action', 15 );
// });


// function testing_init_action() {
// 	global $wp_filter;

// 	d( $wp_filter['init']);
// 	ddd();
// }


// class Init {

// 	public function __construct() {

// 		// do some stuff
		
// 		$this->init_events();
// 	}

// 	protected function init_events() {
// 		add_action( 'init', 'AJSkelton\Init::testing_loop_start_action', 15 );
// 	}

// 	static function testing_loop_start_action() {
// 		global $wp_filter;

// 		echo 'static method';

// 		d( $wp_filter['init']);
// 	}
// }

// add_action( 'init', function() {
// 	echo 'closure<br>';
// }, 20);

// $init = new Init();
// 

// add_filter( 'init', __NAMESPACE__ . '\testing_loop_start_action', 15 );
// function testing_loop_start_action() {
// 	global $wp_filter;

// 	d( $wp_filter['init'] );
// }
// 


/* WordPress Plugin API Introduction Registering Events */

// add_filter( 'the_title', __NAMESPACE__ . '\add_prefix_to_the_post_title', 100, 2);

// function add_prefix_to_the_post_title( $post_title ) {

// 	global $wp_filter;

// 	d( func_get_arg( 1 ) );
// 	d( func_get_args() );

// 	// d( $post_title );
// 	// ddd( $wp_filter['the_title'] );

// 	return 'Anthony ';
// }


// add_filter( 'the_title', __NAMESPACE__ . '\demo_priority', 10, 2 );

// function demo_priority( $post_title, $post_id ) {

// 	global $wp_filter;

// 	add_prefix_to_the_post_title( $post_title, $post_id );

// 	return 'Called me first!';
// }



/* WordPress Getting Post Types */
// add_action( 'loop_start', __NAMESPACE__ . '\fetch_the_post_types' );
// function fetch_the_post_types() {
// 	global $wp_post_types;
// //	d( $wp_post_types );
// 	$args = array(
// 		'_builtin' => false,
// 		'public' => false,
// 	);
// 	$post_types = get_post_types( $args, 'names', 'or' );
// 	ddd( $post_types );
// }

/* Adding / Editing post type features */

add_action( 'init' , __NAMESPACE__ . '\testing_post_type_features', 9999 );

function testing_post_type_features() {
	// d( post_type_supports( 'page', 'excerpt' ) );
	// d( post_type_supports( 'post', 'page-attributes' ) );

	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'page-attributes' );
	// ddd( post_type_supports( 'page', 'attributes' ) );
	// 
}






























