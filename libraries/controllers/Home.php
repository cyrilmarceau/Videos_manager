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
            $datas = $this->model->getTable();            
            $this->render('home', 'home', compact('datas'));
        }
        
        /**
         * renderBy:
         * ASC or DESC
         * @return void
         */
        public function renderBy(): void
        {

            $orderBy = strtoupper($_GET['orderBy']);
            
            $datas = $this->model->getTable($orderBy);            
            $this->render('home', 'home', compact('datas'));
        }
    }
?>