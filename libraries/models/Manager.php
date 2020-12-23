<?php
    namespace Models;

    class Manager extends Model
    {

        
        public function getVideos(): array
        {
            $videos = $this->getTable('videos');
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