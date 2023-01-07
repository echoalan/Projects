<?php include("model/config.php"); ?>
    <div class="all-table">
        <div class="content-filter-form">
            <form action="index.php" method="post">
                <select name="especialidad">
                        <option value="Cardiologia">Cardiologia</option>
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
                <input type="submit" value="filtrar">
            </form>
        </div>

        <div class="table">
            <div class="header_table">
                <p># Turno</p>
                <p>Registrado por</p>
                <p>Paciente</p>
                <p>Dia</p>
                <p>Hora</p>
                <p>Especialidad</p>
                <p>Acciones</p>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $especiality = $_POST['especialidad'];    
                    $sql = "SELECT turnos.ID, registradores.NOMBRES, pacientes.NOMBRE, turnos.DIA, turnos.HORA, turnos.ESPECIALIDAD FROM turnos, registradores, pacientes WHERE turnos.REGISTRADOR = registradores.ID and turnos.PACIENTE = pacientes.ID and turnos.Especialidad = '$especiality' ORDER BY `turnos`.`ID` DESC";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {  ?>
                        <div class="body_table">
                            <p><?php echo $row['ID']?></p>
                            <p><?php echo $row['NOMBRES']?></p>
                            <p><?php echo $row['NOMBRE']?></p>
                            <p><?php echo $row['DIA']?></p>
                            <p><?php echo $row['HORA']?></p>
                            <p><?php echo $row['ESPECIALIDAD']?></p>
                            <p>Delete</p>
                        </div> <?php
                    }
                    $conn->close();
            }else{
                $sql = "SELECT turnos.ID, registradores.NOMBRES, pacientes.NOMBRE, turnos.DIA, turnos.HORA, turnos.ESPECIALIDAD FROM turnos, registradores, pacientes WHERE turnos.REGISTRADOR = registradores.ID and turnos.PACIENTE = pacientes.ID ORDER BY `turnos`.`ID` DESC";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {  ?>
                    <div class="body_table">
                        <p><?php echo $row['ID']?></p>
                        <p><?php echo $row['NOMBRES']?></p>
                        <p><?php echo $row['NOMBRE']?></p>
                        <p><?php echo $row['DIA']?></p>
                        <p><?php echo $row['HORA']?></p>
                        <p><?php echo $row['ESPECIALIDAD']?></p>
                        <p><a href="">Detalle</a></p>
                    </div> <?php
                    }
                $conn->close(); 
            } ?>
        </div>
    </div>

