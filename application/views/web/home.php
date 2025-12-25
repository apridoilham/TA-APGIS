<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css"/>
    
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=58.0') ?>">
    
    <script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
</head>
<body class="bg-light-gray d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg fixed-top glass-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3 z-3" href="#">
                <div class="icon-box rounded-3 shadow-sm">
                    <i class="bi bi-moon-stars-fill text-white fs-5"></i>
                </div>
                <div class="d-flex flex-column">
                    <span class="brand-text text-dark lh-1">SIG-HALAL</span>
                    <span class="brand-subtitle text-secondary">Sawangan Area</span>
                </div>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none p-0 z-3" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama" aria-controls="menuUtama" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-icon d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm text-emerald" style="width: 40px; height: 40px;">
                    <i class="bi bi-list fs-3"></i>
                </span>
            </button>
            
            <div class="collapse navbar-collapse" id="menuUtama">
                <ul class="navbar-nav ms-auto align-items-center gap-2 gap-lg-4 mt-3 mt-lg-0 pb-3 pb-lg-0">
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#hero">Beranda</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#berita">Berita</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#keterangan">Keterangan</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#wawasan">Wawasan</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#adab">Adab</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#peta">Peta</a></li>
                    <li class="nav-item w-100 w-lg-auto"><a class="nav-link" href="#about">Tim</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0 w-100 w-lg-auto">
                        <a class="btn btn-nav rounded-pill px-4 py-2 w-100 d-flex justify-content-center align-items-center gap-2" href="#peta">
                            Mulai Jelajah <i class="bi bi-arrow-right-short fs-5"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="d-flex align-items-center min-vh-100 bg-white position-relative overflow-hidden pt-5 pt-lg-0">
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="
                background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.95)), url('https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=1920&auto=format&fit=crop');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                z-index: 0;
             ">
        </div>
        <div class="blob-decoration position-absolute" style="z-index: 1;"></div>
        <div class="container position-relative z-2 text-center mt-5 mt-lg-0">
            <span class="badge bg-emerald-light text-emerald-dark px-3 py-2 rounded-pill mb-3 border border-emerald-200 shadow-sm">
                <i class="bi bi-patch-check-fill me-1"></i> Data Resmi 2025
            </span>
            <h1 class="display-3 display-md-2 fw-extrabold text-dark mb-4 font-display hero-title px-2">
                Kuliner Halal & <span class="text-emerald d-inline-block">Thayyib.</span>
            </h1>
            <p class="lead text-secondary mb-5 mx-auto px-3 px-md-0 fs-6 fs-md-5" style="max-width: 700px;">
                Platform informasi geografis untuk menemukan makanan yang <strong>Halal (Boleh)</strong> dan <strong>Thayyib (Baik/Sehat)</strong> di kawasan Sawangan, Depok.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-column flex-sm-row px-4 px-sm-0">
                <a href="#peta" class="btn btn-emerald btn-lg px-5 rounded-pill shadow hover-up w-100 w-sm-auto"><i class="bi bi-map-fill me-2"></i> Buka Peta</a>
                <a href="#adab" class="btn btn-outline-secondary btn-lg px-5 rounded-pill hover-up w-100 w-sm-auto">Pelajari Adab</a>
            </div>
        </div>
    </section>

    <section id="berita" class="py-section bg-surface border-top">
        <div class="container">
            <div class="text-center mb-5 mx-auto px-3" style="max-width: 800px;">
                <h6 class="text-emerald text-uppercase fw-bold ls-1"><i class="bi bi-newspaper me-2"></i>Info Terkini</h6>
                <h2 class="fw-bold text-dark display-6 font-display section-title">Berita & Artikel Halal</h2>
                <p class="text-muted">Update terbaru seputar regulasi halal dan rekomendasi kuliner.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-up">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Sertifikasi Halal" style="height: 200px; object-fit: cover;">
                            <span class="badge bg-emerald position-absolute top-0 end-0 m-3 shadow-sm">Berita</span>
                        </div>
                        <div class="card-body p-4">
                            <small class="text-muted d-block mb-2"><i class="bi bi-calendar-event me-1"></i> 20 Des 2025</small>
                            <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">Program Sehati 2025: Sertifikasi Halal Gratis</a></h5>
                            <p class="text-muted small mb-3">BPJPH kembali membuka kuota sertifikasi halal gratis (Sehati) untuk UMK di wilayah Depok...</p>
                            <a href="#" class="text-emerald fw-bold text-decoration-none small stretched-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-up">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Bahan Makanan" style="height: 200px; object-fit: cover;">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 shadow-sm">Edukasi</span>
                        </div>
                        <div class="card-body p-4">
                            <small class="text-muted d-block mb-2"><i class="bi bi-calendar-event me-1"></i> 18 Des 2025</small>
                            <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">Waspada Titik Kritis Kehalalan Daging</a></h5>
                            <p class="text-muted small mb-3">Mengenal istilah menu restoran yang samar kehalalannya, seperti penggunaan Angciu dan Mirin...</p>
                            <a href="#" class="text-emerald fw-bold text-decoration-none small stretched-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-up">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Restoran Sawangan" style="height: 200px; object-fit: cover;">
                            <span class="badge bg-emerald position-absolute top-0 end-0 m-3 shadow-sm">Rekomendasi</span>
                        </div>
                        <div class="card-body p-4">
                            <small class="text-muted d-block mb-2"><i class="bi bi-calendar-event me-1"></i> 15 Des 2025</small>
                            <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">5 Kuliner Legendaris Sawangan</a></h5>
                            <p class="text-muted small mb-3">Daftar tempat makan keluarga di Sawangan yang sudah mengantongi sertifikat halal MUI...</p>
                            <a href="#" class="text-emerald fw-bold text-decoration-none small stretched-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                 <a href="#" class="btn btn-outline-dark rounded-pill px-5">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    <section id="keterangan" class="py-5 bg-white border-top">
        <div class="container">
            <div class="text-center mb-5 mx-auto px-3" style="max-width: 800px;">
                <span class="text-emerald fw-bold text-uppercase ls-1 small"><i class="bi bi-info-circle-fill me-2"></i>Latar Belakang</span>
                <h2 class="fw-bold text-dark display-6 mb-3 font-display section-title">Dinamika Kuliner Sawangan</h2>
                <p class="text-secondary lead fs-6">Sawangan kini bukan sekadar wilayah transit, melainkan destinasi kuliner yang berkembang pesat di selatan Jakarta.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 bg-surface h-100 border-0 text-center hover-up transition-all">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white text-emerald rounded-circle shadow-sm mb-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-geo-alt-fill fs-2"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Segitiga Emas Strategis</h5>
                        <p class="text-muted small mb-0">Sebagai jalur penghubung vital antara <strong class="text-dark">Depok, Bogor, dan Tangsel</strong>, Sawangan mengalami lonjakan lalu lintas dan pertumbuhan sentra kuliner.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 bg-surface h-100 border-0 text-center hover-up transition-all">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white text-emerald rounded-circle shadow-sm mb-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-people-fill fs-2"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Prioritas Halal</h5>
                        <p class="text-muted small mb-0">Dengan mayoritas penduduk Muslim, jaminan <strong class="text-dark">Produk Halal</strong> bukan sekadar gaya hidup, melainkan kebutuhan fundamental demi ketenangan batin.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 rounded-4 bg-surface h-100 border-0 text-center hover-up transition-all">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white text-emerald rounded-circle shadow-sm mb-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-database-check fs-2"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-3">Tantangan Informasi</h5>
                        <p class="text-muted small mb-0">Masyarakat seringkali kesulitan memverifikasi status kehalalan UMKM karena <strong class="text-dark">minimnya data terpusat</strong>. Kami hadir sebagai jembatan informasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wawasan" class="py-section bg-surface border-top">
        <div class="container">
            <div class="text-center mb-5 px-3">
                <h6 class="text-emerald text-uppercase fw-bold ls-1"><i class="bi bi-book-half me-2"></i>Landasan Syariah</h6>
                <h2 class="fw-bold text-dark display-6 font-display section-title">Mengapa Harus Halal?</h2>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-emerald text-white">Al-Qur'an</span>
                            <i class="bi bi-book-half text-emerald fs-3 opacity-50"></i>
                        </div>
                        <p class="arabic-text text-end fs-3 text-dark mb-3" dir="rtl" style="line-height: 2;">يَا أَيُّهَا النَّاسُ كُلُوا مِمَّا فِي الْأَرْضِ حَلَالًا طَيِّبًا</p>
                        <div class="border-start border-4 border-emerald ps-3">
                            <p class="text-muted fst-italic mb-0">"Wahai manusia! Makanlah dari (makanan) yang <strong>halal</strong> dan <strong>baik</strong> yang terdapat di bumi..." <br><small class="fw-bold">(QS. Al-Baqarah: 168)</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-warning text-dark">Hadist</span>
                            <i class="bi bi-chat-quote-fill text-warning fs-3 opacity-50"></i>
                        </div>
                        <p class="arabic-text text-end fs-3 text-dark mb-3" dir="rtl" style="line-height: 2;">إِنَّ اللَّهَ طَيِّبٌ لَا يَقْبَلُ إِلَّا طَيِّبًا</p>
                        <div class="border-start border-4 border-warning ps-3">
                            <p class="text-muted fst-italic mb-0">"Sesungguhnya Allah itu <strong>Thayyib (Baik)</strong>, tidak menerima kecuali yang baik..." <br><small class="fw-bold">(HR. Muslim)</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm">
                        <div class="icon-circle bg-emerald-light text-emerald mb-3"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h5 class="fw-bold font-display">Kesehatan Fisik</h5>
                        <p class="text-muted small">Makanan halal pasti bersih dari darah, bangkai, dan kotoran yang membawa penyakit bagi tubuh.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm">
                        <div class="icon-circle bg-emerald-light text-emerald mb-3"><i class="bi bi-lightbulb-fill"></i></div>
                        <h5 class="fw-bold font-display">Kejernihan Akal</h5>
                        <p class="text-muted small">Menghindari makanan/minuman memabukkan (Khamr) menjaga akal tetap sehat dan sadar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm">
                        <div class="icon-circle bg-emerald-light text-emerald mb-3"><i class="bi bi-stars"></i></div>
                        <h5 class="fw-bold font-display">Kabulnya Doa</h5>
                        <p class="text-muted small">Rasulullah SAW bersabda bahwa makanan haram adalah penghalang utama diterimanya doa.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-white border-start border-5 border-success shadow-sm h-100">
                        <h4 class="fw-bold text-success mb-3 font-display"><i class="bi bi-check-circle-fill me-2"></i> Kriteria Halal</h4>
                        <ul class="list-unstyled text-secondary d-grid gap-2 small">
                            <li><i class="bi bi-check-lg text-success me-2"></i> Hewan disembelih dengan Nama Allah.</li>
                            <li><i class="bi bi-check-lg text-success me-2"></i> Semua hewan laut (ikan/udang) segar.</li>
                            <li><i class="bi bi-check-lg text-success me-2"></i> Tumbuhan & buah tidak beracun.</li>
                            <li><i class="bi bi-check-lg text-success me-2"></i> Higienis & Thayyib (Baik).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-white border-start border-5 border-danger shadow-sm h-100">
                        <h4 class="fw-bold text-danger mb-3 font-display"><i class="bi bi-x-circle-fill me-2"></i> Kriteria Haram</h4>
                        <ul class="list-unstyled text-secondary d-grid gap-2 small">
                            <li><i class="bi bi-x-lg text-danger me-2"></i> Babi, Anjing, dan turunannya.</li>
                            <li><i class="bi bi-x-lg text-danger me-2"></i> Bangkai & Darah yang mengalir.</li>
                            <li><i class="bi bi-x-lg text-danger me-2"></i> Hewan buas bertaring/berkuku tajam.</li>
                            <li><i class="bi bi-x-lg text-danger me-2"></i> Khamr (Alkohol) & Memabukkan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="adab" class="py-section bg-white border-top">
        <div class="container">
            <div class="text-center mb-5 px-3">
                <h6 class="text-emerald text-uppercase fw-bold ls-1"><i class="bi bi-heart-fill me-2"></i>Etika Islami</h6>
                <h2 class="fw-bold text-dark display-6 font-display section-title">Adab Makan & Minum</h2>
                <p class="text-muted">Menjadikan aktivitas makan bernilai ibadah.</p>
            </div>
            <div class="bg-dark text-white rounded-4 p-4 p-lg-5 position-relative overflow-hidden mx-2 mx-md-0">
                <div class="blob-decoration opacity-10"></div>
                <div class="position-relative z-2">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex gap-3">
                                <div class="icon-circle bg-emerald text-white flex-shrink-0"><i class="bi bi-chat-text"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Membaca Basmalah</h5>
                                    <p class="arabic-text text-emerald fs-4 mb-0">بِسْمِ اللَّهِ</p>
                                    <p class="text-white-50 small mb-0">"Dengan menyebut nama Allah"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex gap-3">
                                <div class="icon-circle bg-emerald text-white flex-shrink-0"><i class="bi bi-hand-index-thumb"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Tangan Kanan</h5>
                                    <p class="arabic-text text-emerald fs-4 mb-0">كُلْ بِيَمِينِكَ</p>
                                    <p class="text-white-50 small mb-0">"Makanlah dengan tangan kananmu"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex gap-3">
                                <div class="icon-circle bg-emerald text-white flex-shrink-0"><i class="bi bi-heart-fill"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Akhiri Hamdalah</h5>
                                    <p class="arabic-text text-emerald fs-4 mb-0">الْحَمْدُ لِلَّهِ</p>
                                    <p class="text-white-50 small mb-0">"Segala puji bagi Allah"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><hr class="border-white opacity-25 my-4"></div>
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-person-check fs-3 text-emerald"></i>
                                <div><h6 class="fw-bold mb-0">Duduk Tawadhu</h6><small class="text-white-50">Tidak makan sambil berdiri.</small></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-slash-circle fs-3 text-emerald"></i>
                                <div><h6 class="fw-bold mb-0">Tidak Mencela</h6><small class="text-white-50">Jika tidak suka, cukup tinggalkan.</small></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-cup-straw fs-3 text-emerald"></i>
                                <div><h6 class="fw-bold mb-0">Tidak Berlebihan</h6><small class="text-white-50">Berhenti sebelum kenyang.</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="peta" class="py-section bg-surface border-top">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-8 px-3">
                    <span class="badge bg-emerald text-white mb-2 px-3 py-2 rounded-pill"><i class="bi bi-broadcast me-2"></i>LIVE DATA</span>
                    <h2 class="fw-bold text-dark font-display section-title">Peta Persebaran Digital</h2>
                    <p class="text-muted">Gunakan tombol di pojok kanan atas peta untuk mengganti tampilan.</p>
                </div>
            </div>
            <div class="map-frame p-2 bg-white rounded-4 shadow-lg border mx-2 mx-md-0">
                <div id="map"></div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 bg-white position-relative overflow-hidden border-top px-3 px-md-0">
        <div class="position-absolute top-50 start-0 translate-middle-y opacity-10 d-none d-lg-block" style="z-index: 0; color: #d1fae5; pointer-events: none;">
            <svg width="600" height="600" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,80.3,-46.4C88.8,-33.7,92.8,-16.8,91.7,-0.6C90.6,15.6,84.4,31.2,75.7,43.9C67,56.6,55.8,66.3,42.9,74.1C30,81.9,15,87.8,-0.4,88.5C-15.9,89.2,-31.7,84.7,-45.4,77.1C-59.1,69.5,-70.7,58.9,-79.7,46.2C-88.7,33.5,-95.1,16.7,-95.5,-0.2C-95.8,-17.1,-90.2,-34.3,-80.8,-47.7C-71.4,-61.1,-58.2,-70.8,-44.3,-78.1C-30.4,-85.4,-15.2,-90.3,0.4,-91C16,-91.7,32,-88.2,44.7,-76.4Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="container py-4 position-relative z-2">
            <div class="text-center mb-5 mx-auto px-2" style="max-width: 700px;">
                <h6 class="text-emerald fw-bold ls-2 text-uppercase mb-3"><i class="bi bi-people-fill me-2"></i>Tentang Kami</h6>
                <h2 class="display-5 fw-extrabold text-dark mb-3 font-display section-title">Para Penggerak <span class="text-emerald">Kebaikan.</span></h2>
                <p class="lead text-secondary fs-6">Berkenalan dengan tim berdedikasi yang bekerja di balik layar untuk memetakan ekosistem kuliner Halal & Thayyib di Sawangan.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
                 <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 team-card bg-white">
                        <div class="mb-4 position-relative mx-auto" style="width: 130px; height: 130px;">
                            <img src="<?= base_url('assets/images/about/Aprido.png') ?>" class="rounded-circle img-fluid shadow-sm w-100 h-100 object-fit-cover" alt="Aprido Ilham">
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Aprido Ilham</h5>
                        <p class="text-emerald small fw-bold text-uppercase mb-3 ls-1">11220930000004</p>
                        <p class="text-secondary small opacity-75 mb-0">Project Manager</p>
                    </div>
                </div>
                 <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 team-card bg-white">
                        <div class="mb-4 position-relative mx-auto" style="width: 130px; height: 130px;">
                            <img src="<?= base_url('assets/images/about/Fahri.png') ?>" class="rounded-circle img-fluid shadow-sm w-100 h-100 object-fit-cover" alt="Fahri Afrizal">
                        </div>
                        <h5 class="fw-bold text-dark mb-1">M. Fahri Afrizal</h5>
                        <p class="text-emerald small fw-bold text-uppercase mb-3 ls-1">1122093000002</p>
                        <p class="text-secondary small opacity-75 mb-0">GIS Specialist</p>
                    </div>
                </div>
                 <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 team-card bg-white">
                        <div class="mb-4 position-relative mx-auto" style="width: 130px; height: 130px;">
                            <img src="<?= base_url('assets/images/about/Caesar.jpeg') ?>" class="rounded-circle img-fluid shadow-sm w-100 h-100 object-fit-cover" alt="Caesar Maulana">
                        </div>
                        <h5 class="fw-bold text-dark mb-1">M. Caesar M</h5>
                        <p class="text-emerald small fw-bold text-uppercase mb-3 ls-1">11220930000016</p>
                        <p class="text-secondary small opacity-75 mb-0">Web Developer</p>
                    </div>
                </div>
                 <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 team-card bg-white">
                        <div class="mb-4 position-relative mx-auto" style="width: 130px; height: 130px;">
                            <img src="<?= base_url('assets/images/about/Janet.jpeg') ?>" class="rounded-circle img-fluid shadow-sm w-100 h-100 object-fit-cover" alt="Janniethia">
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Janniethia</h5>
                        <p class="text-emerald small fw-bold text-uppercase mb-3 ls-1">11220930000019</p>
                        <p class="text-secondary small opacity-75 mb-0">Data Research</p>
                    </div>
                </div>
                 <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 team-card bg-white">
                        <div class="mb-4 position-relative mx-auto" style="width: 130px; height: 130px;">
                            <img src="<?= base_url('assets/images/about/Ayu.png') ?>" class="rounded-circle img-fluid shadow-sm w-100 h-100 object-fit-cover" alt="Ayu Kusuma">
                        </div>
                        <h5 class="fw-bold text-dark mb-1">Ayu Kusuma</h5>
                        <p class="text-emerald small fw-bold text-uppercase mb-3 ls-1">11220930000021</p>
                        <p class="text-secondary small opacity-75 mb-0">UI/UX Design</p>
                    </div>
                </div>
            </div> 
        </div> 
    </section>

    <section id="teknologi" class="py-section bg-surface border-top">
        <div class="container">
            <div class="text-center mb-5 mx-auto px-3" style="max-width: 600px;">
                <span class="text-emerald fw-bold text-uppercase ls-1 small"><i class="bi bi-cpu-fill me-2"></i>Tech Stack</span>
                <h2 class="fw-bold text-dark display-6 font-display mb-3 section-title">Teknologi Pembangun</h2>
                <p class="text-secondary">Dibangun di atas fondasi teknologi yang cepat, aman, dan handal.</p>
            </div>
            <div class="row g-3 g-md-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="tech-card bg-white p-3 p-md-4 rounded-4 text-center h-100 shadow-sm border border-light position-relative overflow-hidden">
                        <div class="tech-icon-wrapper bg-orange-light text-orange mb-3 mx-auto"><i class="bi bi-fire fs-3"></i></div>
                        <h6 class="fw-bold text-dark mb-1">CodeIgniter 3</h6>
                        <small class="text-muted d-block">Backend</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="tech-card bg-white p-3 p-md-4 rounded-4 text-center h-100 shadow-sm border border-light position-relative overflow-hidden">
                        <div class="tech-icon-wrapper bg-purple-light text-purple mb-3 mx-auto"><i class="bi bi-bootstrap-fill fs-3"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Bootstrap 5</h6>
                        <small class="text-muted d-block">Frontend</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="tech-card bg-white p-3 p-md-4 rounded-4 text-center h-100 shadow-sm border border-light position-relative overflow-hidden">
                        <div class="tech-icon-wrapper bg-green-light text-green mb-3 mx-auto"><i class="bi bi-map-fill fs-3"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Leaflet JS</h6>
                        <small class="text-muted d-block">Maps</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="tech-card bg-white p-3 p-md-4 rounded-4 text-center h-100 shadow-sm border border-light position-relative overflow-hidden">
                        <div class="tech-icon-wrapper bg-dark-light text-dark mb-3 mx-auto"><i class="bi bi-filetype-json fs-3"></i></div>
                        <h6 class="fw-bold text-dark mb-1">GeoJSON</h6>
                        <small class="text-muted d-block">Data</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-premium bg-dark text-white position-relative mt-auto">
        <div class="footer-wave-container">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#212529" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,112C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

        <div class="container position-relative z-2 pt-4 pb-5">
            <div class="row g-4 g-lg-5 justify-content-between">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="d-flex flex-column">
                            <h3 class="brand-text text-white mb-0 font-display" style="letter-spacing: 1px; line-height: 1.2;">SIG-HALAL</h3>
                            <span class="text-emerald small ls-2 text-uppercase fw-bold">Sawangan Area</span>
                        </div>
                    </div>
                    <p class="text-gray-400 lh-lg mb-0">Platform sistem informasi geografis (SIG) yang berdedikasi untuk memetakan dan menghubungkan masyarakat dengan ekosistem kuliner Halal & Thayyib.</p>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h6 class="text-white fw-bold mb-4 text-uppercase ls-1">Jelajahi</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li><a href="#hero" class="text-gray-400 text-decoration-none footer-link transition-all"><i class="bi bi-chevron-right fs-xs me-2 text-emerald"></i>Beranda</a></li>
                        <li><a href="#peta" class="text-gray-400 text-decoration-none footer-link transition-all"><i class="bi bi-chevron-right fs-xs me-2 text-emerald"></i>Peta Digital</a></li>
                        <li><a href="#adab" class="text-gray-400 text-decoration-none footer-link transition-all"><i class="bi bi-chevron-right fs-xs me-2 text-emerald"></i>Adab Makan</a></li>
                        <li><a href="#berita" class="text-gray-400 text-decoration-none footer-link transition-all"><i class="bi bi-chevron-right fs-xs me-2 text-emerald"></i>Berita</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-5 col-6">
                    <h6 class="text-white fw-bold mb-4 text-uppercase ls-1">Hubungi</h6>
                    <ul class="list-unstyled d-flex flex-column gap-4 mb-0">
                        <li class="d-flex gap-3">
                            <div class="flex-shrink-0 mt-1"><i class="bi bi-geo-alt-fill text-emerald fs-5"></i></div>
                            <span class="text-gray-400 lh-base text-break">Fakultas Sains dan Teknologi,<br>UIN Jakarta.</span>
                        </li>
                        <li class="d-flex gap-3 align-items-center">
                             <div class="flex-shrink-0"><i class="bi bi-envelope-fill text-emerald fs-5"></i></div>
                            <a href="mailto:kelompok4@uinjkt.ac.id" class="text-gray-400 text-decoration-none footer-link transition-all text-break">kelompok4@uinjkt.ac.id</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6 class="text-white fw-bold mb-4 text-uppercase ls-1">Ikuti & Dukung</h6>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="social-btn-outline rounded-circle d-flex align-items-center justify-content-center transition-all" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-btn-outline rounded-circle d-flex align-items-center justify-content-center transition-all" aria-label="GitHub"><i class="bi bi-github"></i></a>
                        <a href="#" class="social-btn-outline rounded-circle d-flex align-items-center justify-content-center transition-all" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <hr class="border-white opacity-10 my-5">
            
            <div class="row align-items-center pb-3">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small class="text-gray-400">© 2025 <strong>Kelompok 4 SIG</strong>. All rights reserved.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item me-3"><a href="#" class="text-gray-400 text-decoration-none footer-link">Privacy</a></li>
                        <li class="list-inline-item"><span class="text-gray-400">Dibuat dengan <i class="bi bi-heart-fill text-danger mx-1"></i></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.js"></script>
    <script>const BASE_URL = '<?= base_url() ?>';</script>
    <script src="<?= base_url('assets/js/main.js?v=58.0') ?>"></script>
</body>
</html>