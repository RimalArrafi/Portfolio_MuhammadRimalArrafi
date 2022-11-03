<?php
    $serverName = "sql310.epizy.com";
    $userName = "epiz_32918249";
    $password = "DCREG5aYDz0FHF";
    $dbName ="epiz_32918249_portfolio";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);


        if (!$conn) {
            die("Koneksi error" . mysqli_connect_error());
        }
    
?>