<?php

namespace Controllers;

    class Manager extends Controller
    {
        protected $modelName = \Models\Manager::class;

   
        /**
         * renderSeriesFilms:
         * Render all stables
         * @return void
         */
        public function renderAll(): void
        {
            $videos = $this->model->getVideos();
            $this->render('manager', 'manager', compact('videos'));
        }
        
        /**
         * delete:
         * Delete serie or film
         * @return void
         */
        public function delete()
        {
            $id = htmlentities($_GET['id']);

            $this->model->delete($id);
            \Http::redirect("index.php?controller=home&task=renderAll");
        }
    }
?>