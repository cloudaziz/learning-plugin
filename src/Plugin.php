<?php
namespace LearningPlugin;

class Plugin {

    public function run(): void {
        add_action('init', [$this, 'init']);
    }

    public function init(): void {
        error_log('Learning Plugin initialized.');
    }
}
