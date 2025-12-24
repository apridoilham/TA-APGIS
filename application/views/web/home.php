<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.css" />
    
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=45.0') ?>">

    <!-- Additional styles or scripts can be added here (Caesar) -->
</head>
<body class="bg-light-gray">

    <nav class="navbar navbar-expand-lg fixed-top glass-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="icon-box bg-emerald text-white rounded-3"><i class="bi bi-moon-stars-fill"></i></div>
                <div class="lh-1">
                    <span class="fw-bold text-dark d-block">SIG-HALAL</span>
                    <span class="fs-xs text-muted">Sawangan Area</span>
                </div>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuUtama">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-3">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#wawasan">Dalil & Wawasan</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#adab">Adab Makan</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#peta">Peta</a></li>
                    <li class="nav-item"><a class="btn btn-emerald rounded-pill px-4 shadow-sm" href="#peta">Mulai Jelajah</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="d-flex align-items-center min-vh-100 bg-white position-relative overflow-hidden">
        <div class="blob-decoration"></div>
        <div class="container position-relative z-2 text-center">

            <div class="mb-4">
                <img src="<?= base_url('assets/images/halal.png') ?>" alt="Logo Halal" style="max-height: 250px;" class="img-fluid hover-up">
            </div>

            <span class="badge bg-emerald-light text-emerald-dark px-3 py-2 rounded-pill mb-3 border border-emerald-200">
                <i class="bi bi-check-circle-fill me-1"></i> Data Resmi 2025
            </span>
            <h1 class="display-3 fw-extrabold text-dark mb-4">
                Kuliner Halal & <span class="text-emerald">Thayyib.</span>
            </h1>
            <p class="lead text-secondary mb-5 mx-auto" style="max-width: 700px;">
                Platform informasi geografis untuk menemukan makanan yang <strong>Halal (Boleh)</strong> dan <strong>Thayyib (Baik/Sehat)</strong> di kawasan Sawangan, Depok.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#peta" class="btn btn-emerald btn-lg px-5 rounded-pill shadow hover-up"><i class="bi bi-map-fill me-2"></i> Buka Peta</a>
                <a href="#adab" class="btn btn-outline-secondary btn-lg px-5 rounded-pill hover-up">Pelajari Adab</a>
            </div>
        </div>
    </section>

    <section id="wawasan" class="py-section bg-surface">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-emerald text-uppercase fw-bold ls-1">Landasan Syariah</h6>
                <h2 class="fw-bold text-dark display-6">Mengapa Harus Halal?</h2>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-emerald text-white">Al-Qur'an</span>
                            <i class="bi bi-book-half text-emerald fs-3 opacity-50"></i>
                        </div>
                        <p class="arabic-text text-end fs-3 text-dark mb-3" dir="rtl" style="line-height: 2;">
                            يَا أَيُّهَا النَّاسُ كُلُوا مِمَّا فِي الْأَرْضِ حَلَالًا طَيِّبًا
                        </p>
                        <div class="border-start border-4 border-emerald ps-3">
                            <p class="text-muted fst-italic mb-0">"Wahai manusia! Makanlah dari (makanan) yang <strong>halal</strong> dan <strong>baik</strong> yang terdapat di bumi..." <br><small class="fw-bold">(QS. Al-Baqarah: 168)</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-warning text-dark">Hadist</span>
                            <i class="bi bi-chat-quote-fill text-warning fs-3 opacity-50"></i>
                        </div>
                        <p class="arabic-text text-end fs-3 text-dark mb-3" dir="rtl" style="line-height: 2;">
                            إِنَّ اللَّهَ طَيِّبٌ لَا يَقْبَلُ إِلَّا طَيِّبًا
                        </p>
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
                        <h5 class="fw-bold">Kesehatan Fisik</h5>
                        <p class="text-muted small">Makanan halal pasti bersih dari darah, bangkai, dan kotoran yang membawa penyakit bagi tubuh.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm">
                        <div class="icon-circle bg-emerald-light text-emerald mb-3"><i class="bi bi-lightbulb-fill"></i></div>
                        <h5 class="fw-bold">Kejernihan Akal</h5>
                        <p class="text-muted small">Menghindari makanan/minuman memabukkan (Khamr) menjaga akal tetap sehat dan sadar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-info h-100 p-4 bg-white rounded-4 border-0 shadow-sm">
                        <div class="icon-circle bg-emerald-light text-emerald mb-3"><i class="bi bi-stars"></i></div>
                        <h5 class="fw-bold">Kabulnya Doa</h5>
                        <p class="text-muted small">Rasulullah SAW bersabda bahwa makanan haram adalah penghalang utama diterimanya doa.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-white border-start border-5 border-success shadow-sm h-100">
                        <h4 class="fw-bold text-success mb-3"><i class="bi bi-check-circle-fill me-2"></i> Kriteria Halal</h4>
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
                        <h4 class="fw-bold text-danger mb-3"><i class="bi bi-x-circle-fill me-2"></i> Kriteria Haram</h4>
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
            <div class="text-center mb-5">
                <h6 class="text-emerald text-uppercase fw-bold ls-1">Etika Islami</h6>
                <h2 class="fw-bold text-dark display-6">Adab Makan & Minum</h2>
                <p class="text-muted">Menjadikan aktivitas makan bernilai ibadah.</p>
            </div>

            <div class="bg-dark text-white rounded-4 p-4 p-md-5 position-relative overflow-hidden">
                <div class="blob-decoration opacity-10"></div>
                <div class="position-relative z-2">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <div class="icon-circle bg-emerald text-white flex-shrink-0"><i class="bi bi-chat-text"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Membaca Basmalah</h5>
                                    <p class="arabic-text text-emerald fs-4 mb-0">بِسْمِ اللَّهِ</p>
                                    <p class="text-white-50 small mb-0">"Dengan menyebut nama Allah"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <div class="icon-circle bg-emerald text-white flex-shrink-0"><i class="bi bi-hand-index-thumb"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Tangan Kanan</h5>
                                    <p class="arabic-text text-emerald fs-4 mb-0">كُلْ بِيَمِينِكَ</p>
                                    <p class="text-white-50 small mb-0">"Makanlah dengan tangan kananmu"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-person-check fs-3 text-emerald"></i>
                                <div><h6 class="fw-bold mb-0">Duduk Tawadhu</h6><small class="text-white-50">Tidak makan sambil berdiri.</small></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-slash-circle fs-3 text-emerald"></i>
                                <div><h6 class="fw-bold mb-0">Tidak Mencela</h6><small class="text-white-50">Jika tidak suka, cukup tinggalkan.</small></div>
                            </div>
                        </div>
                        <div class="col-md-4">
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

    <section id="peta" class="py-section bg-surface">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-8">
                    <span class="badge bg-emerald text-white mb-2 px-3 py-2 rounded-pill">LIVE DATA</span>
                    <h2 class="fw-bold text-dark">Peta Persebaran Digital</h2>
                    <p class="text-muted">Gunakan tombol di pojok kanan atas peta untuk mengganti tampilan.</p>
                </div>
            </div>
            <div class="map-frame p-2 bg-white rounded-4 shadow-lg border">
                <div id="map"></div>
            </div>
        </div>
    </section>

    <section id="teknologi" class="py-5 bg-white border-top">
        <div class="container text-center">
            <p class="text-uppercase text-muted fw-bold small mb-4">Website ini dibangun menggunakan:</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <div class="tech-badge bg-white shadow-sm"><i class="bi bi-fire text-warning"></i> CodeIgniter 3</div>
                <div class="tech-badge bg-white shadow-sm"><i class="bi bi-bootstrap-fill text-primary"></i> Bootstrap 5</div>
                <div class="tech-badge bg-white shadow-sm"><i class="bi bi-map-fill text-success"></i> Leaflet JS</div>
                <div class="tech-badge bg-white shadow-sm"><i class="bi bi-filetype-json text-dark"></i> GeoJSON</div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center">
        <div class="container">
            <small class="opacity-50">© 2025 Kelompok 4. Sistem Informasi Geospasial UIN Jakarta.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.js"></script>
    <script>const BASE_URL = '<?= base_url() ?>';</script>
    <script src="<?= base_url('assets/js/main.js?v=45.0') ?>"></script>
</body>
</html>