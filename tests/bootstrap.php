<?php
/**
 * PHPUnit bootstrap file
 *
 * @package PayBangla
 */

// Force define mandatory constants for wp-phpunit
if ( ! defined( 'WP_TESTS_DOMAIN' ) ) define( 'WP_TESTS_DOMAIN', 'localhost' );
if ( ! defined( 'WP_TESTS_EMAIL' ) ) define( 'WP_TESTS_EMAIL', 'admin@example.org' );
if ( ! defined( 'WP_TESTS_TITLE' ) ) define( 'WP_TESTS_TITLE', 'Test Site' );
if ( ! defined( 'WP_PHP_BINARY' ) ) define( 'WP_PHP_BINARY', 'php' );
if ( ! defined( 'DB_NAME' ) ) define( 'DB_NAME', 'wordpress_test' );
if ( ! defined( 'DB_USER' ) ) define( 'DB_USER', 'root' );
if ( ! defined( 'DB_PASS' ) ) define( 'DB_PASS', 'root' );
if ( ! defined( 'DB_HOST' ) ) define( 'DB_HOST', 'localhost' );

$_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $_tests_dir ) {
	$_tests_dir = dirname( __DIR__ ) . '/vendor/wp-phpunit/wp-phpunit';
}

if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
	echo "Could not find $_tests_dir/includes/functions.php, have you run composer install ?" . PHP_EOL;
	exit( 1 );
}

// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */
function _manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/index.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
