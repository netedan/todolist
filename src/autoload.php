<?php

set_include_path('/src');

spl_autoload_register(function ($class_name) {
    $file_name = get_include_path() . "/" . $class_name . '.php';
    $file_name = str_replace("\\", "/", $file_name);
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file not found";
    }
});