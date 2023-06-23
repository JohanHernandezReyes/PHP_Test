<?php
    $conn = new mysqli("localhost:3306", "root", "12345", "proyecto_citas");
    if($conn->connect_errno)
    {
        echo "Falla al conectarse a Mysql ( " . $conn->connect_errno . ") ". $conn->connect_error;
    }
    else
    {
        echo "Conexion exitosa! " . $conn->host_info . "\n";
    };
?>