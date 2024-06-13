<?php
/*
Plugin Name: RetailEnhance Pro
Description: Enhances the experience for online retailers with advanced product management, enhanced shopping features, customer engagement tools, and more.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class RetailEnhancePro {
    public function __construct() {
        $this->define_constants();
        $this->includes();
        $this->init_hooks();
    }

    private function define_constants() {
        define('RETAILENHANCE_PRO_VERSION', '1.0');
        define('RETAILENHANCE_PRO_PATH', plugin_dir_path(__FILE__));
        define('RETAILENHANCE_PRO_URL', plugin_dir_url(__FILE__));
    }

    private function includes() {
        require_once RETAILENHANCE_PRO_PATH . 'includes/class-product-management.php';
        require_once RETAILENHANCE_PRO_PATH . 'includes/class-enhanced-shopping.php';
        // Include other necessary files
    }

    private function init_hooks() {
        add_action('plugins_loaded', array($this, 'init_plugin'));
    }

    public function init_plugin() {
        new ProductManagement();
        new EnhancedShopping();
        // Initialize other classes
    }
}

new RetailEnhancePro();
