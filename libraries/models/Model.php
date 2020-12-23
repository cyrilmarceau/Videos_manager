<?php

    namespace Models;

    abstract class Model
    {
        protected $pdo;

        public function __construct()
        {
            $this->pdo = \Database::getPdo();
        }

        
        public function getIdUser()
        {
            $query = "SELECT id FROM users";
            $results = $this->pdo->query($query);
            $id = $results->fetch();
            return $id;
        }
        
        /**
         * getTable
         * Get all datas from a table
         * @param  mixed $table
         * @return array
         */
        public function getTable(string $table): array
        {
            foreach($_SESSION as $value){
                $id = $value['id'];
            }
            $sql = "SELECT * FROM $table WHERE id_user = $id";
    
            // On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
            $resultats = $this->pdo->query($sql);
            // On fouille le résultat pour en extraire les données réelles
            $datas = $resultats->fetchAll();
    
            return $datas;
        }
    }