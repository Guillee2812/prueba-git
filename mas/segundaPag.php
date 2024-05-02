<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "prueba";
    
    $conexion = mysqli_connect($server,$user,$pass,$database);

    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['pass'];

    /* 
    echo "<h3>Su usuario es: </h3>" . $usuario;
    echo "<h3>Su contraseña es: </h3>" . $password;

    if ($usuario = "admin" and $password = "admin") {
        echo "<h2> Usted esta autorizado </h2>";
    }else{
        echo "<h2> Usuario o contraseña incorrecto </h2>";
    } */

    $consulta = "SELECT * from usuarios WHERE usuario = '$usuario' and password = '$password'";

    
    $respuesta = mysqli_query($conexion, $consulta);

    $row = mysqli_fetch_array($respuesta);

    if (!$row){

        echo "<h2>Usuario no encontrado..,</h2>";
        echo "<a href='../index.html'>Volver atras</a>";

    }else{

        echo "<h1>Bienvenido a la segunda pagina...</h1>";

        echo "<b> ID:</b> ". $row['id_usuario']. " ";
        echo "<br>";
        echo "<b> Usuario: </b>". $row['usuario']. " ";
        echo "<br>";
        echo "<b> Nombre Completo: </b>". $row['nombre_comp']. " ";
        echo "<br>";
        echo "<b> Rol: </b>". $row['id_rol']. "<br>";
        
    }

    
?>