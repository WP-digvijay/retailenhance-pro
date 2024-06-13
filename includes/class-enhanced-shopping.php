<?php

class EnhancedShopping {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_shortcode('smart_search', array($this, 'render_smart_search'));
    }

    public function enqueue_scripts() {
        wp_enqueue_style('retailenhance-pro-style', RETAILENHANCE_PRO_URL . 'assets/css/style.css', array(), RETAILENHANCE_PRO_VERSION);
        wp_enqueue_script('retailenhance-pro-script', RETAILENHANCE_PRO_URL . 'assets/js/script.js', array('jquery'), RETAILENHANCE_PRO_VERSION, true);
    }

    public function render_smart_search() {
        ob_start();
        ?>
        <div id="smart-search">
            <!-- Smart Search HTML -->
        </div>
        <?php
        return ob_get_clean();
    }
}

