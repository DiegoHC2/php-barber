<?php

spl_autoload_register(function ($class) {
    $filepath = str_replace('Barber', __DIR__, $class);
    $filePath2 = str_replace('\\', '/', $filepath).".php";
    if(file_exists($filePath2)){
        require_once $filePath2;
    } else {
        echo "<script>console.log('Falha ao carregar path arquivo {$filePath2}')";
    }
});