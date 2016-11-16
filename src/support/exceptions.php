<?php

/*
* Exception Handler
*
* @package 		AJSkelton
* @since 		1.0.0
* @author 		Anthony Skelton
* @link  		http://anthonyskelton.com
* @license  	GNU General Public License 2.0+
 */

namespace AJSkelton;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

add_action( 'init', __NAMESPACE__ . '\load_whoops', 1 );

/*
* Load Whoops.
*
* @since 1.0.0
*
* @return void
 */
function load_whoops() {

	$whoops = new Run();
	$error_page = new PrettyPageHandler();
	$error_page->setEditor( 'sublime' );
	$whoops->pushHandler( $error_page );
	$whoops->register();

}