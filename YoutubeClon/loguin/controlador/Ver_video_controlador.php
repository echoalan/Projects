<?php


    include_once('modelo/Videos_modelo.php');

    $video = new Videos();

    $idVideo = $_GET['id'];

    $probando = $video->seeVideo($idVideo);

    include_once('vista/ver_video.php');
    

?>