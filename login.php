<!DOCTYPE html>

<?php

session_start();
if (isset($_SESSION['username'])) {
	# user tidak ditemukan di database. arahkan ke halaman login
	header('location:index.php');
	exit;
}

 //Variabel database atau inisialisasi parameter database
$servername = "nama_server";
    $username = "username";
    $password = "pass";
    $dbname = "nama_db";

 // Menghubungkan ke database
 $conn = mysqli_connect("$servername", "$username", "$password","$dbname");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AToM | AWOS Portable Category 2</title>

    <!-- ICON -->
    <link rel="shortcut icon" href="img/logo.png" />

    <!-- RESOURCES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- CSS FILE -->
    <link rel="stylesheet" href="styles/login-style.css">

</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="text-center mt-0 name" style="font-weight: 800;">
            AToM
        </div>
        <div class="text-center mt-1 name" style="font-size: 12px;">
            (Automated Technical of Measurement)
        </div>

        <?php
            if (isset($_GET['pesan'])){
        ?>
        <div class="alert alert-warning alert-dismissible fade show mt-2 mb-0" style="font-size: 14px;" role="alert">
            <strong>Login Gagal!</strong> <?php echo $_GET['pesan']; ?> 
        </div>
        <?php } ?>

        <form id="loginForm" action="cekLogin.php" method="post" class="p-3 mt-1">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user" style="font-size: 25px;"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key" style="font-size: 25px;"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-dark mt-3" name="btnLogin">Login</button>
        </form>
        
    </div>

    <script>
    // Mengambil referensi form
    var registerForm = document.getElementById("registerForm");

    // Menangani event submit form
    registerForm.addEventListener("submit", function(event) {
        // Cek apakah semua field sudah terisi
        if (!registerForm.userName.value || !registerForm.password.value || !registerForm["re-password"].value) {
            alert("Harap isi semua field");
            event.preventDefault(); // Mencegah pengiriman form jika belum lengkap
        }
    });
</script>

</body>
</html>
