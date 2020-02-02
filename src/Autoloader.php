<?php

final class Autoloader {

    private ? string $root = null;

    public function __construct(string $root) {

        $this->root = $root;
    }

    public function load(): void {

        spl_autoload_register(array ($this, 'read'));
    }

    private function read(string $class): void {

        $file = $this->root . $class . '.php';

        if (is_readable($file)) {
            require_once $file;
            return;
        }
    }
}