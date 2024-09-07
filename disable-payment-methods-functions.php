<?php

// Hook to WooCommerce to filter available payment gateways
add_filter('woocommerce_available_payment_gateways', 'dpm_disable_payment_methods');

function dpm_disable_payment_methods($available_gateways) {
    // Ensure that WooCommerce and the cart are initialized
    if (!is_admin() && WC()->cart && !is_null(WC()->cart)) {
        
        // Get product IDs and gateway IDs from the settings
        $product_ids_option = get_option('dpm_product_ids', '');
        $gateway_ids_option = get_option('dpm_gateway_ids', '');

        // Convert them into arrays
        $product_ids = array_map('intval', explode(',', $product_ids_option));
        $gateway_ids = explode(',', $gateway_ids_option);

        // Check if any of the restricted products are in the cart
        foreach (WC()->cart->get_cart() as $cart_item) {
            $product_id = $cart_item['product_id'];

            // If a restricted product is found, disable the specified gateways
            if (in_array($product_id, $product_ids)) {
                foreach ($gateway_ids as $gateway) {
                    if (isset($available_gateways[trim($gateway)])) {
                        unset($available_gateways[trim($gateway)]);
                    }
                }
                // No need to check further if one of the restricted products is found
                break;
            }
        }
    }

    return $available_gateways;
}
