<?php
namespace LearningPlugin;

class Plugin {

    public function run(): void {
        error_log(__METHOD__);
    }

    public function activate(): void {
        error_log(__METHOD__ . 'executed');
    }

}
