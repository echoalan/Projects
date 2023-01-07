<form action="controller/insertar-turno.php" method="post" class="form">   
    <div class="casper-form">
     <div class="content-select">
            <p>Especialidad</p>
            <select name="especialidad">
                        <option value="Cardiologia" class="option"> <p>Cardiologia</p> </option>
                        <option value="Clinica Medica">Clinica Medica</option>
                        <option value="Dermatologia">Dermatologia</option>
                        <option value="Flebologia">Flebologia</option>
                        <option value="Gastroenterologia">Gastroenterologia</option>
                        <option value="Neumonologia y Alergias">Neumonologia y Alergias</option>
                        <option value="Neurologia">Neurologia</option>
                        <option value="Nutricionista">Nutricionista</option>
                        <option value="Odontologia">Odontologia</option>
                        <option value="Odontopediatria">Odontopediatria</option>
                        <option value="Oftalmologia">Oftalmologia</option>
                        <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                        <option value="Pediatria">Pediatria</option>
                        <option value="Traumatologia">Traumatologia</option>
                        <option value="Urologia">Urologia</option>    
            </select>
        </div>
        <div class="content-select">
            <p>Paciente</p>
            <select name="paciente">
                <?php 
                    include("model/config.php"); 
                    $consultita = "SELECT NOMBRE FROM pacientes";
                    $exConsultita = mysqli_query($conn, $consultita);
                    while ($tuplita = mysqli_fetch_row($exConsultita)){?>
                        <option value="<?php echo $tuplita[0]; ?>"><?php echo $tuplita[0]; ?></option> <?php
                    }
                    ?>
            </select>
        </div>
        <div class="content-input">
            <p>Dia</p>
            <input type="date" class="form-input" name="dia">
            <p>Hora</p>
            <input type="time" class="form-input" name="hora">
            <input type="submit" class="submit" value="Registrar">
        </div>    
    </div>
</form>