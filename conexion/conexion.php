<?php
    $servidor = "database-utt.mysql.database.azure.com";
    $usuario = "Administrador";
    $clave   = "UTTservidor2022";
    $bdName = "punto_venta";


    mysqli_ssl_set($con,NULL,NULL,"ssl/BaltimoreCyberTrustRoot.crt.pem",NULL,NULL);
    $con = @mysqli_connect($servidor, $usuario, $clave,$bdName);
    

    if(!$con){
        echo "error conexion";
    }
?>