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
            if( isset($_GET['orderBy']) === false && isset($_POST['filter_by_category']) === false ){
                $datas = $this->model->getTable(); 
            } else {
                $filter_by_category = null;
                if(isset($_POST['filter_submit'])){
                    $filter_by_category = $_POST['filter_by_category'];
                }
                $orderBy = $_GET['orderBy'];
                $orderBy === 'asc' || $orderBy === 'desc' ? $orderBy = strtoupper($_GET['orderBy']) : $orderBy = $_GET['orderBy'];
                $datas = $this->model->getTable($filter_by_category, $orderBy); 
            }
            
                       
            $this->render('home', 'home', compact('datas'));
        }
    }
?>