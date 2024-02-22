<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
        // echo "Conectado!!";
    } else 
        echo "Erro";

    function menssagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
        $texto
        </div>";
    }
?>