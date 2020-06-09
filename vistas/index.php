<?php

    include('configuracion/conexion.php');
    $sql = 'SELECT title, ingredients, id FROM pizzas';
    $result = mysqli_query($conn, $sql);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    print_r($pizzas);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Imagen</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    
    <body>

        <h1>Prueba Github</h1>

    </body>

</html>