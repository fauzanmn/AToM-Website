<?php
// Koneksi ke database
$servername = "atom.inst2019.com";
$username = "inst4770_ozan";
$password = "NoPassPlease";
$dbname = "inst4770_ozan";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Query data dari tabel MySQL dengan hanya mengambil 5 data teratas
$query = 'SELECT * FROM datasensor ORDER BY id DESC LIMIT 15';
$result = mysqli_query($connection, $query);

// Membuat array untuk menampung data
$data = array();

// Mengambil data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
    $data['DataAWOS'][] = $row;
}

// Menutup koneksi ke database
mysqli_close($connection);

// Mengubah array menjadi format JSON
$jsonData = json_encode($data);

// Menampilkan JSON
header('Content-Type: application/json');
echo $jsonData;
?>
