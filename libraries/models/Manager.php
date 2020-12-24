<?php
    namespace Models;

    class Manager extends Model
    {

        protected $table = 'videos';
        protected $name = '*';

        public function getVideos(): array
        {
            $videos = $this->getTable();
            return $videos;
        }

        public function delete(int $id)
        {
            $query = $this->pdo->prepare("DELETE FROM videos WHERE id = :id");
            $query->execute([
                'id' => $id
            ]);
        }

    }
?>