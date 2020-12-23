<?php

namespace Controllers;

    class Home extends Controller
    {
        protected $modelName = \Models\Home::class;
        
        /**
         * showPage:
         * Render all tables
         * @return void
         */
        public function renderAll(): void
        {
            $datas = $this->model->getVideos();            
            $this->render('home', 'home', compact('datas'));
        }
    }
?>