<?php

    namespace Models;

    abstract class Model
    {
        protected $pdo;
        protected $table;
        protected $name;

        public function __construct()
        {
            $this->pdo = \Database::getPdo();
        }

        
        public function getIdUser(string $email): array
        {
            $query = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $query->execute([
                'email' => $email
            ]);
            $datas = $query->fetchAll();
            foreach($datas as $data){
                return $data;
            }
            
        }

        /**
         * getTable
         *
         * @param  mixed $category
         * @param  mixed $orderByType
         * @return array
         */
        public function getTable(?string $category = "", ?string $timing = ""): array
        {
            $id = $_SESSION['id'];

            $sql = "SELECT {$this->name} FROM {$this->table} WHERE id_user = $id";
            if($category) $sql .= " AND category = '$category'";
            if($timing) $sql .= " AND timing = '$timing'";

            $resultats = $this->pdo->query($sql);
            $datas = $resultats->fetchAll();
    
            return $datas;
        }
    }