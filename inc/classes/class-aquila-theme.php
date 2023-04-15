<?php

/**
 * Bootstraps the Theme
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        // Load the other classes
        Assets::get_instance();
        $this->set_hooks();
    }

    protected function set_hooks() {
        /*
         * Actions
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            "flex-height" => true,
            "flex-width" => true
        ]);
    }
}