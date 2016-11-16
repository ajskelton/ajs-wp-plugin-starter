<?php
/*
* Sandbox Playground
*
* @since 1.0.0
 */
namespace AJSkelton;


add_action( 'loop_start', __NAMESPACE__ . '\demo' );

/*
* Demo - Testing Purposes.
*
* @since 1.0.0
*
* @return void
 */
function demo() {
	var_dump( get_the_ID() );
	echo get_the_ID();
	d( get_the_ID() );
}