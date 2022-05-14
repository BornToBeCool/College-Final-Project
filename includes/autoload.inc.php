<?php   

spl_autoload_register('Autoload');

function Autoload($className){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;
    $fullPath = strtolower($fullPath);

    if (!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}
?>