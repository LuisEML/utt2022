<?php
    // $servidor = "database-utt.mysql.database.azure.com";
    // $usuario = "Administrador";
    // $clave   = "UTTservidor2022";
    // $bdName = "punto_venta";

    // $con = @mysqli_connect($servidor, $usuario, $clave,$bdName);   
    $con = mysqli_init();
    mysqli_ssl_set($con,NULL,NULL,"ssl/BaltimoreCyberTrustRoot.crt.pem",NULL,NULL);
    mysqli_real_connect($con, "database-utt.mysql.database.azure.com", "Administrador", "UTTservidor2022", "punto_venta", 3306, MYSQLI_CLIENT_SSL);
    
    
    if(!$con){
        echo "error conexion";
    }
?>