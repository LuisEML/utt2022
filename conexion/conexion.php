<?php
     $servidor = "database-utt.mysql.database.azure.com";
     $usuario = "Administrador";
     $clave   = "UTTservidor2022";
     $bdName = "punto_venta";

    // $con = @mysqli_connect($servidor, $usuario, $clave,$bdName);   
    $con = mysqli_init();
    mysqli_ssl_set($conn,NULL,NULL,"ssl/BaltimoreCyberTrustRoot.crt.pem",NULL,NULL);
    mysqli_real_connect($con, $servidor, $usuario, $clave, $bdName, 3306, MYSQLI_CLIENT_SSL);
    
    
    if(!$con){
        echo "error conexion";
    }
?>
