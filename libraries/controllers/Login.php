<?php
    namespace Controllers;

    class Login extends Controller
    {
        protected $modelName = \Models\Login::class;
        
        /**
         * showForm:
         * Render the login form
         * @return void
         */
        public function showForm(): void
        {
            $this->render('login', 'loginForm');
        }

                
        /**
         * connection
         * Get the information form login form and redirect to home page
         * @return void
         */
        public function connection(): void
        {
            $email_input = null;
            if (!empty($_POST['email_login'])) {
                $email_input = $_POST['email_login'];
            }


            $pass_input = null;
            if (!empty($_POST['pass_login'])) {
                $pass_input = $_POST['pass_login'];
            }
            
            if (!$email_input || !$pass_input) {
                die('Il y a des champs vide dans votre formulaire');
            }
                
            // Send datas to the model
            if($this->model->connection($email_input, $pass_input)){
                \Http::redirect("index.php?controller=home&task=renderAll");
            }

        }
    }
?>