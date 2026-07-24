<?php
/**
 * Plugin Name: Learning Plugin
 * Description: Learning WordPress Plugin Development
 * Version: 1.0.0
 * Author: Md Abdul Aziz
 */

defined('ABSPATH') || exit;

// Composer Autoloader
require_once __DIR__ . '/vendor/autoload.php';
// require_once __DIR__ . '/src/Plugin.php';

// Start the Plugin
$plugin = new LearningPlugin\Plugin();
// $plugin = new LearningPlugin\Plugin(); এই লাইনটি নিছের মতো করে লিখা যায়
// use LearningPlugin\Plugin;
// $plugin = new Plugin();

// "এই Plugin যখন Activate হবে, তখন `$plugin` object-এর `activate()` method-টি চালাও।" "আমি একটি Activation Hook নিবন্ধন করতে চাই।"
// "Plugin Activate হওয়ার Event-এর জন্য একটি Callback নিবন্ধন করো।"
register_activation_hook(
    __FILE__,
    [$plugin, 'activate']
);

//  __FILE__ এর মান হবে:
// /var/www/html/wp-content/plugins/learning-plugin/learning-plugin.php
// বর্তমান File-এর সম্পূর্ণ Path।

// [ $plugin, 'activate' ] মানে:
// "$plugin Object-এর activate() Method"
// এখনও এটি Call হয়নি। শুধু WordPress-কে জানানো হয়েছে— "সময় হলে এই Method চালাবে।"
// এটি কোনো Method Call করে না। এটি শুধু Register করে।
// যখন plugin active করা হয় সুধু মাত্র activate() Method-টি তখন run করা হয়।

$plugin->run();
