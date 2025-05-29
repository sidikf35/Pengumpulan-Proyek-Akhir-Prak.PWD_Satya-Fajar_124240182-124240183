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
    <title>TRASHtoTRUSH - Pengelolaan Sampah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .hero-section {
            background-image: url('26 Mei 2025, 20.21.00.png') no-repeat center center;
        }
    </style>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang</a>
                    </li>
                    <li class="nav-item">
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

    <!-- Hero Section -->
    <header class="hero-section" style="background-image: url('p.jpg');">
        <div class="overlay"></div>
        <div class="container text-center text-white">
            <h1 class="display-4">Solusi Pengelolaan Sampah Terpadu</h1>
            <p class="lead">Bersama kita wujudkan lingkungan yang bersih dan berkelanjutan</p>
            <a href="services.php" class="btn btn-success btn-lg">Pelajari Layanan Kami</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-trash-alt fa-3x text-success mb-3"></i>
                            <h4 class="card-title">Pemilahan Sampah</h4>
                            <p class="card-text">Pelajari cara memilah sampah organik dan anorganik untuk pengelolaan yang lebih efektif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-recycle fa-3x text-success mb-3"></i>
                            <h4 class="card-title">Daur Ulang</h4>
                            <p class="card-text">Temukan cara kreatif untuk mendaur ulang sampah menjadi barang yang bernilai ekonomis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-leaf fa-3x text-success mb-3"></i>
                            <h4 class="card-title">Kompos</h4>
                            <p class="card-text">Buat kompos dari sampah organik untuk menyuburkan tanaman dan mengurangi limbah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-success text-white">
        <div class="container text-center">
            <h2 class="mb-4">Dampak Sampah di Indonesia</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h3>67.8 juta</h3>
                    <p>Ton sampah per tahun</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3>40%</h3>
                    <p>Sampah dibuang ke TPA</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3>30%</h3>
                    <p>Sampah dibakar</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3>9%</h3>
                    <p>Sampah didaur ulang</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Bergabunglah dalam Gerakan Peduli Sampah</h2>
            <p class="lead mb-4">Mari bersama-sama menjaga lingkungan dengan mengelola sampah secara bertanggung jawab</p>
            <a href="contact.php" class="btn btn-success btn-lg">Hubungi Kami</a>
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