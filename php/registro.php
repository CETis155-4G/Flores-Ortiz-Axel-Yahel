<?php
include "/conexion.php";
$db = connect();
$query = $db->query("select * from paises");
$countries = array();
while ($r = $query->fetch_object()) {
  $countries[] = $r;
}
;

?>

<!DOCTYPE html>
<html>

<head>
    <title> <!--Titulo-->
        Registro
    </title>
    <link href="style.css" rel="stylesheet" type="text/css"> <!--Conexion -->
</head>

<body background="imagenes/fondo.jpg"> <!--Pone una imagen de fondo-->

    <header> <!--Se pone la barra de menu que se encontraba en la pagina de inincio-->

        <link rel="stylesheet" href="styleInicio.css" type="text/css">

        <div class="logo">

            <a href="http://www.cetis155.edu.mx/">
                <img 
                src="imagenes/logo.png"
                alt="logo">
            </a>
            <h2 class="nombreCooperativa">
                Registro
            </h2>

        </div>

        <nav>

            <a href="login.php" class="link"> Login </a>
            <a href="registro.php" class="link"> Registro </a>


        </nav>

    </header>

    <form method="post"> <!--Formulario-->

        <div class="formularioRegistro" method="post"> 

            <h1> <!--Titulo-->
                Registro
            </h1>

            <input 
            type="text" 
            name="apPaterno"
            placeholder="Apellido paterno"> <!--Se piede le apellido paterno-->

            <input 
            type="text" 
            name="apMaterno"
            placeholder="Apellido materno"> <!--Se pide el apellido materno-->

            <input 
            type="text" 
            name="nombre"
            placeholder="Nombre"> <!--Se pide el nombre-->

            <input 
            type="text"
            name="telefono" 
            placeholder="Numero"> <!---Pide el numero-->

            <input 
            type="email" 
            name="email"
            placeholder="Email"> <!--Pide el email-->

            <input 
            type="password" 
            name="password"
            placeholder="Password"> <!--Pide la contraseña-->
            
            <button 
            name="registrar">  <!--Boton-->
                <a href="login.php">
                    Registrarme
                </a>
            </button>
            <?php
            include('registrar.php');
            ?>

        </div>

    </form>
    

</body>

</html>