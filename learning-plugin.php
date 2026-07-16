<?php
/**
 * Plugin Name: Learning Plugin
 * Description: Learning WordPress Plugin Development
 * Version: 0.0.1
 * Author: Md Abdul Aziz
 */

defined('ABSPATH') || exit;

// Load Composer Autoloader.
require_once __DIR__ . '/vendor/autoload.php';

// Boot the Plugin.
$plugin = new LearningPlugin\Plugin();
$plugin->run();
