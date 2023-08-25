<!DOCTYPE html>

<?php

session_start();
if (!isset($_SESSION['username'])) {
	# user tidak ditemukan di database. arahkan ke halaman login
	header('location:login.php');
	exit;
}

?>



<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/logo.png" />

	<title>AToM | AWOS Portable Category 2</title>

	<link href="styles/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	
	<script type="text/javascript" src="../jquery/jquery.min.js"></script>

	<!-- FONT AWESOME ICONS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">

	<!-- BOOTSTRAP ICONS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- MOMENT.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

	<!-- JQUERY JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<style>
    @media (max-width: 767px) {
        .row-metar {
            display: none;
        }
    }
	</style>


</head>

<body>
	<div class="wrapper">

		<!-- ********** SIDEBAR START ********** -->
		<div class="sidebar" id="side_nav">
			<div class="header-box px-3 pt-3 pb-4">
				<h1 class="fs-4 text-center"><a href="index.php"><img src="img/logo.png" alt="" id="logo"></a>AToM</h1>
				<button class="btn d-md-none d-block close-btn px-1 py-0"> <i class="bi bi-x fa-2x"></i>
				</button>
			</div>
			<ul class="list-unstyled px-3">
				<li class="active">
					<a href="index.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-speedometer2"></i> Dashboard</a>
				</li>
				<li class=""><a href="metar.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-airplane-engines"></i> METAR</a></li>
				<li class=""><a href="history.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-clock-history"></i> History</a></li>
				<li class=""><a href="api.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-braces"></i> JSON</a></li>
				<li class=""><a href="about-me.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-person-circle"></i> About Me</a></li>
			</ul>
			<hr style="color: white;">
			<ul class="list-unstyled px-3 mt-auto">
				<li class=""><a href="logout.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-box-arrow-right"></i> Logout</a></li>
			</ul>
		</div>
		<!-- ********** SIDEBAR END ********** -->

		<!-- MAIN CONTENT START -->
		<div class="main">
			<!-- NAVBAR START -->
			<nav class="navbar navbar-expand-lg d-xl-none">
				<div class="container-fluid d-flex justify-content-center">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
						aria-label="Toggle navigation">
						<i class="fas fa-bars fa-2x"></i>
					</button>
					<a class="navbar-brand fs-4 d-lg-none" href="#">
						<img class=" d-flex" src="img/logo.png" alt="" width="48" height="57">
					</a>
				</div>
			</nav>
			<!-- NAVBAR END -->

			<!-- CONTENT START -->
			<main class="content">
				<div class="container-fluid p-0">
					<div class="pagetitle">
						<h1 class="h3 mb-4"><strong>Dashboard</strong> - AWOS Portable Category 2 </h1>
					</div>
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
                            $ambildata = mysqli_query($connection, "SELECT * FROM datasensor ORDER BY id DESC LIMIT 1");
                            while ($tampildata = mysqli_fetch_array($ambildata)) {
                                $tanggal = date('d', strtotime($tampildata['tanggal']));
                                $bulan = date('m', strtotime($tampildata['tanggal']));
								$tahun = date('y', strtotime($tampildata['tanggal']));
								$jam = date('H', strtotime($tampildata['tanggal']));
								$menit = date('i', strtotime($tampildata['tanggal']));
								$detik = date('s', strtotime($tampildata['tanggal']));
								$wd = $tampildata['arahAngin'];
    							$ws = $tampildata['kecepatanAngin'];
								$vis = $tampildata['visibility'];
								$temp = $tampildata['suhu'];
								$dew = $tampildata['dewpoint'];
								$qnh = $tampildata['qnh'];
								$qfe = $tampildata['qfe'];
								$kelembapan = $tampildata['kelembapan'];
                                $metar = $tanggal . "" . $bulan . " " . $jam . "" . $menit ." WIND " . $wd . "/" . $ws . " VIS " . $vis . "M Sky Condition //// Temp/DEW " . $temp . "/" . $dew . " QNH " . $qnh . " QFE " . $qfe . " REMAKS ////"  ;
							};
							?>
					<!-- /* ROW 1 START */ -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
										<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Air Temperature</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-thermometer-half" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $temp; ?> °C</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Humidity</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-moisture" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $kelembapan; ?> %</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Visibility</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-binoculars" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $vis; ?> m</h1>
								</div>
							</div>
						</div>
					
					<!-- ROW 1 END -->

					<!-- ROW 2 START -->
					
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Dew Point</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="fas fa-tint" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $dew; ?> °C</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Wind Speed</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-wind" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $ws; ?> Knot</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Wind Direction</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="fas fa-compass" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $wd; ?> °</h1>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW 2 END -->

					<!-- ROW 3 START -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Air Pressure</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-speedometer" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $qfe; ?> mb</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">QNH</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-speedometer2" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $qnh; ?> mb</h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Tanggal</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-calendar-date" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $tanggal; ?>/<?php echo $bulan; ?>/<?php echo $tahun; ?></h1>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body" style="height: 135px;">
									<div class="row">
									<div class="col mt-0" style="margin-bottom:5px">
											<h5 class="card-title">Waktu</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="bi bi-clock" style="font-size: 24px;"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-1"><?php echo $jam; ?>:<?php echo $menit; ?>:<?php echo $detik; ?> WIB</h1>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW 3 END -->

					<!-- ROW 4 START -->
					<div class="row-metar">
					
						<div class="card my-1 mt-1 mb-1">
							<div class="card-body d-flex align-items-center justify-content-start" style="height: 70px;">
								<h5 class="card-title">METAR : </h5>
								<span style="font-size: 20px; margin-left: 10px;"><?php echo $metar; ?></span>

							</div>
						</div>
					
					</div>
					<!-- ROW 4 END -->
				</div>
			</main>
			<!-- CONTENT END -->

			<!-- FOOTER START -->
			<footer class="text-center text-lg-start">
				<!-- Copyright -->
				<div class="footer-text text-center p-3">
					© 2023 Copyright:
					<a href="https://github.com/fauzanmn" target="_blank"><strong>Fauzan Imanudin</strong><i
							class="bi bi-github"></i></a>
				</div>
				<!-- Copyright -->
			</footer>
			<!-- FOOTER END -->
		</div>
		<!-- MAIN CONTENT END -->

	</div>

	<!-- SCRIPT TANGGAL & WAKTU DASHBOARD -->
	<script>
		// Menggunakan Moment.js untuk mendapatkan tanggal saat ini
		var currentDate = moment().format('DD/MM/YYYY');
		// Memasukkan tanggal ke dalam elemen dengan ID "tanggalCard"
		document.getElementById('tanggalCard').textContent = currentDate;

		function updateClock() {
			var currentTime = moment().format('HH:mm:ss');
			document.getElementById('waktuCard').textContent = currentTime;
		}

		// Memperbarui waktu setiap detik (1000 milidetik)
		setInterval(updateClock, 1000);
	</script>

	<!-- SCRIPT TANGGAL & WAKTU METAR -->
	<script>
		// Menggunakan Moment.js untuk mendapatkan tanggal saat ini
		var currentDate = moment().format('DDMM');
		// Memasukkan tanggal ke dalam elemen dengan ID "tanggalCard"
		document.getElementById('tanggalMetar').textContent = currentDate;

		function updateClock() {
			var currentTime = moment().format('HHmm');
			document.getElementById('waktuMetar').textContent = currentTime;
		}

		// Memperbarui waktu setiap detik (1000 milidetik)
		setInterval(updateClock, 1000);
	</script>


	<script>
		$(".sidebar ul li").on('click', function () {
			$(".sidebar ul li.active").removeClass('active');
			$(this).addClass('active');
		});

		$('.navbar-toggler').on('click', function () {
			$('.sidebar').addClass('active');
		});

		$('.close-btn').on('click', function () {
			$('.sidebar').removeClass('active');
		});
	</script>

</body>

</html>