<?php

require 'vendor/autoload.php';

error_reporting(E_ALL);

$url = $_GET['url'];

if ($url == '') {
    $page = new LunarEclipse\Website\Pages\Index;
} else {
    $pagesMap = [
        'about' => \LunarEclipse\Website\Pages\About::class,
    ];

    if (!isset($pagesMap[$url])) {
        http_response_code(404);
        echo "Not Found";
        exit;
    }

    $page = new $pagesMap[$url];
}

$page->variables['url'] = $url;

echo $page->render();