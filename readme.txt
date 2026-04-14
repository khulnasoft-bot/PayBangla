=== PayBangla ===
Contributors: khulnasoft
Tags: bangladesh, mobile banking, sms api, bkash, nagad, rocket, woocommerce, payment gateway
Requires at least: 5.8
Tested up to: 6.6.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

🚀 The #1 Premium Mobile Banking & SMS Solution for WooCommerce in Bangladesh. Secure, Fast, and Beautiful.

== Description ==

**PayBangla** is the most advanced and feature-rich payment integration for the Bangladeshi market. Designed for speed and security, it allows your customers to pay via **bKash, Rocket, and Nagad** using a modern 3-step interface that minimizes checkout friction and maximizes conversions.

### ✨ Why Choose PayBangla?

*   **🏆 Premium User Experience**: A beautiful, stepped UI that guides customers through the payment process.
*   **🛡️ Fraud Prevention**: Automated AJAX Transaction ID verification and unique ID checks to prevent duplicate submissions.
*   **💬 Integrated SMS Power**: Send automated order updates via BulkSMSBD or Greenweb API using customizable templates.
*   **💹 Currency Smart**: Automatically converts international order totals (USD, EUR, etc.) to BDT during checkout.
*   **📊 Merchant Dashboard**: View recent payments and detailed order stats directly from your WordPress dashboard.
*   **⚡ Lightweight & Fast**: Built with clean, object-oriented code that won't slow down your site.

### 🔥 Powerful Developer Tools
PayBangla is built to be extensible. Use our custom hooks to modify behavior:
*   `paybangla_bdt_exchange_rate`: Customize the BDT conversion rate dynamically.
*   `paybangla_sms_args`: Filter SMS parameters before sending.

== Installation ==

1.  **Download & Install**: Upload the `paybangla` folder to your `/wp-content/plugins/` directory.
2.  **Activate**: Turn on the plugin via the 'Plugins' menu in WordPress.
3.  **Configure**: Go to **WooCommerce > Settings > Payments** to enable bKash, Rocket, or Nagad.
4.  **SMS Setup**: Navigate to **WooCommerce > SMS Integration** to set up your API credentials.

== Frequently Asked Questions ==

= Do I need a Merchant Account? =
No! PayBangla works perfectly with Personal, Agent, or Merchant accounts.

= Is it secure? =
Yes. We use Nonce verification, strict input sanitization, and server-side Transaction ID uniqueness checks.

= Does it support auto-fee calculation? =
Yes. You can set a percentage (e.g., 1.85% for bKash) and it will be added to the order total automatically.

== Screenshots ==

1. **Step-by-Step Checkout UI**: Modern 3-step payment flow with QR codes.
2. **AJAX ID Verification**: Real-time feedback for transaction validation.
3. **SMS Customization**: Dynamic templates for automated notifications.
4. **Merchant Dashboard Widget**: Recent payments at a glance.

== Changelog ==

= 1.1.0 =
* 🏷️ **Complete Rebranding**: Now officially **PayBangla**.
* 💹 **Currency Support**: Added BDT conversion for international stores.
* 📊 **Admin Dashboard**: New widget for tracking recent mobile payments.
* 🧪 **Testing Suite**: Added PHPUnit tests for core logic.
* 🛡️ **Security+**: Enhanced Transaction ID validation hooks.

= 1.0.0 =
* 🚀 Initial release with bKash, Rocket, and Nagad support.
* 🏗️ Modernized base class architecture.
* 💬 Automated SMS notification system.