=== PayBangla: #1 bKash, Rocket & Nagad Gateway for WooCommerce ===
Contributors: khulnasoft
Tags: bangladesh, mobile banking, sms api, bkash, nagad, rocket, woocommerce, payment gateway
Requires at least: 5.8
Tested up to: 6.6.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The #1 Mobile Banking solution for WooCommerce in Bangladesh. Features bKash, Rocket, Nagad, and automated SMS notifications.

== Description ==

Looking for the most robust **bKash, Rocket, and Nagad payment gateway** for your **Bangladesh-based WooCommerce** store? **PayBangla** is the ultimate lightweight and secure solution designed specifically for the Bangladeshi market.

This plugin allows you to accept payments from all major mobile financial services (MFS) in Bangladesh while providing your customers with a premium, high-converting checkout experience.

### Key Features Optimized for Bangladesh:
*   **Complete MFS Support**: Native support for bKash, Rocket, and Nagad.
*   **Real-time Transaction ID Check**: Automated AJAX verification to prevent duplicate or fraudulent submissions.
*   **Premium 3-Step Checkout**: A guided user interface that leads customers through sending money and scanning QR codes.
*   **Integrated SMS Notifications**: Automatically send order confirmations via SMS using the BulkSMSBD API (expandable).
*   **Charge/Fee Calculation**: Automatically calculate bKash/Rocket/Nagad "Cash-out" fees and add them to the cart.
*   **Custom Admin Dashboard**: Monitor recent mobile payments directly from your WordPress home screen.
*   **QR Code Integration**: Seamlessly upload and display QR codes for each gateway to speed up payments.

Please note:
- This is a woocommerce based plugin so woocommerce plugin must be activated.
- You must have a bKash or Rocket or Nagad account to get payments.
- you must have bulksmsbd.com account to integrate sms api

= Using the Plugin =

* Download the plugin, install and active.

* Now go to <strong>WooCommerce</strong> > <strong>Settings</strong> > <strong>bKash/Rocket/Nagad</strong>, location URL would be like below -

`
http://yourwebsite.domain/wp-admin/admin.php?page=wc-settings&tab=checkout&section=khulnasoft_bkash
`

* Now you will see few default setup but you need to fill up bKash/Rocket/Nagad account number under <strong>bKash Number/Rocket Number/Nagad Number</strong> field, also you might adjust other fileds too.

* If you want to send sms to users automatically when they order any product, 
then at first create an account to bulksmsbd.com and recharge some amount to buy sms credit. you will get an option named API in the bulksmsbd dashboard, go to the API page and you will get the API url in that page. after that please login to your wordpress dashboard and then go to
WooCommerce > SMS API Integration, then insert the api url, your bulksmsbd username and password and save

* That's it. You are ready to go!

== Installation ==

You may install the plugin using one of the three following methods:

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Then activate the plugin.
3. Go to woocommerce > settings > checkout > bKash / Rocket / Nagad and setup your necessary settings.


== Frequently Asked Questions ==

= What is bKash/Rocket/Nagad? =
bKash/Rocket/Nagad all of them are mobile financial services in Bangladesh operating under the authority of Bangladesh Bank as a subsidiary of BRAC Bank Limited (bKash), Dutch Bangla Bank (Rocket), Bangladesh Post and Telecommunication Division (Nagad).

= Is it Woocommerce dependent plugin? =
Yes, You must install and active woocommerce plugin to make this plugin work.

= Is bKash / Rocket / Nagad merchant account necessary? =
No, it could be personal or agent account.

= Is is secured? =
Yes definitely, Maintained high level validation in both frontend and backend.


== Screenshots ==

1. **Step-by-Step Checkout UI**: Shows the modern 3-step payment process with QR code and copy button.
2. **Transaction ID Verification**: Real-time feedback showing successfully validated transaction IDs.
3. **SMS Integration Dashboard**: Merchants can easily configure their own message templates.
4. **Admin Overview Widget**: View recent mobile payments directly from your WordPress dashboard.

== Changelog ==

= 0.1.0 =
* New Feature: SMS Template Customization with placeholders ({order_id}, {customer_name}, etc.).
* Fraud Protection: Unique Transaction ID verification to prevent duplicate submissions.
* Code Quality: Implemented abstract base class for gateways to improve maintainability.