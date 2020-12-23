<?php
    namespace Models;

    class EditDatas extends Model
    {
        
        /**
         * getById:
         * Get the videos by the id and table and display it in edit form
         * @param  mixed $id
         * @return array
         */
        public function getById(int $id): array
        {

            $sql = "SELECT * FROM videos WHERE id = $id";
            $resultats = $this->pdo->query($sql);
            $datas = $resultats->fetchAll();
    
            return $datas;
        }
        
        /**
         * updateDatasFromEditForm:
         * Send datas to database
         * @param  mixed $name_input
         * @param  mixed $url_input
         * @param  mixed $type_input
         * @param  mixed $id
         * @return void
         */
        public function updateDatasFromEditForm(string $name_input, string $url_input, string $category_input, string $type_input, string $timing_input, int $id)
        {
            $query = $this->pdo->prepare("UPDATE videos SET
            name = :name,
            url = :url,
            category = :category,
            type = :type,
            timing = :timing
            WHERE id = :id");

            $query->execute([
                'name' => $name_input,
                'url'  => $url_input,
                'category' => $category_input,
                'type' => $type_input,
                'timing' => $timing_input,
                'id' => $id
            ]);
            if($query->rowCount() === 1) return true;
        }
    }
?>