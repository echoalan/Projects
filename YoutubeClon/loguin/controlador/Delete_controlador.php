<?php

        require_once ("../modelo/Videos_modelo.php");

        $id = $_GET['id'];

        $video = new Videos();

        $deleteLastId = $video->deleteVideos($id);

        

?>