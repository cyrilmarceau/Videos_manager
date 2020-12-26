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
            if(isset($_POST['filter_submit'])){
                $filter_by_category = $_POST['filter_by_category'];
            }
            $datas = $this->model->getTable($filter_by_category);

            $this->render('home', 'home', compact('datas'));
        }
    }
?>