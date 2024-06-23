<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salwa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mendapatkan data pengguna dari database
$sql = "SELECT * FROM users WHERE id = 1"; // Ganti 1 dengan ID pengguna yang sesuai
$result = $conn->query($sql);

// Memeriksa apakah ada hasil
if ($result->num_rows > 0) {
  // Mendapatkan baris data pengguna
  $userData = $result->fetch_assoc();
} else {
  echo "Tidak ada data pengguna yang ditemukan.";
}

// Menutup koneksi ke database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS to make profile picture circular */
        #profile-pic img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.php">Nonariwa Beauty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>    
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>User Information</h2>
                <div id="user-info">
                    <!-- User data will be displayed here -->
                </div>
            </div>
            <div class="col-md-6">
                <h2>Profile Picture</h2>
                <div id="profile-pic">
                    <!-- Profile picture will be displayed here -->
                </div>
                <input type="file" id="profile-pic-upload" accept="image/*" class="mt-3">
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        // Function to display user information
        function displayUserInfo(userData) {
            $('#user-info').html(`
                <p><strong>Name:</strong> ${userData.full_name}</p>
                <p><strong>Gender:</strong> ${userData.gender}</p>
                <p><strong>Date of Birth:</strong> ${userData.birthday}</p>
                <p><strong>Mobile Phone:</strong> ${userData.mobile_phone}</p>
                <p><strong>Email:</strong> ${userData.email}</p>
            `);
        }

        // Function to display profile picture
        function displayProfilePicture(userData) {
            $('#profile-pic').html(`<img src="${userData.profile_pic}" alt="Profile Picture">`);
        }

        // Call functions to display user information and profile picture
        $(document).ready(function() {
            const userData = <?php echo json_encode($userData); ?>;
            displayUserInfo(userData);
            displayProfilePicture(userData);
        });
    </script>
</body>
</html>
