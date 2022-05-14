<?php
    $serverName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "bikeking";

    $con = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName );
    if(mysqli_connect_errno()){
        echo "Failed to connect!";
    }
    echo "Connection success";

?>