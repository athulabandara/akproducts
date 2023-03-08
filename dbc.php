<?php
    $serverName ='localhost';
    $userName='root';
    $password ='';
    $dbName='AKproduction';
    $con=mysqli_connect($serverName,$userName,$password,$dbName);
    if ($con){
        echo "successfully";
    }