<?php
function config(string $path)
{
    $prePath = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR;
    $path = explode('.',$path);
    $filePath = $prePath.$path[0].'.php';
    $fileContent = require $filePath;
    array_shift($path);

    $config = [];
    foreach ($path as $key=>$value){
       if ($key === 0){
           $config = $fileContent[$value];
       }else{
           $config = $config[$value];
       }
    }
    return $config;
}