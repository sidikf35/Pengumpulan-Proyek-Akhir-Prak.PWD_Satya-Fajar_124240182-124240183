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
    <title>Solusi - TRASHtoTRUSH</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Layanan</a>
                    </li>
                    <li class="nav-item active">
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
            <h1 class="display-4">Solusi Pengelolaan Sampah</h1>
            <p class="lead">Inovasi untuk mengatasi masalah sampah</p>
        </div>
    </header>

    <!-- Solutions Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-4">
                    <img src="bank sampah.jpg" alt="Bank Sampah" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Bank Sampah</h2>
                    <p>Bank Sampah adalah solusi inovatif yang memungkinkan masyarakat untuk menyetor sampah yang sudah dipilah dan mendapatkan kompensasi finansial. Sistem ini tidak hanya mengurangi volume sampah yang berakhir di TPA, tetapi juga memberikan nilai ekonomi pada sampah.</p>
                    <h5 class="mt-4">Manfaat Bank Sampah:</h5>
                    <ul>
                        <li>Mengurangi volume sampah di TPA</li>
                        <li>Memberikan nilai ekonomi pada sampah</li>
                        <li>Meningkatkan kesadaran masyarakat tentang pemilahan sampah</li>
                        <li>Menciptakan lapangan kerja baru</li>
                    </ul>
                    <p>TRASHtoTRUSH telah membantu mendirikan lebih dari 50 Bank Sampah di berbagai wilayah di Indonesia, dengan total lebih dari 10.000 nasabah aktif. Program ini telah berhasil mengurangi volume sampah yang berakhir di TPA hingga 30% di wilayah-wilayah tersebut.</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 order-md-2 mb-4">
                    <img src="komunitas.jpeg" alt="Komposting Komunitas" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="mb-3">Komposting Komunitas</h2>
                    <p>Program Komposting Komunitas kami memungkinkan masyarakat untuk mengolah sampah organik menjadi kompos yang bermanfaat. Kami menyediakan pelatihan, peralatan, dan pendampingan untuk memastikan program ini berjalan dengan baik.</p>
                    <h5 class="mt-4">Manfaat Komposting Komunitas:</h5>
                    <ul>
                        <li>Mengurangi sampah organik yang berakhir di TPA</li>
                        <li>Menghasilkan kompos berkualitas untuk pertanian urban</li>
                        <li>Mengurangi emisi gas metana dari sampah organik</li>
                        <li>Membangun kebersamaan dalam komunitas</li>
                    </ul>
                    <p>Saat ini, kami telah mendampingi lebih dari 100 komunitas dalam menjalankan program komposting, dengan total produksi kompos mencapai 500 ton per tahun.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="edukasi.jpeg" alt="Edukasi dan Kampanye" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Edukasi dan Kampanye</h2>
                    <p>Kami percaya bahwa edukasi adalah kunci untuk mengubah perilaku masyarakat terhadap sampah. Program edukasi dan kampanye kami mencakup berbagai kegiatan seperti workshop, seminar, kunjungan sekolah, dan kampanye media sosial.</p>
                    <h5 class="mt-4">Fokus Program Edukasi:</h5>
                    <ul>
                        <li>Pemilahan sampah dari sumbernya</li>
                        <li>Pengurangan penggunaan plastik sekali pakai</li>
                        <li>Daur ulang dan upcycling</li>
                        <li>Gaya hidup minim sampah (zero waste lifestyle)</li>
                    </ul>
                    <p>Setiap tahun, kami menjangkau lebih dari 50.000 orang melalui program edukasi dan kampanye kami, dengan fokus utama pada generasi muda sebagai agen perubahan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Kisah Sukses</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Kampung Hijau Surabaya</h5>
                            <p class="card-text">Kampung Hijau di Surabaya berhasil mengurangi volume sampah hingga 70% melalui program Bank Sampah dan komposting komunitas yang kami fasilitasi. Kini kampung tersebut menjadi percontohan pengelolaan sampah berbasis masyarakat.</p>
                        </div>
                        <div class="card-footer bg-success text-white">
                            <small>Implementasi: 2018</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">SD Cinta Lingkungan Jakarta</h5>
                            <p class="card-text">Melalui program edukasi kami, SD Cinta Lingkungan di Jakarta berhasil menerapkan sistem pemilahan sampah yang efektif dan mengurangi penggunaan plastik sekali pakai hingga 90% di lingkungan sekolah.</p>
                        </div>
                        <div class="card-footer bg-success text-white">
                            <small>Implementasi: 2019</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Pasar Tradisional Bandung</h5>
                            <p class="card-text">Kami berhasil mengubah pengelolaan sampah di salah satu pasar tradisional terbesar di Bandung. Kini, 80% sampah organik dari pasar tersebut diolah menjadi kompos, dan sampah anorganik dipilah untuk didaur ulang.</p>
                        </div>
                        <div class="card-footer bg-success text-white">
                            <small>Implementasi: 2020</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-success text-white">
        <div class="container text-center">
            <h2 class="mb-4">Tertarik Menerapkan Solusi Kami?</h2>
            <p class="lead mb-4">Kami siap membantu Anda mengatasi masalah pengelolaan sampah di komunitas, sekolah, atau bisnis Anda</p>
            <a href="contact.php" class="btn btn-light btn-lg">Hubungi Kami Sekarang</a>
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
