# Disable Payment Methods for Certain Products

A WooCommerce plugin that allows you to disable specific payment methods for certain products. You can configure product IDs and payment gateway IDs through the WordPress dashboard.

## Features

- Disable specific payment gateways for certain product IDs.
- Easily manage product and gateway IDs via a simple settings page in the WordPress admin panel.
- Works seamlessly with WooCommerce to ensure flexible payment method control.

## Installation

1. Download the plugin as a `.zip` file or clone the repository.
2. Upload the plugin to your WordPress installation:
   - Navigate to **Plugins > Add New** in the WordPress dashboard.
   - Click **Upload Plugin** and select the `.zip` file, or upload the folder via FTP to `wp-content/plugins/`.
3. Activate the plugin through the **Plugins** menu in WordPress.
4. Configure the product IDs and payment gateway IDs via the plugin settings in **Payment Methods Control**.

## Usage

### Settings Page

After activation, a new menu item will appear in the WordPress dashboard:

- **Payment Methods Control**: This is where you can input the product IDs and payment gateway IDs.
  
#### Example

- **Product IDs**: 123, 456, 789
- **Payment Gateway IDs**: cod, paypal, bacs

The plugin will disable the selected payment methods (e.g., Cash on Delivery, PayPal, Bank Transfer) for the specified product IDs when those products are added to the cart.

### Payment Gateway IDs

Here are some common WooCommerce payment gateway IDs you can use:
- `cod`: Cash on Delivery
- `paypal`: PayPal
- `bacs`: Direct Bank Transfer

You can find additional gateway IDs by inspecting the checkout page or referring to your payment gateway settings.

## How It Works

1. **Product IDs**: Enter the product IDs (comma-separated) for which you want to disable specific payment methods.
2. **Payment Gateway IDs**: Enter the payment gateway IDs (comma-separated) that you want to disable for those products. For example:
   - https://yoursite.com/wp-admin/admin.php?page=wc-settings&tab=checkout&section=cod. Here gateway ID is cod.
4. The plugin will disable the selected payment gateways when a product from the specified list is in the cart.


### Support

For any issues or questions, feel free to open an issue on the GitHub repository.
