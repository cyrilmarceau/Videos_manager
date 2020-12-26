<?php
    namespace Controllers;

    abstract class Controller
    {

        protected $model;
        protected $modelName;
        
        /**
         * __construct
         * Instantiate model and start session
         * @return void
         */
        public function __construct()
        {
            $this->model = new $this->modelName();
            if(session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            
        }
        
        /**
         * render
         * Path for render to the view
         * @param  mixed $folder
         * @param  mixed $view
         * @param  mixed $variables
         * @return string
         */
        public function render(string $folder, string $view, array $variables = []): string
        {
            extract($variables);
            //folder, file
            return require dirname(__DIR__, 2) . '/view/' . $folder . '/' . $view . '.php';
        }
    }