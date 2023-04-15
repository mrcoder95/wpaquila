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
        $this->set_hooks();
    }

    protected function set_hooks() {
        // Actions and Filters
    }
}