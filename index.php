<?php 
require_once( __DIR__ . '/config.php' );
require __DIR__ . '/vendor/autoload.php';
require_once( INCLUDE_DIR . 'helper.php' );
require_once( INCLUDE_DIR . 'contentful-init.php' );

// Less compiler
$less = new \lessc;
$less->compileFile( LESS_DIR . '/main.less', __DIR__ . '/assets/css/compiled.css' );

$rules = array( 
    'impressum'   => '/impressum',      // '/impressum'
    'datenschutz' => '/datenschutz',    // '/datenschutz'
    'home'        => '/',               // '/'
);

$uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
$uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );
$uri = urldecode( $uri );
$uri = preg_replace('/\/\?.*/', '', $uri);
$uri = $uri ? $uri : '/';

foreach ( $rules as $action => $rule ) {
    if ( preg_match( '~^'.$rule.'$~i', $uri, $params ) ) {
        /* now you know the action and parameters so you can 
         * include appropriate template file ( or proceed in some other way )
         */
        include( INCLUDE_DIR . $action . '.php' );

        // exit to avoid the 404 message 
        exit();
    }
}

// nothing is found so handle the 404 error
include( INCLUDE_DIR . '404.php' );
?>