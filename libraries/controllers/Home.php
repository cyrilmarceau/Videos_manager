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
         * category
         * @return void
         */
        public function renderBy(): void
        {
                $filter_by_category = null;
                $filter_by_timing = null;
                
                if( isset($_POST['filter_submit']) && !empty($_POST['filter_by_category']) && empty($_POST['filter_by_timing']) ){
                    $filter_by_category = $_POST['filter_by_category'];
                    $datas = $this->model->getTable($filter_by_category, null);
                    $this->render('home', 'home', compact('datas'));
                };

                if( isset($_POST['filter_submit']) && empty($_POST['filter_by_category']) && !empty($_POST['filter_by_timing']) ){
                    $filter_by_timing = $_POST['filter_by_timing'];
                    $datas = $this->model->getTable(null, $filter_by_timing);
    
                    $this->render('home', 'home', compact('datas'));
                };

                if( isset($_POST['filter_submit']) && !empty($_POST['filter_by_category']) && !empty($_POST['filter_by_timing']) ){
                    $filter_by_category = $_POST['filter_by_category'];
                    $filter_by_timing = $_POST['filter_by_timing'];
                    $datas = $this->model->getTable($filter_by_category, $filter_by_timing);
    
                    $this->render('home', 'home', compact('datas'));
                };

        }

    }
?>