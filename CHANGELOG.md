# Changelog

All notable changes to this project will be documented in this file.

## [1.1.0] - 2026-04-14
### Added
- Real-time AJAX verification for Transaction IDs.
- 'Copy to Clipboard' feature for merchant mobile numbers.
- Stepped UI design for a better checkout journey.
- SMS Template customization with placeholders ({order_id}, {customer_name}, etc.).
- Unique Transaction ID verification to prevent fraud.

### Changed
- Refactored core logic into an abstract base class `KhulnaSoft_Payment_Gateway`.
- Switched SMS sending from curl to `wp_remote_post`.
- Improved CSS with modern tokens and responsive grid layout.

### Fixed
- QR code upload field not appearing in WooCommerce settings.
- Duplicate SMS messages on page refresh.
- Incorrect order meta display in admin list.

## [1.0.0] - Initial Release
- Basic support for bKash, Rocket, and Nagad payments.
- Simple SMS API integration.
