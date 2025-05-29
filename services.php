<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - TRASHtoTRUSH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="ikon2.png" alt="Logo" style="height: 50px; margin-right: 8px;"> TRASHtoTRUSH
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solutions.php">Solusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header" style="background-image: url('p.jpg');">
        <div class="overlay"></div>
        <div class="container text-center text-white">
            <h1 class="display-4">Layanan Kami</h1>
            <p class="lead">Solusi pengelolaan sampah untuk berbagai kebutuhan</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-4">
                    <img src="pengumpulan sampah.jpeg" alt="Pengumpulan Sampah" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Pengumpulan Sampah</h2>
                    <p>Kami menyediakan layanan pengumpulan sampah terjadwal untuk perumahan, apartemen, dan bisnis. Tim kami akan mengumpulkan sampah yang sudah dipilah dan memastikan sampah tersebut diproses dengan benar.</p>
                    <ul class="list-unstyled service-features">
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Pengumpulan terjadwal dan tepat waktu</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Pemilahan sampah organik dan anorganik</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Pelaporan berkala tentang volume sampah</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Armada ramah lingkungan</li>
                    </ul>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 order-md-2 mb-4">
                    <img src="layanan.png" alt="Daur Ulang" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="mb-3">Daur Ulang</h2>
                    <p>Kami memiliki fasilitas daur ulang modern yang dapat memproses berbagai jenis sampah anorganik seperti plastik, kertas, kaca, dan logam. Sampah-sampah ini akan diubah menjadi bahan baku yang dapat digunakan kembali.</p>
                    <ul class="list-unstyled service-features">
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Pemrosesan berbagai jenis sampah anorganik</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Teknologi daur ulang modern</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Sertifikasi proses ramah lingkungan</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Pengurangan jejak karbon</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="pengomposan.jpeg" alt="Pengomposan" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Pengomposan</h2>
                    <p>Sampah organik yang kami kumpulkan akan diproses menjadi kompos berkualitas tinggi. Kompos ini dapat digunakan untuk pertanian, perkebunan, atau taman-taman kota, sehingga menciptakan siklus nutrisi yang berkelanjutan.</p>
                    <ul class="list-unstyled service-features">
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Kompos berkualitas tinggi</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Proses pengomposan yang dipercepat</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Bebas dari bahan kimia berbahaya</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i> Distribusi ke petani lokal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Paket Layanan</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-header bg-success text-white text-center">
                            <h4 class="my-0">Paket Rumah Tangga</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center">Rp 150.000<small class="text-muted">/bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="fas fa-check text-success mr-2"></i> Pengambilan 2x seminggu</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Pemilahan sampah</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Laporan bulanan</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Konsultasi pengelolaan sampah</li>
                            </ul>
                            <div class="text-center">
                                <a href="contact.php" class="btn btn-outline-success">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow border-success">
                        <div class="card-header bg-success text-white text-center">
                            <h4 class="my-0">Paket Bisnis</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center">Rp 500.000<small class="text-muted">/bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="fas fa-check text-success mr-2"></i> Pengambilan setiap hari</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Pemilahan sampah</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Laporan mingguan</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Konsultasi dan pelatihan</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Sertifikat bisnis ramah lingkungan</li>
                            </ul>
                            <div class="text-center">
                                <a href="contact.php" class="btn btn-success">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-header bg-success text-white text-center">
                            <h4 class="my-0">Paket Korporat</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center">Custom<small class="text-muted">/bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="fas fa-check text-success mr-2"></i> Pengambilan sesuai kebutuhan</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Sistem pengelolaan sampah khusus</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Laporan detail dan analisis</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Program CSR lingkungan</li>
                                <li><i class="fas fa-check text-success mr-2"></i> Konsultasi berkelanjutan</li>
                            </ul>
                            <div class="text-center">
                                <a href="contact.php" class="btn btn-outline-success">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>TRASHtoTRUSH</h5>
                    <p>Solusi pengelolaan sampah terpadu untuk lingkungan yang lebih bersih dan berkelanjutan.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.php" class="text-white">Home</a></li>
                        <li><a href="about.php" class="text-white">Tentang</a></li>
                        <li><a href="services.php" class="text-white">Layanan</a></li>
                        <li><a href="solutions.php" class="text-white">Solusi</a></li>
                        <li><a href="contact.php" class="text-white">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Kontak</h5>
                    <address>
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Jl. Seturan Raya. 10, Yogyakarta</p>
                        <p><i class="fas fa-phone mr-2"></i> (021) 1234-5678</p>
                        <p><i class="fas fa-envelope mr-2"></i> info@trashtotrush.id</p>
                    </address>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> TRASHtoTRUSH. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
