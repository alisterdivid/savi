<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/test.json";
if (file_exists($file))
    $fileData = file_get_contents($file);
else {
    echo 'file not exit';
    exit();
}
//echo $fileData;

$jsonData = json_decode($fileData, true);
foreach ($jsonData as $item) {
    $image_path = $item['url'];
    echo $image_path;
    $image = file_get_contents('https://www.acura.ca' . $image_path);
    echo '<br>';
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/fonts" . $image_path;

    if (!is_dir(dirname ($destination))) {
        mkdir(dirname ($destination), 0777, true);
        echo dirname ($destination);
    }
    file_put_contents($destination, $image);
//    exit();
}