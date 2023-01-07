<?php

        require_once("modelo/Videos_modelo.php");

        $videos = new Videos();

        $matrizVideo = $videos->getVideos();

        require_once("vista/video_vista.php");

        
?>