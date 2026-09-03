<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky 26 Coffee</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header & Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top transition-all py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-playfair fw-bold fs-3" href="#home">
                <i class="fa-solid fa-mug-hot me-2"></i>SKY 26 <span class="text-gold">COFFEEx</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto align-items-center fw-medium">
                    <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#promo">Promo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ballroom">Ballroom</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="https://wa.me/6282121208833" target="_blank" class="btn btn-gold rounded-pill px-4 py-2 shadow-sm">
                            <i class="fa-brands fa-whatsapp me-2"></i>Reservasi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero / Banner Section (Carousel) -->
    <header id="home" class="hero-section">
        <div class="swiper heroSwiper h-100">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide position-relative">
                    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1920');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container h-100 d-flex align-items-center position-relative z-1">
                        <div class="row w-100">
                            <div class="col-lg-8 text-white">
                                <span class="badge bg-gold px-3 py-2 rounded-pill mb-3 text-uppercase letter-spacing-1">Lantai 26 Hermina Tower</span>
                                <h1 class="display-3 font-playfair fw-bold mb-3 hero-title">Nikmati Rasa, Suasana & Pemandangan</h1>
                                <p class="lead mb-4 hero-subtitle opacity-75">Pengalaman kuliner dengan city view memukau dari ketinggian Jakarta.</p>
                                <a href="#tentang" class="btn btn-outline-light rounded-pill px-4 py-2">Jelajahi Sky 26</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide position-relative">
                    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=1920');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container h-100 d-flex align-items-center position-relative z-1">
                        <div class="row w-100">
                            <div class="col-lg-8 text-white">
                                <span class="badge bg-gold px-3 py-2 rounded-pill mb-3 text-uppercase letter-spacing-1">Premium Coffee</span>
                                <h1 class="display-3 font-playfair fw-bold mb-3 hero-title">Your Moment, Above the City</h1>
                                <p class="lead mb-4 hero-subtitle opacity-75">Pilihan makanan dan minuman kekinian dengan harga terjangkau.</p>
                                <a href="#menu" class="btn btn-gold rounded-pill px-4 py-2">Lihat Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide position-relative">
                    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=1920');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container h-100 d-flex align-items-center position-relative z-1">
                        <div class="row w-100">
                            <div class="col-lg-8 text-white">
                                <span class="badge bg-gold px-3 py-2 rounded-pill mb-3 text-uppercase letter-spacing-1">Hermina Grand Ballroom</span>
                                <h1 class="display-3 font-playfair fw-bold mb-3 hero-title">Wujudkan Acara Impian Anda</h1>
                                <p class="lead mb-4 hero-subtitle opacity-75">Venue elegan, fasilitas lengkap, dan pelayanan profesional untuk setiap momen spesial.</p>
                                <a href="#ballroom" class="btn btn-outline-light rounded-pill px-4 py-2">Info Ballroom</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next text-gold"></div>
            <div class="swiper-button-prev text-gold"></div>
            <div class="swiper-pagination"></div>
        </div>
    </header>

    <!-- Tentang Section -->
    <section id="tentang" class="py-100">
        <div class="container">
            <div class="row align-items-center gx-lg-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=800" class="img-fluid rounded-4 shadow-lg w-100 object-fit-cover" style="height: 500px;" alt="Sky 26 Coffee Area">
                        <div class="position-absolute bottom-0 end-0 bg-gold text-white p-4 rounded-start-4 shadow-lg" style="transform: translateY(20%);">
                            <h3 class="font-playfair fw-bold mb-0">Lantai 26</h3>
                            <p class="mb-0">Hermina Tower</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 ps-lg-5">
                    <span class="text-gold fw-bold text-uppercase letter-spacing-1">Tentang Kami</span>
                    <h2 class="display-5 font-playfair fw-bold my-3 text-dark">Rasa & Suasana dari Ketinggian</h2>
                    <p class="text-muted fs-5 mb-4">
                        Berada di lantai 26 Hermina Tower, <strong>Sky 26 Coffee</strong> menghadirkan pengalaman kuliner dengan <em>city view</em> yang memukau. Pilihan makanan dan minuman kekinian dengan harga terjangkau, serta suasana nyaman untuk setiap momen.
                    </p>
                    <p class="text-muted">
                        Dilengkapi <em>indoor smoking room</em> dan ruang VIP berkapasitas 5–20 orang, Sky 26 Coffee menjadi pilihan tepat untuk bersantai, meeting, gathering, maupun menikmati waktu bersama orang terdekat.
                    </p>
                    <hr class="my-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-circle bg-gold text-white fs-4"><i class="fa-solid fa-mug-hot"></i></div>
                        <h5 class="mb-0 font-playfair fw-bold">Sky 26 Coffee — Your Moment, Above the City.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas & Kapasitas Section -->
    <section id="fasilitas" class="py-100 bg-light">
        <div class="container">
            <div class="row gx-lg-5">
                <!-- Fasilitas Kiri -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="font-playfair fw-bold text-dark m-0">Fasilitas Venue</h2>
                    </div>
                    <p class="text-muted mb-4">Fasilitas premium yang dirancang untuk kenyamanan maksimal Anda saat bersantai maupun bekerja.</p>
                    
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-city text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Best View</h5>
                                <p class="text-muted small m-0">Pemandangan memukau kota Jakarta dari lantai 26.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-wifi text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Free Wi-Fi</h5>
                                <p class="text-muted small m-0">Koneksi internet cepat untuk kebutuhan meeting & kerja.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-ban-smoking text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Non Smoking Area</h5>
                                <p class="text-muted small m-0">Ruang nyaman bebas asap rokok.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-smoking text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Indoor Smoking Area</h5>
                                <p class="text-muted small m-0">Area khusus merokok yang tetap nyaman dan sejuk.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-microphone-lines text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Karaoke & TV</h5>
                                <p class="text-muted small m-0">Tersedia on request untuk hiburan bersama kerabat.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fasilitas-card">
                                <i class="fa-solid fa-users-rectangle text-gold fs-2 mb-3"></i>
                                <h5 class="fw-bold">Private Meeting</h5>
                                <p class="text-muted small m-0">Area VIP eksklusif dengan extension & privacy.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kapasitas Kanan -->
                <div class="col-lg-6">
                    <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                        <h2 class="font-playfair fw-bold text-dark mb-2">Kapasitas Ruangan</h2>
                        <p class="text-muted mb-4">Pilihan area yang dapat disesuaikan dengan skala acara Anda.</p>
                        
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3 px-4 fw-bold text-uppercase text-secondary text-xs">Nama Ruangan</th>
                                        <th class="py-3 px-4 fw-bold text-uppercase text-secondary text-xs text-end">Kapasitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4 fw-semibold text-dark"><i class="fa-solid fa-couch text-gold me-2"></i> Non Smoking Area</td>
                                        <td class="p-4 text-end fw-bold text-gold">66 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 fw-semibold text-dark"><i class="fa-solid fa-crown text-gold me-2"></i> VVIP</td>
                                        <td class="p-4 text-end fw-bold text-gold">20 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 fw-semibold text-dark"><i class="fa-solid fa-martini-glass text-gold me-2"></i> Bar Area</td>
                                        <td class="p-4 text-end fw-bold text-gold">18 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 fw-semibold text-dark"><i class="fa-solid fa-star text-gold me-2"></i> VVIP 1</td>
                                        <td class="p-4 text-end fw-bold text-gold">10 Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 fw-semibold text-dark"><i class="fa-solid fa-user-tie text-gold me-2"></i> VIP</td>
                                        <td class="p-4 text-end fw-bold text-gold">6 Orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section (Carousel) -->
    <section id="promo" class="py-100">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-gold fw-bold text-uppercase letter-spacing-1">Penawaran Eksklusif</span>
                <h2 class="display-5 font-playfair fw-bold text-dark mt-2">All Promo Sky 26</h2>
            </div>
            
            <div class="swiper promoSwiper pb-5">
                <div class="swiper-wrapper">
                    <!-- Promo 1 -->
                    <div class="swiper-slide">
                        <div class="card promo-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="promo-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=800" class="card-img-top object-fit-cover" height="250" alt="Promo Coffee">
                                <div class="promo-tag bg-gold text-white">Diskon 20%</div>
                            </div>
                            <div class="card-body p-4">
                                <h4 class="font-playfair fw-bold mb-2">Afternoon Coffee Break</h4>
                                <p class="text-muted small mb-4">Nikmati diskon 20% untuk semua varian kopi setiap pukul 14:00 - 17:00 WIB. Teman terbaik sambil menikmati senja Jakarta.</p>
                                <button class="btn btn-outline-dark rounded-pill w-100" data-bs-toggle="modal" data-bs-target="#promoModal">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <!-- Promo 2 -->
                    <div class="swiper-slide">
                        <div class="card promo-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="promo-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=800" class="card-img-top object-fit-cover" height="250" alt="Promo Lunch">
                                <div class="promo-tag bg-gold text-white">Paket Hemat</div>
                            </div>
                            <div class="card-body p-4">
                                <h4 class="font-playfair fw-bold mb-2">Business Lunch Combo</h4>
                                <p class="text-muted small mb-4">Pilihan hidangan Main Course + Ice Tea hanya Rp 65.000,- nett. Pilihan tepat untuk meeting makan siang Anda.</p>
                                <button class="btn btn-outline-dark rounded-pill w-100" data-bs-toggle="modal" data-bs-target="#promoModal">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <!-- Promo 3 -->
                    <div class="swiper-slide">
                        <div class="card promo-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="promo-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=800" class="card-img-top object-fit-cover" height="250" alt="Promo VIP">
                                <div class="promo-tag bg-gold text-white">Free Room</div>
                            </div>
                            <div class="card-body p-4">
                                <h4 class="font-playfair fw-bold mb-2">Free VIP Room Booking</h4>
                                <p class="text-muted small mb-4">Gratis penggunaan VIP Room (Kapasitas s/d 20 pax) dengan minimum order F&B tertentu. Termasuk fasilitas TV & Karaoke.</p>
                                <button class="btn btn-outline-dark rounded-pill w-100" data-bs-toggle="modal" data-bs-target="#promoModal">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Hermina Grand Ballroom Section -->
    <section id="ballroom" class="py-100 bg-dark-section text-white position-relative">
        <div class="overlay-pattern"></div>
        <div class="container position-relative z-1">
            <div class="text-center mb-5">
                <span class="text-gold fw-bold text-uppercase letter-spacing-1">Venue Partner</span>
                <h2 class="display-5 font-playfair fw-bold mt-2">Hermina Grand Ballroom</h2>
                <p class="text-white-50 mx-auto mt-3" style="max-width: 700px;">Jadikan setiap momen lebih istimewa bersama Hermina Grand Ballroom—tempat terbaik untuk menciptakan pengalaman yang tak terlupakan.</p>
            </div>

            <div class="row gx-lg-5 mb-5 align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="swiper ballroomSwiper rounded-4 overflow-hidden shadow-lg">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=800" class="w-100 object-fit-cover" style="height:400px;" alt="Wedding"></div>
                            <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=800" class="w-100 object-fit-cover" style="height:400px;" alt="Conference"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h4 class="font-playfair fw-bold text-gold border-bottom border-secondary pb-2 mb-4">Fasilitas yang Tersedia</h4>
                    <div class="row g-3">
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> High Ceiling & Elegant Foyer</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> VIP Lounge</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> Full AC & Wi-Fi Berkecepatan Tinggi</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> Sound System Standar</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> LCD Projector & Screen (sesuai paket)</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> Area Registrasi</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> Lift Akses Langsung</div></div>
                        <div class="col-md-6"><div class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-gold me-3 fs-5"></i> Area Parkir & Tim Event Profesional</div></div>
                    </div>
                </div>
            </div>
            
            <!-- Jenis Acara Tabs -->
            <div class="card bg-black border-secondary mt-5 rounded-4 p-lg-4 p-3 shadow-lg">
                <div class="card-body">
                    <h4 class="lya font-playfair fw-bold text-center mb-4">Jenis Acara yang Dapat Diselenggarakan</h4>
                    <ul class="nav nav-pills nav-justified mb-4 custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link lya active" data-bs-toggle="pill" data-bs-target="#corp">Corporate Event</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link lya" data-bs-toggle="pill" data-bs-target="#wedding">Wedding & Celebration</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link lya" data-bs-toggle="pill" data-bs-target="#social">Social & Gov</button></li>
                    </ul>
                    <div class="tab-content text-white-50" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="corp">
                            <div class="row text-center text-md-start">
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-briefcase text-gold me-2"></i> Rapat Perusahaan</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-chart-line text-gold me-2"></i> Annual & Town Hall Meeting</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-microphone-lines text-gold me-2"></i> Workshop & Conference</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-chalkboard-user text-gold me-2"></i> Training</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-rocket text-gold me-2"></i> Product Launching</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wedding">
                            <div class="row text-center text-md-start">
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-ring text-gold me-2"></i> Engagement Party</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-cake-candles text-gold me-2"></i> Birthday & Anniversary</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-champagne-glasses text-gold me-2"></i> Private Dinner</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-graduation-cap text-gold me-2"></i> Graduation Party</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social">
                            <div class="row text-center text-md-start">
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-people-group text-gold me-2"></i> Family / Community Gathering</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-handshake-angle text-gold me-2"></i> Reuni & Arisan</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-building-columns text-gold me-2"></i> Kegiatan Kampus</div>
                                <div class="col-md-4 mb-2"><i class="fa-solid fa-sitemap text-gold me-2"></i> Acara Organisasi / Gov</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-100 bg-light">
        <div class="container text-center">
            <span class="text-gold fw-bold text-uppercase letter-spacing-1">Pilihan Menu</span>
            <h2 class="display-5 font-playfair fw-bold text-dark mt-2 mb-3">Kuliner Profesional</h2>
            <p class="text-muted mx-auto mb-5" style="max-width: 600px;">Tim kuliner profesional kami siap melengkapi acara Anda dengan hidangan berkualitas yang disesuaikan dengan konsep dan kebutuhan acara.</p>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card rounded-4 overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=800" class="w-100 object-fit-cover" height="300" alt="Masakan Indonesia">
                        <div class="menu-overlay d-flex flex-column justify-content-end p-4 text-start">
                            <h3 class="font-playfair fw-bold text-white mb-1">Masakan Indonesia</h3>
                            <p class="text-white-50 m-0 small">Kaya rempah dan cita rasa nusantara otentik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card rounded-4 overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?q=80&w=800" class="w-100 object-fit-cover" height="300" alt="Chinese Cuisine">
                        <div class="menu-overlay d-flex flex-column justify-content-end p-4 text-start">
                            <h3 class="font-playfair fw-bold text-white mb-1">Chinese Cuisine</h3>
                            <p class="text-white-50 m-0 small">Hidangan oriental elegan untuk jamuan berkelas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="menu-card rounded-4 overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=800" class="w-100 object-fit-cover" height="300" alt="Western Cuisine">
                        <div class="menu-overlay d-flex flex-column justify-content-end p-4 text-start">
                            <h3 class="font-playfair fw-bold text-white mb-1">Western Cuisine</h3>
                            <p class="text-white-50 m-0 small">Sajian internasional bergaya modern.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lokasi & Kontak Section -->
    <section id="lokasi" class="py-100">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <span class="text-gold fw-bold text-uppercase letter-spacing-1">Lokasi Strategis</span>
                    <h2 class="display-5 font-playfair fw-bold text-dark mt-2 mb-4">Temukan Kami</h2>
                    
                    <div class="contact-info-box mb-4">
                        <h5 class="fw-bold text-dark"><i class="fa-solid fa-location-dot text-gold me-2"></i> SKY 26 COFFEE</h5>
                        <p class="text-muted ps-4 ms-1 mb-0">
                            Lantai 26, Hermina Tower<br>
                            Blok B-10, Jl. Selangit Kavling 4, RW 10<br>
                            Gunung Sahari Selatan, Kemayoran<br>
                            Jakarta Pusat 10610
                        </p>
                    </div>
                    
                    <h5 class="fw-bold text-dark mb-3">Sales & Reservation</h5>
                    <a href="https://wa.me/6282121208833" class="text-decoration-none d-block mb-2 text-dark hover-gold transition-all">
                        <i class="fa-brands fa-whatsapp text-gold fs-5 me-2 w-20px text-center"></i> 0821-2120-8833 (Admin)
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-lg border">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7456728076043!2d106.845732!3d-6.1541085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f59583cb41e7%3A0xf419019208de02a6!2sHermina%20Tower%20Kemayoran!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark-section pt-5 text-white">
        <div class="container pb-5 border-bottom border-secondary">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                    <h2 class="font-playfair fw-bold mb-2">Siap Mewujudkan Acara Impian Anda?</h2>
                    <p class="text-white-50 mb-0">Hubungi kami hari ini untuk konsultasi dan penawaran terbaik.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="https://wa.me/6282121208833" class="btn btn-gold btn-lg rounded-pill px-5 shadow-lg">
                        Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="container py-4 text-center">
            <p class="text-white-50 small m-0">&copy; 2026 Sky 26 Coffee & Hermina Grand Ballroom. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-menu">
        <a href="https://wa.me/6282121208833" target="_blank" class="floating-btn bg-gold text-white shadow-lg">
            <i class="fa-brands fa-whatsapp fs-3"></i>
        </a>
        <a href="#" class="floating-btn bg-dark text-white shadow-lg top-btn" id="backToTop">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modals untuk Promo (Dummy Modal) -->
    <div class="modal fade" id="promoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 overflow-hidden">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3 bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=800" class="img-fluid h-100 object-fit-cover" alt="Promo Image">
                    </div>
                    <div class="col-md-7 p-5 d-flex flex-column justify-content-center">
                        <span class="badge bg-gold w-auto align-self-start mb-2">Promo Spesial</span>
                        <h3 class="font-playfair fw-bold mb-3">Detail Penawaran</h3>
                        <p class="text-muted">
                            Ngumpul rame-rame, ngobrol lama, makan enak, semua jadi satu 🍽️🤍<br>
                            Cocok untuk arisan, ulang tahun, sampai family gathering yang pengen simple tapi tetap nyaman.<br>
                            <br>
                            Paket sudah termasuk venue, buffet, free set up table, dan projector screen.
                            Tinggal datang & nikmati momennya ✨
                            <br>
                            More info, contact us:<br>
                            📞 0813-9980-7880 (Admin SLC)<br>
                            📍 16th Floor – Hermina Tower, Kemayoran, Central Jakarta
                        </p>
                        <p class="text-muted">Dapatkan penawaran harga terbaik dengan syarat dan ketentuan yang berlaku. Hubungi tim sales kami untuk informasi ketersediaan tanggal dan booking venue.</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <small class="text-muted d-block">Mulai Dari</small>
                                <h4 class="fw-bold text-gold m-0">IDR 200.000/Pax</h4>
                            </div>
                            <a href="https://wa.me/6282121208833" class="btn btn-dark rounded-pill px-4">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script src="assets/js/main.js"></script>
</body>
</html>
