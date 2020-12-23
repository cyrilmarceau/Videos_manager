<?php
    namespace Models;

    class Home extends Model
    {
        public function getVideos(): array {
            $series = $this->getTable('videos');
            return $series;
        }
    }
?>