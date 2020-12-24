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

        
        public function getIdUser(): int
        {
            $query = "SELECT id FROM users";
            $results = $this->pdo->query($query);
            $id = $results->fetch();
            return $id;
        }

        /**
         * getTable
         * Get dynamic datas from a table
         * @param  mixed $table
         * @return array
         */
        public function getTable(?string $order = ""): array
        {
            foreach($_SESSION as $value){
                $id = $value['id'];
            }
            $sql = "SELECT {$this->name} FROM {$this->table} WHERE id_user = $id";

            if($order) $sql .= " ORDER BY category $order";
            $resultats = $this->pdo->query($sql);
            $datas = $resultats->fetchAll();
    
            return $datas;
        }
    }