<!DOCTYPE html>
<html>

    <head>
        <title> <!--Titulo-->
            Login
        </title>
        <link href="style.css" rel="stylesheet" type="text/css"> <!--Conexion con el codigo css-->
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
                    Login
                </h2>

            </div>

            <nav>

                <a href="login.php" class="link"> Login </a>
                <a href="registro.php" class="link"> Registro </a>

            </nav>

        </header>

        <form> <!--Formulario-->
 
            <div class="formulario">

                <div>

                    <center> <!--Imagen centrada-->
                        <img 
                        src="imagenes/icons8-user.png"
                        alt="icons8-user"
                        style="height: 7rem;">
                    </center>

                </div>

                <div>

                    <h1> <!--Titulo-->
                        Login
                    </h1>

                </div>

                <input 
                type="text" 
                placeholder="Emal" 
                required> <!--Se pide el nombre-->

                <input 
                type="password" 
                placeholder="Password" 
                required> <!--Se pide la contraseña-->

                <p id="recuperar">Recuperar
                    <a href="recupera.php">contraseña

                    </a>
                </p> <!--Liga a otra pag del proyecto-->

                <button type="submit"> <!--Boton -->
                    Ingresar
                </button>

                <p id="registrarse">
                    <a href="registro.php">Registerme

                    </a>
                </p> <!--Parrafo con una direccion a otra pag del proyecto-->

            </div>

        </form>

    </body>

</html>


