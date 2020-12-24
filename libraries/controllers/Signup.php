<?php
    namespace Controllers;

    class Signup extends Controller
    {

        protected $modelName = \Models\Signup::class;
        
        
        /**
         * showForm:
         * Render the signup form
         * @return void
         */
        public function showForm()
        {
            $this->render('signup','signupForm');
        }

    
        /**
         * insert:
         * Get the information from signup form and redirect to login form
         * @return void
         */
        public function insert(): void
        {
            
            $first_name_input = null;
            if (!empty($_POST['first_name'])) {
                $first_name_input = $_POST['first_name'];
            }

            $last_name_input = null;
            if (!empty($_POST['last_name'])) {
                $last_name_input = htmlspecialchars($_POST['last_name']);
            }

            $email_input = null;
            if (!empty($_POST['email'])) {
                $email_input = $_POST['email'];
            }

            $pseudo_input = null;
            if (!empty($_POST['pseudo'])) {
                $pseudo_input = $_POST['pseudo'];
                
            }

            $pass_input = null;
            if (!empty($_POST['pass'])) {
                $pass_input = password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 12]);
                
            }
           

            if (!$first_name_input || !$email_input || !$last_name_input || !$pseudo_input || !$pass_input) {
                die('Il y a une erreur dans votre formulaire');
            }            

            if (isset($_POST['submit'])) { 
                $this->model->insert($first_name_input, $last_name_input, $email_input, $pseudo_input, $pass_input);
                \Http::redirect("index.php?controller=login&task=showForm");
            } 

        }
    }
?>