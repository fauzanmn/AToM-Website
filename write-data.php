<?php

    //Variabel database atau inisialisasi parameter database
    $servername = "atom.inst2019.com";
    $username = "inst4770_ozan";
    $password = "NoPassPlease";
    $dbname = "inst4770_ozan";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    // Prepare the SQL statement

    $var1 = $_GET['data1'];
    $var2 = $_GET['data2'];
    $var3 = $_GET['data3'];
    $var4 = $_GET['data4'];
    $var5 = $_GET['data5'];
    $var6 = $_GET['data6'];
    $var7 = $_GET['data7'];
    $var8 = $_GET['data8'];

    
    $result = mysqli_query ($conn,"INSERT INTO datasensor (suhu, dewpoint, kelembapan, arahAngin, kecepatanAngin, qfe,  qnh,  visibility ) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
?>