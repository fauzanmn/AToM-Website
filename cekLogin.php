<?php

    //Variabel database atau inisialisasi parameter database
    $servername = "atom.inst2019.com";
    $username = "inst4770_ozan";
    $password = "NoPassPlease";
    $dbname = "inst4770_ozan";
   
    // Menghubungkan ke database
    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
   
    if(isset($_POST['btnLogin'])){
        $username=$_POST['userName'];
        $password=$_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
        $data = mysqli_fetch_array($query);

        if (mysqli_num_rows($query) == 1) {
            if (password_verify($password, $data['password'])) {
                // login valid
                session_start();
                $_SESSION['username'] = $data['username'];
                header('location:index.php');
            }else {
                // password salah
                header('location:login.php?pesan=Password Salah');
            }
        }else{
            // Username Salah
            header('location:login.php?pesan=Username Salah');
        }
    }


?>