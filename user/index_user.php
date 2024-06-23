<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonariwa Beauty</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        background-color: #FAFAD2; /* Warna latar belakang diganti menjadi kuning soft */
    }

    .navbar {
    background-color: #FFD1D1; /* Warna navbar diganti menjadi pink soft */
    position: sticky;
    top: 0;
    z-index: 1000; /* Memastikan navbar berada di atas elemen lainnya saat di-scroll */
    padding: 13px 0; /* Menambah padding vertikal pada navbar untuk memperbesar ukurannya */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Menambahkan efek bayangan pada navbar */
}


    .navbar-nav .nav-link {
        color: #fff; /* Warna teks pada navbar diganti menjadi putih */
    }

    .navbar-toggler-icon {
        background-color: #fff; /* Warna ikon toggler navbar diganti menjadi putih */
    }

    .navbar-brand {
        color: #fff; /* Warna teks pada brand navbar diganti menjadi putih */
        font-size: 26px;
        font-weight: bold;
        font-family: 'Mansalva', cursive;
        color: #A87676;
        transform: rotate(-3deg);
        display: inline-block;
    }

    .carousel-caption {
        background-color: transparent !important; /* Kotak pada caption carousel dihapus */
    }
    .card {
        background-color: #FFD0D0; /* Warna latar belakang card diganti menjadi pink soft */
        border: none; /* Hapus border pada card */
    }

    .card-text {
        color: #333; /* Warna teks pada card diganti menjadi gelap */
    }

    .btn-primary {
        background-color: #FFB6C1; /* Warna tombol primary diganti menjadi pink soft */
        border-color: #FFB6C1; /* Warna border tombol primary diganti menjadi pink soft */
    }

    .btn-primary:hover {
        background-color: #FF69B4; /* Warna tombol primary saat hover diganti menjadi pink soft lebih tua */
        border-color: #FF69B4; /* Warna border tombol primary saat hover diganti menjadi pink soft lebih tua */
    }

    .reviewer-profile {
        text-align: center; /* Mengatur posisi tengah secara horizontal */
    }

    .reviewer-profile img {
        width: 200px; /* Menyesuaikan ukuran gambar */
        height: 200px; /* Menyesuaikan ukuran gambar */
        border-radius: 50%; /* Membuat gambar menjadi bulat */
    }

    .logo-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .logo {
        font-family: 'Mansalva', cursive;
        font-size: 48px;
        color: #A87676;
        text-align: center;
    }

    .beauty {
        font-size: 36px;
        color: #FF69B4;
    }

    .review-section,
    .review-rating i {
        color: #6D4C4C; /* Warna teks pada bagian review */
    }

    .contact-us h2,
    .contact-us ul {
        color: #A87676; /* Warna teks pada bagian kontak */
    }

    .contact-us ul li a {
        color: #A87676; /* Warna link pada bagian kontak */
    }

    .contact-us ul li a:hover {
        color: #9B7E7E; /* Warna link saat hover pada bagian kontak */
    }

    .our-gallery h2,
    .our-gallery h5,
    .our-gallery p {
        color: #6D4C4C; 
    }

    .about-section p,
    .review-section p,
    .about-section h2,
    .contact-us p,
    .contact-us ul li {
        color: #6D4C4C; /* Warna teks pada bagian "About Us", "Customer Reviews", dan "Contact Us" */
    }

    .contact-us ul li a {
        color: #6D4C4C; /* Warna link pada bagian kontak */
    }

    .contact-us ul li a:hover {
        color: #9B7E7E; /* Warna link saat hover pada bagian kontak */
    }

    .about-section img {
    border-radius: 20px; /* Mengatur sudut melengkung */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan untuk efek dimensi */
    max-width: 95%; /* Mengatur lebar maksimum gambar agar tidak melebihi lebar kolom */
    height: auto; /* Mengatur tinggi gambar agar proporsional dengan lebar yang ditetapkan */
    
    }

    .card {
    background-color: #FFD0D0; /* Warna latar belakang card */
    border: none; /* Hapus border pada card */
    border-radius: 20px; /* Mengatur sudut melengkung */
    overflow: hidden; /* Mengatur overflow agar bayangan tidak terpotong */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada card */
    transition: transform 0.3s, box-shadow 0.3s; /* Menambahkan transisi pada transformasi dan bayangan */
}

.card:hover {
    transform: translateY(-5px); /* Mengangkat card sedikit saat dihover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Meningkatkan intensitas bayangan saat dihover */
}

.review-card {  
    background-color: #FFF; /* Mengubah bentuk card review*/
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 80px;
}

.review-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.reviewer-profile {
    text-align: center;
}

.reviewer-profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.review-rating {
    color: #FF69B4;
    font-size: 24px;
    margin-bottom: 15px;
}

.review-card .card-text {
    color: #333;
    font-size: 16px;
    line-height: 1.5;
}

.btn-add-review {
    background-color: #FF69B4;
    color: #FFF;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s;
}

.btn-add-review:hover {
    background-color: #D46297;
}


#gallery {
    margin-top: 50px; /* Sesuaikan ukuran margin sesuai kebutuhan */
}


.section-divider {
    border: none;
    border-top: 2px solid #6D4C4C; /* Warna garis dan ketebalan bisa disesuaikan */
    margin: 30px 0; /* Sesuaikan ukuran margin sesuai kebutuhan */
}

.our-gallery h2 {
    color: #6D4C4C; /* Warna teks pada judul Our Gallery */
    font-family: 'Pacifico', cursive; /* Menggunakan font yang menarik */
    font-size: 30px; /* Ukuran font */
    text-align: center; /* Pusatkan teks */
    text-transform: uppercase; /* Ubah teks menjadi huruf besar */
    margin-bottom: 30px; /* Sesuaikan margin bawah */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan efek bayangan */
}

/* ... (Kode CSS lainnya tetap sama) ... */

.about-section {
    padding-top: 50px; /* Sesuaikan dengan kebutuhan */
    padding-bottom: 50px; /* Sesuaikan dengan kebutuhan */
    margin-bottom: 50px; /* Memberikan jarak tambahan di bawah bagian About */
}

.our-gallery {
    margin-top: 50px; /* Memberikan jarak di atas bagian Our Gallery */
}

.our-gallery h2 {
    color: #6D4C4C; /* Warna teks pada judul Our Gallery */
    font-family: 'Pacifico', cursive; /* Menggunakan font yang menarik */
    font-size: 30px; /* Ukuran font */
    text-align: center; /* Pusatkan teks */
    text-transform: uppercase; /* Ubah teks menjadi huruf besar */
    margin-bottom: 10px; /* Sesuaikan margin bawah */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan efek bayangan */
}
        :root {
            --primary-color: #FF69B4; /* Pink soft */
            --secondary-color: #6D4C4C; /* Warna gelap untuk teks */
            --tertiary-color: #A87676; /* Warna coklat muda untuk highlight */
        }
        body {
            background-color: #FAFAD2;
        }

</style>
</style>

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    
</head>

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav class="navbar navbar-expand-lg navbar-light bg-pink">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: var(--tertiary-color);">NONARIWA BEAUTY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Our Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
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


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/MUA999.jpg" class="d-block w-100" alt="..." height="550">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Nonariwa Beauty</h5>
                    <p>Kami menyediakan layanan kecantikan terbaik untuk Anda.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/MUA888.jpg" class="d-block w-100" alt="..." height="550">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Nonariwa Beauty</h5>
                    <p>Kami menyediakan layanan kecantikan terbaik untuk Anda.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/MUA66.jpg" class="d-block w-100" alt="..." height="550">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Nonariwa Beauty</h5>
                    <p>Kami menyediakan layanan kecantikan terbaik untuk Anda.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section id="about" class="about-section mt-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="../assets/natural.jpg" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">About</h2>
                    <h2 class="text-center">WHY CHOOSE US?</h2>
                    <hr class="section-divider">
                    <p>Welcome to Nonariwa Beauty, where your beauty aspirations come to life in the most extraordinary ways. We stand as your ultimate destination for creating mesmerizing beauty experiences. With a team of seasoned professionals, a treasure trove of premium products, and a commitment to personalized service, we redefine the standards of excellence in makeup artistry.</p>
                    <p>We believe in crafting not just makeup looks, but unforgettable moments. Our dedicated team of makeup artists is driven by a passion for enhancing your natural beauty and transforming your vision into reality. From subtle elegance to bold statements, we offer a diverse range of makeup styles tailored precisely to your preferences and desires.</p>
                    <p>Step into our world and discover a realm where creativity knows no bounds and every brushstroke tells a unique story. Whether it's for a special occasion or simply to treat yourself, Nonariwa Beauty is here to elevate your beauty journey and leave you feeling empowered, confident, and absolutely radiant. Join us and experience the magic of makeup like never before.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="gallery" class="our-gallery">
        <div class="container mt-4">
        <h2 class="text-center">Our Gallery </h2>
        <h2 class="text-center">"MAKEUP CATEGORIES"</h2>
        <hr class="section-divider">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/thaii.JPEG" class="card-img-top" alt="Gallery Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Thai Makeup Look</h5>
                            <p class="card-text">The Perfect Complexion, Smokey Eye, Overdrawn Lips With The Popular Fiber Eyebrows Are The Characteristics Of Thai Women's Makeup. This Look Makes The Tip Of The Front Eyebrows Appear Slightly Raised So That It Gives An Elegant Impression To The Whole Face.</p>
                            <p class="card-text"><b>Price:</b> Rp. 7.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/koreanmakeup.jpg" class="card-img-top" alt="Gallery Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Korean Makeup Look</h5>
                            <p class="card-text">Discover effortless perfection with our Korean-inspired makeup collection! Achieve flawless, blemish-free skin and embrace the iconic Korean beauty aesthetic with soft, natural eye shadows and gradient lipsticks. Unlock the secret to radiant, dewy skin and effortlessly chic makeup.</p>
                            <p class="card-text"><strong>Price:</strong> Rp. 6.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/indiaa.jpg" class="card-img-top" alt="Gallery Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Bold Makeup Look</h5>
                            <p class="card-text">Enhance your allure with bold makeup styles, featuring striking colors and defined lines. Achieve a glamorous, confident look reminiscent of Indian drama or captivating Arab charm. Explore diverse cultural inspirations for a mesmerizing and irresistible appearance.</p>
                            <p class="card-text"><strong>Price:</strong> Rp. 12.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/bride.jpg" class="card-img-top" alt="Gallery Image 4">
                        <div class="card-body">
                            <h5 class="card-title">The Bride</h5>
                            <p class="card-text">Especially For A Fairyland Bride, Don't Miss Your Special Day With Makeup From Heaven</p>
                            <p class="card-text"><strong>Price:</strong> Rp. 30.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/mature.jpg" class="card-img-top" alt="Gallery Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Mature Skin</h5>
                            <p class="card-text">Aging Skin? No Longer Insecure Anymore Because We Have A Makeup Artist Who Can Juggle You,Can Be Glow The World</p>
                            <p class="card-text"><strong>Price:</strong>: Rp. 10.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../assets/clean2.jpg" class="card-img-top" alt="Gallery Image 6">
                        <div class="card-body">
                            <h5 class="card-title">No makeup makeup Look</h5>
                            <p class="card-text">The Combination Of Natural Make-Up Makes The Face Look Fresher And More Youthful</p>
                            <p class="card-text"><strong>Price:</strong>: Rp. 9.000.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="review" class="review-section">
        <div class="container mt-4">
            <h2 class="text-center">Customer Reviews</h2>
            <h2 class="text-center">WHAT THEY SAY?!!</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="reviewer-profile">
                            <img src="../assets/tasya.jpg" alt="Reviewer" class="rounded-circle">
                            <h3 class="card-title">Tasya Artasiah</h3>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="card-text">"Nonariwa exceeded my expectations for my graduation makeup! The artist perfectly captured the youthful essence of the occasion while ensuring a flawless and long-lasting look. The makeup lasted throughout the ceremony and reception, and I received numerous compliments on my radiant appearance. I highly recommend Nonariwa for anyone looking for professional and stunning graduation makeup."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="reviewer-profile">
                            <img src="../assets/sally.jpg" alt="Reviewer" class="rounded-circle">
                            <h3 class="card-title">Sally Febria</h3>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="card-text">"Choosing Nonariwa for my wedding makeup was one of the best decisions I made for my special day. The artist skillfully enhanced my natural beauty while incorporating my desired bridal look. The makeup withstood tears of joy and hours of celebration, leaving me feeling confident and beautiful from the ceremony to the last dance. Nonariwa's attention to detail and professionalism truly made my wedding makeup experience unforgettable."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="reviewer-profile">
                            <img src="../assets/via.jpg" alt="Reviewer" class="rounded-circle">
                            <h3 class="card-title">Via Oktavia</h3>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <p class="card-text">"Nonariwa understands the unique needs of mature skin and delivers exceptional results. The makeup artist used techniques and products that enhanced my features while minimizing the appearance of fine lines and wrinkles. The result was a sophisticated and age-appropriate look that made me feel radiant and confident. I highly recommend Nonariwa for anyone seeking makeup services tailored to mature skin."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="uploads.php" class="btn btn-primary btn-lg btn-block">Add Review</a>
            </div>
        </div>
    </div>
</section>


    <hr>

    <section id="contact" class="contact-us">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <h2>Locations</h2>
                    <p>Nonariwa Beauty has multiple locations across the city. Visit us at the following addresses:</p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> 123 Beauty Street, Garut City
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i> 456 Beauty Avenue, Bogor City
                        </li>
                        <li>
                             <i class="fas fa-map-marker-alt"></i> 789 Beauty Boulevard, Tanggerang City
                        </li>
                    </ul>

                </div>
                <div class="col-md-4">
                    <h2>Follow Us</h2>
                    <p>Stay updated with our latest news and offers by following us on social media:</p>
                    <ul>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/nonariwabeauty"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/nonariwabeauty"><i class="fab fa-twitter fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/nonariwabeauty/"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/user/nonariwabeauty"><i class="fab fa-youtube fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Contact Info</h2>
                    <p>For any inquiries or appointments, feel free to contact us:</p>
                    <ul>
                        <li class="list-inline-item">
                            <a href="mailto:info@nonariwabeauty.com"><i class="fas fa-envelope fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/6281262450954"><i class="fab fa-whatsapp fa-2x"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
       
            
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>