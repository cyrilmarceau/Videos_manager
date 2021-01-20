<?php
        namespace Controllers;

        class EditDatas extends Controller
        {
            protected $modelName = \Models\EditDatas::class;
            /**
             * showFormEdit:
             * Render the form edit
             * @return void
             */
            public function showFormEdit(): void
            {
                $id = htmlentities($_GET['id']);

                $datas = $this->model->getById($id);
                $this->render('manager', 'edit', compact('datas'));
            }
            
            /**
             * getDatasFormEdit
             * Get the information from form showFormEdit()
             * @return void
             */
            public function getDatasFormEdit(): void
            {
                if (!empty($_POST['edit_name'])) {
                    $name_input = $_POST['edit_name'];
                }

                if (!empty($_POST['edit_url'])) {
                    $url_input = htmlspecialchars($_POST['edit_url']);
                }

                if (!empty($_POST['edit_category'])) {
                    $category_input = htmlspecialchars($_POST['edit_category']);
                }

                if (!empty($_POST['edit_type'])) {
                    $type_input = htmlspecialchars($_POST['edit_type']);
                }

                if (!empty($_POST['edit_timing'])) {
                    $timing_input = $_POST['edit_timing'];
                }

                if (!empty($_POST['edit_season'])) {
                    $season_input = $_POST['edit_season'];
                } else {
                    $season_input = 0;
                }

                if (!empty($_POST['edit_episode'])) {
                    $episode_input = $_POST['edit_episode'];
                } else {
                    $episode_input = 0;
                }

                if (!$name_input || !$url_input || !$type_input || !$category_input) {
                    die('Il y a une erreur dans votre formulaire');
                }

                $id = htmlentities($_GET['id']);
              

                
                

                if (isset($_POST['submit'])) {
                    if($this->model->updateDatasFromEditForm($name_input, $url_input, $category_input, $type_input, $timing_input, $season_input, $episode_input, $id)){
                        \Http::redirect("index.php?controller=home&task=renderAll");
                    }
                }
            }
        }
?>