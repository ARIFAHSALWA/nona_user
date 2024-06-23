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

// Inisialisasi variabel pesan
$pesan = '';

// Menangani permintaan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = $_POST['name'];
    $filename = $_FILES['photo']['name'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Meng-upload file foto
    $target_dir = "uploads/";
    
    // Periksa apakah direktori uploads ada
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $target_file = $target_dir . basename($filename);
    
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // Menyiapkan dan mengeksekusi pernyataan SQL untuk menyimpan review ke dalam database
        $sql = "INSERT INTO reviews (name, rating, review, photo) VALUES ('$name', '$rating', '$review', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            // Set pesan sukses
            $pesan = "Review berhasil ditambahkan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
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
    <title>Submit Review</title>
    <link rel="stylesheet" href="styles.css"> <!-- Letakkan file CSS Anda di sini -->
    <script src="script.js" defer></script> <!-- Letakkan file JavaScript Anda di sini -->
    <style>
        body {
            background: linear-gradient(120deg, #FAFAD2, #FFD1D1, #A87676, #FFD0D0); /* Menggunakan palet warna yang diinginkan */
            color: #333; /* Warna teks di atas latar belakang */
            font-family: Arial, sans-serif; /* Jenis font */
        }

        .container {
            background-color: #FFFACD; /* Warna background container diganti menjadi kuning soft */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan efek bayangan */
            margin: 50px auto; /* Posisi tengah */
            max-width: 500px;
            padding: 30px;
        }

        h2 {
            color: #FF1493; /* Warna judul diganti menjadi pink soft */
            text-align: center;
        }

        label {
            color: #FF4500; /* Warna label diganti menjadi orange red */
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            border: 1px solid #FF69B4; /* Warna border input diganti menjadi hot pink */
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #FF69B4; /* Warna background tombol submit diganti menjadi hot pink */
            border: none;
            border-radius: 5px;
            color: #fff; /* Warna teks tombol submit diganti menjadi putih */
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            transition: background-color 0.3s ease; /* Animasi perubahan warna saat hover */
        }

        input[type="submit"]:hover {
            background-color: #FF1493; /* Warna background tombol submit saat hover diganti menjadi pink soft */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Submit Your Review</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <label for="rating">Rating:</label>
            <div class="rating" id="rating">
                <input type="radio" id="star5" name="rating" value="5"><label for="star5">☆</label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4">☆</label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3">☆</label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2">☆</label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1">☆</label>
            </div>

            <label for="review">Review:</label>
            <textarea id="review" name="review" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
