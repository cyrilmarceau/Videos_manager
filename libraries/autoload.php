<?php
    spl_autoload_register(function($className)
    {

        $className = str_replace("\\", "/", $className);
        $className = str_replace("Controllers", "controllers", $className);
        $className = str_replace("Models", "models", $className);

        require_once("libraries/$className.php");
    });
?>