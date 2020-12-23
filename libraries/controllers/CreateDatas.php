<?php
        namespace Controllers;

        class CreateDatas extends Controller
        {

        protected $modelName = \Models\CreateDatas::class;

            /**
         * showCreateForm:
         * Render Create form
         * @return void
         */
        public function renderForm(): void
        {
            $this->render('manager', 'create');
        }
     
        /**
         * getDatasFormCreate:
         * Get the information from form showCreateForm()
         * @return void
         */
        public function getDatasFormCreate(): void
        {
            if (!empty($_POST['manage_name'])) {
                $name_input = $_POST['manage_name'];
            }

            if (!empty($_POST['manage_url'])) {
                $url_input = htmlspecialchars($_POST['manage_url']);
            }

            if (!empty($_POST['manage_category'])) {
                $category_input = $_POST['manage_category'];
            }

            if (!empty($_POST['manage_type'])) {
                $type_input = $_POST['manage_type'];
            }
           

            if (!$name_input || !$url_input || !$category_input || !$type_input) {
                die('Il y a une erreur dans votre formulaire');
            }

            foreach($_SESSION as $value){
                $session_user_id = $value['id'];
            }

            // Send datas to the model
            if($this->model->insertDatasFromCreateForm($name_input, $url_input, $category_input, $type_input, $session_user_id)){
                \Http::redirect("index.php?controller=home&task=renderAll");
            }
        }
        }
?>