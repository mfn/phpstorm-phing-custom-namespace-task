<?php
namespace Some\Space;

class SomeTask extends \Task {
    public function main() {
        echo "Hello from namespaced task" . PHP_EOL;
        exit;
    }
}
