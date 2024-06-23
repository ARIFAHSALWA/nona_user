<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nonariwa"; // Ganti "nama_database" dengan nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menangani permintaan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $makeup_category = $_POST['makeup-category'];
    $events = $_POST['events'];
    $date = $_POST['date']; // Menggunakan input terpisah untuk tanggal
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Menyiapkan dan mengeksekusi pernyataan SQL untuk menyimpan pemesanan ke dalam database
    $stmt = $conn->prepare("INSERT INTO bookings (name, number, email, makeup_category, events, date, address, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $number, $email, $makeup_category, $events, $date, $address, $message);

    if ($stmt->execute()) {
        // Pemesanan berhasil disimpan, arahkan ke WhatsApp
        echo "<script>alert('Pemesanan berhasil disimpan. Terima kasih!');</script>";
        echo "<script>window.location.href='https://api.whatsapp.com/send?phone=6285156440000';</script>";
        exit(); // Pastikan tidak ada output lain sebelum redirect
    } else {
        // Menampilkan pesan kesalahan
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
}

// Menutup koneksi ke database
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nonariwa Beauty</title>
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
  .heading {
    font-size: 2.5rem;
  }
  .form-group label {
    font-weight: bold;
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

<section class="order" id="order">
  <div class="container">
    <h1 class="heading text-center mb-5">Get in touch for a free and fast consultation</h1>

    <form action="" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
          </div>
          <div class="form-group">
            <label for="number">Your Number</label>
            <input type="tel" class="form-control" id="number" placeholder="Enter your number" name="number" required>
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="form-group">
            <label for="makeup-category">Choose Your Makeup Category</label>
            <select class="form-control" id="makeup-category" name="makeup-category" required>
              <option value="">Select Makeup Category</option>
              <option value="Thai Makeup Look">Thai Makeup Look</option>
              <option value="Korean Makeup Look">Korean Makeup Look</option>
              <option value="Bold Makeup Look">Bold Makeup Look</option>
              <option value="The Bride">The Bride</option>
              <option value="Mature Skin">Mature Skin</option>
              <option value="Beauty Clean Makeup Look">Beauty Clean Makeup Look</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="events">Your Events</label>
            <input type="text" class="form-control" id="events" placeholder="Events will take place" name="events" required>
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="form-group">
            <label for="address">Your Address</label>
            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" name="address" required></textarea>
          </div>
          <div class="form-group">
            <label for="message">Your Special Request Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message" name="message"></textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Book Now</button>
    </form>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
