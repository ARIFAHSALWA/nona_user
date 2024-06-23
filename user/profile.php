<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nonariwa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mendapatkan data pengguna dari database
$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1"; // Mengambil data pengguna terbaru
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data setiap baris
    $user = $result->fetch_assoc();
} else {
    echo "Tidak ada data pengguna.";
}

// Menutup koneksi ke database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #FAFAD2, #FFD1D1, #A87676, #FFD0D0); /* Menggunakan palet warna yang diinginkan */
            color: #333; /* Warna teks di atas latar belakang */
            font-family: Arial, sans-serif; /* Jenis font */
        }
        .container {
            padding-top: 50px; /* Atur jarak dari bagian atas */
        }
        .card {
            margin-top: 30px; /* Atur jarak antar card */
        }
        .btn-primary {
            background-color: #fff; /* Warna tombol utama */
            border-color: #fff; /* Warna border tombol utama */
            color: #FFA500; /* Warna teks tombol utama */
        }
        .btn-primary:hover {
            background-color: #FF6347; /* Warna saat hover pada tombol utama */
            border-color: #FF6347; /* Warna border saat hover pada tombol utama */
            color: #fff; /* Warna teks saat hover pada tombol utama */
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="index_user.php">Nonariwa Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php#gallery">Our Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php#review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php#contact">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center mb-4">User Profile</h1>
    <?php if(isset($user)) : ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Form untuk mengubah foto profil -->
                    <form action="upload_photo.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="photo">Upload Photo Profile:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Full Name: <?php echo $user['username']; ?></h5>
                    <h5 class="card-text">Gender: <?php echo $user['gender']; ?></h5>
                    <h5 class="card-text">Date of Birth: <?php echo $user['birthday']; ?></h5>
                    <h5 class="card-text">Mobile Phone: <?php echo $user['mobile_phone']; ?></h5>
                    <h5 class="card-text">Email: <?php echo $user['email']; ?></h5>
                </div>
            </div>
            <!-- Form untuk mengubah nama dan nomor HP -->
            <div class="card">
                <div class="card-body">
                    <form action="update_profile.php" method="post">
                        <div class="form-group">
                            <label for="new_name">New Full Name:</label>
                            <input type="text" class="form-control" id="new_name" name="new_name" required>
                        </div>
                        <div class="form-group">
                            <label for="new_phone">New Mobile Phone:</label>
                            <input type="tel" class="form-control" id="new_phone" name="new_phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
