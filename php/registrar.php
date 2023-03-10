<?php
include "conection.php";

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
        $numero = trim($_POST['telefono']);
        $appa = trim($_POST['apPaterno']);
        $amma = trim($_POST['apMaterno']);
        $password = trim($_POST['password']);
	    $consulta = "INSERT INTO users (`email`, `password`, `nombre`, `apPaterno`, `apMaterno`, `telefono`) 
        VALUES ('$email','$password','$name','$appa','$amma','$numero')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
           }
           else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    
}}

?>