<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class Application
    {

        public static function process()
        {
            $controllerName = 'Signup';
            $task = 'showForm';

            if(!empty($_GET['controller'])){
                $controllerName = ucfirst($_GET['controller']);
            }

            if(!empty($_GET['task'])){
                $task = $_GET['task'];
            }

            $controllerName = "\Controllers\\" . $controllerName;

            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                echo $controller->$task();
            } else {
                throw new Exception('Ce controller n\'existe pas');
            }
        }
    }
?>