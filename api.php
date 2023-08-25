<!DOCTYPE html>
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
		/* Gaya Tabel */
		table {
		width: 100%;
		border-collapse: collapse;
		border: 1px solid #666780;
		}

		table th,
		table td {
		padding: 10px;
		text-align: center;
		border: 1px solid #666780;
		}

		table th {
		background-color: #2b2c40;
		color: white;
		font-weight: bold;
		}

		table td {
		background-color: #2b2c40;
		color: white;
		}

		/* Gaya Tabel Responsif */
		.table-responsive {
		overflow-x: auto;
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
				<li class="">
					<a href="index.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-speedometer2"></i> Dashboard</a>
				</li>
				<li class=""><a href="metar.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-airplane-engines"></i> METAR</a></li>
				<li class=""><a href="history.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-clock-history"></i> History</a></li>
				<li class="active"><a href="api.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-braces"></i> JSON</a></li>
				<li class=""><a href="about-me.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
							class="bi bi-person-circle"></i> About Me</a></li>
			</ul>
			<hr style="color: aliceblue;">
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
						<h1 class="h3 mb-4"><strong>Data JSON (API)</strong> - AWOS Portable Category 2 </h1>
					</div>
					<table class="table">
                        <thead style="font-size:24px;">
                          <tr>
						  	<th style="width:50px" scope="col">No</th>
                            <th scope="col" style="width: 800px;">Data</th>
                            <th scope="col">Nama File</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  	<th scope="row">1</th>
                            <th>Data AWOS Portabel Kategori 2 Terbaru</th>
                            <td style="text-align: center;"><a href="json1data.php" target="_blank" style="text-decoration: underline; color:#0BB0B0">dataawosterbaru.json</a></td>
                          </tr>
                          <tr>
						  	<th scope="row">2</th>
                            <th>Daftar 5 Data AWOS Portabel Kategori 2 Terbaru</th>
                            <td style="text-align: center;"><a href="json5data.php" target="_blank" style="text-decoration: underline; color:#0BB0B0">dataawosterbaru(5).json</a></td>
                          </tr>
						  <tr>
						  	<th scope="row">3</th>
                            <th>Daftar 10 Data AWOS Portabel Kategori 2 Terbaru</th>
                            <td style="text-align: center;"><a href="json10data.php" target="_blank" style="text-decoration: underline; color:#0BB0B0">dataawosterbaru(10).json</a></td>
                          </tr>
						  <tr>
						  	<th scope="row">4</th>
                            <th>Daftar 15 Data AWOS Portabel Kategori 2 Terbaru</th>
                            <td style="text-align: center;"><a href="json15data.php" target="_blank" style="text-decoration: underline; color:#0BB0B0">dataawosterbaru(15).json</a></td>
                          </tr>
						  <tr>
						  	<th scope="row">5</th>
                            <th>Daftar 18 Data AWOS Portabel Kategori 2 Terbaru</th>
                            <td style="text-align: center;"><a href="json18data.php" target="_blank" style="text-decoration: underline; color:#0BB0B0">dataawosterbaru(18).json</a></td>
                          </tr>
                        </tbody>
                      </table>
				</div>
			</main>
			<!-- CONTENT END -->

			<!-- FOOTER START -->
			<footer class="text-center text-lg-start">
				<!-- Copyright -->
				<div class="footer-text text-center p-3">
				  © 2023 Copyright:
				  <a href="https://github.com/fauzanmn" target="_blank"><strong>Fauzan Imanudin</strong><i class="bi bi-github"></i></a>
				</div>
				<!-- Copyright -->
			  </footer>
			<!-- FOOTER END -->
		</div>
		<!-- MAIN CONTENT END -->

	</div>

	<script src="js/app.js"></script>

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