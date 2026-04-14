<?php
/**
 * Class PayBanglaTest
 *
 * @package PayBangla
 */

class PayBanglaTest extends WP_UnitTestCase {

	/**
	 * Test that the plugin correctly identifies BDT currency.
	 */
	public function test_currency_check() {
		update_option( 'woocommerce_currency', 'BDT' );
		$this->assertEquals( 'BDT', get_woocommerce_currency() );
	}

	/**
	 * Test that the SMS template placeholder replacement works.
	 */
	public function test_sms_template_replacement() {
		$template = "Hello {customer_name}, order #{order_id}";
		$placeholders = array(
			'{customer_name}' => 'John Doe',
			'{order_id}'      => '123'
		);
		$message = str_replace( array_keys($placeholders), array_values($placeholders), $template );
		$this->assertEquals( "Hello John Doe, order #123", $message );
	}
}
