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
		@media (min-width: 300px) {
        .d-flex {
            display: flex;
            flex-wrap: wrap;
			align-items: stretch;
        }

        #foto {
            border-radius: 20px;
            width: 100%;
            height: auto;
            margin-right: 0;
        }

        #kartu {
            width: 100%;
            margin-top: 20px;
        }
		h1{
			font-size: 30px;
			margin-bottom: 18px;
		}

		.sub{
			margin-bottom: 5px;
			font-size: 16px;
			font-weight: 500;
		}

		h2{
			font-size: 24px;
			margin-bottom:10px;
		}

		h3{
			font-size:14px;
			margin-bottom: 15px;
		}

		h4{
			margin-bottom: 40px;
			text-indent: 30px; 
		}
		.d-flex .bi,
		.kontak{
			display : none;
		}
		}



        @media (min-width: 600px) {
			.kontak {
				display: flex;
				justify-content: center;
			}

			.kontak .bi {
				display: inline-block;
			}

			h1{
				font-size: 42px;
			}

			.sub{
				margin-bottom: 30px;
				font-size: 32px;
			}

			h2{
				font-size: 30px;
				margin-bottom:10px;
			}

			h3{
				font-size:20px;
				margin-bottom: 24px;
			}

			h4{
				margin-bottom: 50px; 
				text-indent: 50px;
				font-size: 20px
			}

            .d-flex {
                flex-wrap: nowrap;
            }

            #foto {
                width: 367px;
                height: 549px;
                margin-right: 50px;
            }

            #kartu {
                width: calc(100% - 417px);
                margin-top: 0;
				height: 100%;
            }
        }
    </style>

</head>

<body>
    <div class="wrapper">

        <!-- ********** SIDEBAR START ********** -->
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-4">
                <h1 class="fs-4 text-center"><a href="index.php"><img src="img/logo.png" alt=""
                            id="logo"></a>AToM
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0">
                    <i class="bi bi-x fa-2x" style="color: inherit;"></i>
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
                <li class=""><a href="api.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
                            class="bi bi-braces"></i> JSON</a></li>
                <li class="active"><a href="about-me.php" class="text-decoration-none px-3 py-2 d-block nav-link"><i
                            class="bi bi-person-circle"></i> About Me</a></li>
            </ul>
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
                        <h1 class="h3 mb-4"><strong>About Me</strong></h1>
                    </div>
                    <div class="d-flex">
                        <img src="img/fauzan_new.jpg" alt="" id="foto">
                        <div class="card" id="kartu">
                            <div class="card-body">
                                <h1
                                    style="text-align: center; font-weight: 800;">
                                    AToM</h1>
                                <h1 class="sub"
                                    style="text-align: center; font-weight: 800;">
                                    (Automated
                                    Technical of Measurement)</h1>
                                <h4
                                    style="text-align: justify; font-weight: 500;">
                                    AToM (Automated
                                    Technical of
                                    Measurement) merupakan sebuah website yang dirancang untuk memonitoring hasil
                                    pengamatan parameter cuaca dari AWOS Portabel Kategori 2. Terdapat 8 parameter
                                    cuaca
                                    yang ditampilkan pada website AToM yaitu Suhu, Dew Point, Kelembapan Udara, Arah
                                    Angin, Kecepatan Angin, Tekanan Udara, QNH, dan Visibility.</h4>
                                <h2
                                    style="text-align: center; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
                                    Fauzan Imanudin</h2>
                                <h3
                                    style="text-align: center; font-weight: 400; font-family: Arial, Helvetica, sans-serif;">
                                    INSTRUMENTASI-MKG</h3>
									<h5 class="kontak mt-4" style="text-align: center; font-size: 18px;">Contact Us :</h5>
									<div class="d-flex mb-0 justify-content-center kontak">
										<a style="margin-right:10px" href="https://mail.google.com/mail/?view=cm&to=fauzanimanudin9g%40gmail.com&su=AToM%20|%20AWOS%20Portable%20Category%202"
											target="_blank"><i class="bi bi-google fa-2x"></i></a>
										<a href="https://github.com/fauzanmn" target="_blank"><i class="bi bi-github fa-2x"></i></a>
									</div>

                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            <footer class="text-center text-lg-start">
                <!-- Copyright -->
                <div class="footer-text text-center p-3">
                    © 2023 Copyright:
                    <a href="https://github.com/fauzanmn" target="_blank"><strong>Fauzan Imanudin</strong>
                        <i class="bi bi-github"></i></a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- FOOTER END -->
        </div>
        <!-- MAIN CONTENT END -->

    </div>

    <script src="js/app.js"></script>

    <script>
        window.addEventListener('load', function () {
            var fotoHeight = document.getElementById('foto').clientHeight; // Mendapatkan tinggi foto
            var kartu = document.getElementById('kartu');
            kartu.style.height = fotoHeight + 'px'; // Mengatur tinggi kartu sama dengan tinggi foto
        });
    </script>

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
