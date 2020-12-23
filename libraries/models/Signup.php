<?php
    namespace Models;

    class Signup extends Model
    {

        public function insert(string $first_name, string $last_name, string $email, string $pseudo, string $pass): void
        {
        
            $query = $this->pdo->prepare('INSERT INTO users SET
            first_name = :first_name,
            last_name = :last_name,
            email = :email,
            pseudo = :pseudo,
            pass = :pass');
            $query->execute(compact('first_name', 'last_name', 'email', 'pseudo', 'pass'));
        }

    }
?>