<?php

function require_all ($paths) {
    foreach ($paths as $path) {
        foreach (glob($path.'*.php') as $filename) require_once $filename;
    }
}
$paths = [
    getcwd() . '/app/Event/',
    getcwd() . '/app/Model/Contract/',
    getcwd() . '/app/Model/',
    getcwd() . '/app/Repository/Contract/',
    getcwd() . '/app/Repository/',
    getcwd() . '/app/Writer/',
];

require 'vendor/autoload.php';
require_all($paths);