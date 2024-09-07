<?php

// Render the settings page in the admin dashboard
function dpm_render_settings_page() {
    // Check if the user has submitted the form
    if (isset($_POST['dpm_save_settings'])) {
        // Save product IDs and gateway IDs to the options table
        $product_ids = sanitize_text_field($_POST['dpm_product_ids']);
        $gateway_ids = sanitize_text_field($_POST['dpm_gateway_ids']);
        
        // Save the options
        update_option('dpm_product_ids', $product_ids);
        update_option('dpm_gateway_ids', $gateway_ids);
        
        echo '<div class="updated"><p>Settings saved successfully.</p></div>';
    }
    
    // Get the saved product and gateway IDs
    $product_ids = get_option('dpm_product_ids', '');
    $gateway_ids = get_option('dpm_gateway_ids', '');
    ?>
    <div class="wrap">
        <h1>Disable Payment Methods for Certain Products</h1>
        <form method="POST">
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="dpm_product_ids">Product IDs (comma-separated)</label>
                    </th>
                    <td>
                        <input type="text" name="dpm_product_ids" id="dpm_product_ids" value="<?php echo esc_attr($product_ids); ?>" class="regular-text" />
                        <p class="description">Enter the product IDs for which you want to disable payment methods. Example: 123,456,789</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="dpm_gateway_ids">Payment Gateway IDs (comma-separated)</label>
                    </th>
                    <td>
                        <input type="text" name="dpm_gateway_ids" id="dpm_gateway_ids" value="<?php echo esc_attr($gateway_ids); ?>" class="regular-text" />
                        <p class="description">Enter the payment gateway IDs to disable. Example: cod,bacs,paypal</p>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="dpm_save_settings" class="button-primary" value="Save Settings" />
            </p>
        </form>
    </div>
    <?php
}
