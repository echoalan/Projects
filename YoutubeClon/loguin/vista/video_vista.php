            
   <?php
   
        foreach($matrizVideo as $registro){
            ?>
            <div class="video-tajet">
                    <a href="ver.php?id=<?php echo $registro['idVideo']; ?>" class="a-ver-video">
                        <div class="content-video">
                            <div class="casper-video">
                                <video src="../../../archivos/<?php echo $registro['nombreArchivo']?>">
                            
                                </video>
                            </div>
                        </div>
                    
                        <div class="footer-tarjet">
                            
                                <div class="content-perfil">
                                    <img src="images/perfilpersona.png">
                                </div>

                                <div class="content-title">
                                    <h3 class="title-video"><?php echo $registro['tituloVideo'];?></h3>
                                    <div class="footer-title">
                                        <p class="usuario-video"><?php echo $registro['nombreUsuario'];?></p>
                                        <p class="vistas-video">356,532 vistas</p>
                                    </div>
                                </div>
                        
                        </div>
                    </a>
            </div>
   
            <?php
        }
        
   
   ?> 
