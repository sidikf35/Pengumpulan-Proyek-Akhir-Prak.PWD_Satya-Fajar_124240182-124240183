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
    <title>Tentang Kami - TRASHtoTRUSH</title>
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
                    <li class="nav-item active">
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

    <!-- Page Header -->
    <header class="page-header" style="background-image: url('p.jpg');">
        <div class="overlay"></div>
        <div class="container text-center text-white">
            <h1 class="display-4">Tentang Kami</h1>
            <p class="lead">Mengenal lebih dekat TRASHtoTRUSH dan misi kami</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <img src="siapakami.png" alt="Tentang TRASHtoTRUSH" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Siapa Kami?</h2>
                    <p>TRASHtoTRUSH adalah organisasi yang berdedikasi untuk mengatasi masalah pengelolaan sampah di Indonesia. Didirikan pada tahun 2015, kami telah bekerja sama dengan berbagai komunitas, pemerintah daerah, dan sektor swasta untuk menciptakan solusi pengelolaan sampah yang berkelanjutan.</p>
                    <p>Kami percaya bahwa pengelolaan sampah yang baik adalah tanggung jawab bersama. Melalui edukasi, inovasi, dan kolaborasi, kami berusaha untuk mengubah cara masyarakat memandang dan mengelola sampah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h3 class="card-title text-success">Visi</h3>
                            <p class="card-text">Menjadi pionir dalam menciptakan ekosistem pengelolaan sampah yang berkelanjutan dan mendorong masyarakat untuk mengadopsi gaya hidup ramah lingkungan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h3 class="card-title text-success">Misi</h3>
                            <ul class="card-text">
                                <li>Mengedukasi masyarakat tentang pentingnya pengelolaan sampah yang baik</li>
                                <li>Mengembangkan solusi inovatif untuk mengurangi sampah</li>
                                <li>Membangun kemitraan dengan berbagai pihak untuk menciptakan dampak yang lebih besar</li>
                                <li>Mendorong kebijakan yang mendukung pengelolaan sampah berkelanjutan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Tim Kami</h2>
            <div class="row justify-content-around">
                <div class="col-md-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="rounded-circle bg-success text-white mx-auto mb-3 team-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h5 class="card-title">Satya Adi Wicaksana</h5>
                            <p class="card-text text-muted">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="rounded-circle bg-success text-white mx-auto mb-3 team-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h5 class="card-title">Fajar Sidiq Hariyanto</h5>
                            <p class="card-text text-muted">Program Director</p>
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