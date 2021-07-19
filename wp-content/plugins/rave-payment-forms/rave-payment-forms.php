<?php
  /*
  Plugin Name: Flutterwave Payment Forms
  Plugin URI: http://flutterwave.com/
  Description: Flutterwave payment gateway forms, accept local and international payments securely.
  Version: 1.0.3
  Author: Flutterwave, Bosun Olanrewaju, Chigbo Ezejiugo, Olaobaju Abraham
  Author URI: https://twitter.com/theflutterwave
  Copyright: © 2016 Flutterwave Technology Solutions
  License: MIT License
  */

  

  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }



  if ( ! defined( 'FLW_PAY_PLUGIN_FILE' ) ) {
    define( 'FLW_PAY_PLUGIN_FILE', __FILE__ );
  }

  // Plugin folder path
  if ( ! defined( 'FLW_DIR_PATH' ) ) {
    define( 'FLW_DIR_PATH', plugin_dir_path( __FILE__ ) );
  }

  //Plugin folder path
  if ( ! defined( 'FLW_DIR_URL' ) ) {
    define( 'FLW_DIR_URL', plugin_dir_url( __FILE__ ) );
  }

  require_once( FLW_DIR_PATH . 'includes/rave-base-class.php' );

  global $flw_pay_class;

  $flw_pay_class = FLW_Rave_Pay::get_instance();

  function rave_admin_enqueue_scripts(){
    global $pagenow, $typenow;
    
    if($pagenow == "admin.php"){
      wp_enqueue_style('flutterwave_css', plugins_url('assets/css/styleCSS/public/paymentPlan.css', __FILE__));
      wp_enqueue_script('flutterwave_javascript', plugins_url('assets/js/paymentplan.js', __FILE__), array('jquery'), '1.0.0',true);
    }
  }

  add_action('admin_enqueue_scripts','rave_admin_enqueue_scripts');

?>
