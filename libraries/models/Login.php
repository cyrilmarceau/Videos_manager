<?php
    namespace Models;

    class Login extends Model
    {
        
        /**
         * connection
         * Verify the user email / password and initialise the session ID 
         * @param  mixed $emailByParameter
         * @param  mixed $passByParameter
         * @return bool
         */
        public function connection(string $emailByParameter, string $passByParameter): bool
        {
            $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :emailByParameter');
            $query->execute([
                'emailByParameter' => $emailByParameter,
            ]);
            
            $row = $query->fetch();
            $password = password_verify($passByParameter, $row['pass']);
            if($password) {
                $_SESSION['id'] = $this->getIdUser($emailByParameter);
                return true;
            } else {
                return false;
            }
        }

    }
?>