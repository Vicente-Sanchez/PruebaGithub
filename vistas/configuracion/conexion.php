<?php 

    //Conecta con la base de datos
    $conn = mysqli_connect('db4free.net','progweb1','12345678', 'pizzaprogweb');

    //Verifica la conexion
    if(!$conn){

        echo 'Error: ' . mysqli_connect_error();

    }

?>