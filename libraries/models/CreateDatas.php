<?php
    namespace Models;
    class CreateDatas extends Model
    {
        /**
         * insertDatasFromCreateForm:
         * Insert value in database films or series
         * @param  mixed $name_input
         * @param  mixed $url_input
         * @param  mixed $category_input
         * @param  mixed $type_input
         * @param  mixed $session_user_id
         * @return bool
         */
        public function insertDatasFromCreateForm(string $name_input, string $url_input, string $category_input, string $type_input, string $session_user_id): bool
        {
            $query = $this->pdo->prepare("INSERT INTO videos SET
            name = :name,
            url = :url,
            category = :category,
            type = :type,
            id_user = :id_user");
            $query->execute([
                'name' => $name_input,
                'url'  => $url_input,
                'category' => $category_input,
                'type' => $type_input,
                'id_user' => $session_user_id
            ]);
            if($query->rowCount() === 1) return true;
        }
    }
?>