<?php
function dd(mixed $value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function redirect(string $path) {
    header("Location: {$path}");
    die();
}

function view(string $viewPath, $attr = []) {
    extract($attr);
    require "views/{$viewPath}";
}