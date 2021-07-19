<?php

  if ( ! defined( 'ABSPATH' ) ) { exit; }

?>
<?php global $admin_settings; ?>

  <div class="wrap">
    <h1>Rave Payment Forms Settings</h1>
    <form id="rave-pay" action="options.php" method="post" enctype="multipart/form-data">
      <?php settings_fields( 'flw-rave-settings-group' ); ?>
      <?php do_settings_sections( 'flw-rave-settings-group' ); ?>
      <table class="form-table">
        <tbody>

          <!-- Public Key -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[public_key]"><?php _e( 'Pay Button Public Key', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[public_key]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'public_key' ) ); ?>" />
              <p class="description">Your Pay Button public key</p>
            </td>
          </tr>
          <!-- Secret Key -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[secret_key]"><?php _e( 'Pay Button Secret Key', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[secret_key]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'secret_key' ) ); ?>" />
              <p class="description">Your Pay Button secret key</p>
            </td>
          </tr>

          <!-- Switch to Live -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[go_live]"><?php _e( 'Go Live', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-checkbox">
              <fieldset>
                <?php $go_live = esc_attr( $admin_settings->get_option_value( 'go_live' ) ); ?>
                <label>
                  <input type="checkbox" name="flw_rave_options[go_live]" <?php checked( $go_live, 'yes' ); ?> value="yes" />
                  <?php _e( 'Switch to live account', 'rave-pay' ); ?>
                </label>
              </fieldset>
            </td>
          </tr>
          <!-- Method -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[method]"><?php _e( 'Payment Method', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <select class="regular-text code" name="flw_rave_options[method]">
                <?php $method = esc_attr( $admin_settings->get_option_value( 'method' ) ); ?>
                <option value="both" <?php selected( $method, 'both' ) ?>>Card and Account</option>
                <option value="card" <?php selected( $method, 'card' ) ?>>Card Only</option>
                <option value="account" <?php selected( $method, 'account' ) ?>>Account Only</option>
              </select>
              <p class="description">(Optional) default: Card and Account</p>
            </td>
          </tr>

          <!-- Modal title -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[modal_title]"><?php _e( 'Modal Title', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[modal_title]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'modal_title' ) ); ?>" />
              <p class="description">(Optional) default: FLW PAY</p>
            </td>
          </tr>
          <!-- Modal Description -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[modal_desc]"><?php _e( 'Modal Description', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[modal_desc]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'modal_desc' ) ); ?>" />
              <p class="description">(Optional) default: FLW PAY MODAL</p>
            </td>
          </tr>
          <!-- Modal Logo -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[modal_logo]"><?php _e( 'Modal Logo', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[modal_logo]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'modal_logo' ) ); ?>" />
              <p class="description">(Optional) - Full URL (with 'http') to the custom logo. default: Rave logo</p>
            </td>
          </tr>
          <!-- Successful Redirect URL -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[success_redirect_url]"><?php _e( 'Success Redirect URL', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[success_redirect_url]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'success_redirect_url' ) ); ?>" />
              <p class="description">(Optional) Full URL (with 'http') to redirect to for successful transactions. default: ""</p>
            </td>
          </tr>
          <!-- Failed Redirect URL -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[failed_redirect_url]"><?php _e( 'Failed Redirect URL', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[failed_redirect_url]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'failed_redirect_url' ) ); ?>" />
              <p class="description">(Optional) Full URL (with 'http') to redirect to for failed transactions. default: ""</p>
            </td>
          </tr>
          <!-- Pay Button Text -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[btn_text]"><?php _e( 'Pay Button Text', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <input class="regular-text code" type="text" name="flw_rave_options[btn_text]" value="<?php echo esc_attr( $admin_settings->get_option_value( 'btn_text' ) ); ?>" />
              <p class="description">(Optional) default: PAY NOW</p>
            </td>
          </tr>
          <!-- Currency -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[currency]"><?php _e( 'Charge Currency', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <select class="regular-text code" name="flw_rave_options[currency]">
                <?php $currency = esc_attr( $admin_settings->get_option_value( 'currency' ) ); ?>
                <option value="" <?php selected($currency, '') ?>>Any (Let Customer decide or use Shortcode)</option>
                <option value="NGN" <?php selected($currency, 'NGN') ?>>NGN</option>
                <option value="GHS" <?php selected( $currency, 'GHS' ) ?>>GHS</option>
                <option value="KES" <?php selected( $currency, 'KES' ) ?>>KES</option>
                <option value="USD" <?php selected( $currency, 'USD' ) ?>>USD</option>
                <option value="GBP" <?php selected( $currency, 'GBP' ) ?>>GBP</option>
                <option value="EUR" <?php selected($currency, 'EUR') ?>>EUR</option>
                <option value="ZAR" <?php selected($currency, 'ZAR') ?>>ZAR</option>
              </select>
              <p class="description">(Optional) default: NGN</p>
            </td>
          </tr>
          <!-- Country -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[country]"><?php _e( 'Charge Country', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-text">
              <select class="regular-text code" name="flw_rave_options[country]">
                <?php $country = esc_attr( $admin_settings->get_option_value( 'country' ) ); ?>
                <option value="NG" <?php selected( $country, 'NG' ) ?>>NG: Nigeria</option>
                <option value="GH" <?php selected( $country, 'GH' ) ?>>GH: Ghana</option>
                <option value="KE" <?php selected($country, 'KE') ?>>KE: Kenya</option>
                <option value="ZA" <?php selected($country, 'ZA') ?>>ZA: South Africa</option>
                <option value="US" <?php selected( $country, 'US' ) ?>>All (Worldwide)</option>
              </select>
              <p class="description">(Optional) default: NG</p>
            </td>
          </tr>

          <!-- Styling -->
          <tr valign="top">
            <th scope="row">
              <label for="flw_rave_options[theme_style]"><?php _e( 'Form Style', 'rave-pay' ); ?></label>
            </th>
            <td class="forminp forminp-checkbox">
              <fieldset>
                <?php $theme_style = esc_attr( $admin_settings->get_option_value( 'theme_style' ) ); ?>
                <label>
                  <input type="checkbox" name="flw_rave_options[theme_style]" <?php checked( $theme_style, 'yes' ); ?> value="yes" />
                  <?php _e( 'Use default theme style', 'rave-pay' ); ?>
                </label>
                <p class="description">Override the form style and use the default theme's style</p>
              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>
      <?php submit_button(); ?>
    </form>

  </div>
