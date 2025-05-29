<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = "Harap isi semua kolom";
    } else {
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $subject, $message])) {
            $success = "Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.";
        } else {
            $error = "Terjadi kesalahan. Silakan coba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - TRASHtoTRUSH</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="solutions.php">Solusi</a>
                    </li>
                    <li class="nav-item active">
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
            <h1 class="display-4">Hubungi Kami</h1>
            <p class="lead">Kami siap membantu Anda dengan solusi pengelolaan sampah</p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 class="mb-4">Kirim Pesan</h2>
                    
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Kirim Pesan</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Informasi Kontak</h2>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Kantor Pusat</h5>
                            <address>
                                <p><i class="fas fa-map-marker-alt text-success mr-2"></i> Jl. Seturan Raya. 10, Yogyakarta</p>
                                <p><i class="fas fa-phone text-success mr-2"></i> (021) 1234-5678</p>
                                <p><i class="fas fa-envelope text-success mr-2"></i> info@trashtotrush.id</p>
                            </address>
                        </div>
                    </div>
                    
                    <h4 class="mb-3">Jam Operasional</h4>
                    <ul class="list-group mb-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Senin - Jumat
                            <span>08:00 - 17:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sabtu
                            <span>09:00 - 15:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Minggu
                            <span>Tutup</span>
                        </li>
                    </ul>
                    
                    <h4 class="mb-3">Ikuti Kami</h4>
                    <div class="social-icons">
                        <a href="#" class="text-success mr-3"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#" class="text-success mr-3"><i class="fab fa-twitter-square fa-2x"></i></a>
                        <a href="#" class="text-success mr-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-success"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Lokasi Kami</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <!-- Ganti src dengan URL Google Maps lokasi Anda -->
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4084989407!2d106.82596231476884!3d-6.2097337955145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4127c6420b3%3A0xd3b3a7ddb5c7b0eb!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1625647158335!5m2!1sid!2sid" allowfullscreen></iframe>
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
