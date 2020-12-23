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
                $id = $_GET['id'];

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

                if (!$name_input || !$url_input || !$type_input || !$category_input) {
                    die('Il y a une erreur dans votre formulaire');
                }

                $id = $_GET['id'];
                $table = $_GET['type'];

                if($this->model->updateDatasFromEditForm($name_input, $url_input, $category_input, $type_input, $id)){
                    \Http::redirect("index.php?controller=home&task=renderAll");
                }
            }
        }
?>