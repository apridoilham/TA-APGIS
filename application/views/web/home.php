<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Geospasial Halal (SIG-Halal) Sawangan.">
    <title><?= $title ?></title>
    <link rel="icon" href="https://placehold.co/32x32/00BCD4/FFFFFF?text=SIG" type="image/png">
    
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.css" />
    
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=20.0') ?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white/90 backdrop-blur py-3 sticky-top shadow-sm border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bolder text-teal d-flex align-items-center" href="<?= base_url() ?>">
                <span class="icon-box bg-teal text-white rounded-2 me-2 d-flex align-items-center justify-content-center" style="width:35px;height:35px;"><i class="bi bi-map-fill"></i></span>
                <span>SIG-HALAL.id</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#halal-info">Edukasi Halal</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#peta">Peta Lokasi</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#team">Tim Kami</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-teal px-4 rounded-pill fw-bold shadow-sm" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header id="hero" class="hero-section position-relative overflow-hidden" style="background: linear-gradient(135deg, #f0fdf4 0%, #e0f2f1 100%);">
        <div class="position-absolute top-0 end-0 translate-middle-y bg-teal opacity-10 rounded-circle" style="width:300px;height:300px;filter:blur(60px);"></div>
        <div class="position-absolute bottom-0 start-0 translate-middle-y bg-coral opacity-10 rounded-circle" style="width:200px;height:200px;filter:blur(50px);"></div>

        <div class="container text-center py-5 position-relative" style="z-index: 2; margin-top: 40px;">
            <span class="badge badge-custom-header rounded-pill mb-4 text-uppercase">
                <i class="bi bi-geo-alt-fill me-1 text-coral"></i> GIS Project • Kelompok 4
            </span>
            
            <h1 class="display-3 fw-bolder mb-3 text-dark-custom tracking-tight">Sistem Informasi <span class="text-teal-gradient">Geospasial Halal</span></h1>
            <h2 class="h5 mb-4 text-muted fw-normal">Studi Kasus Pemetaan Kuliner: Kecamatan Sawangan, Kota Depok</h2>
            <p class="lead mx-auto mb-5 text-muted" style="max-width: 800px;">
                Mengintegrasikan teknologi pemetaan digital untuk mempermudah masyarakat menemukan destinasi kuliner yang <b>Halal</b> dan <b>Thayyib</b>.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#peta" class="btn btn-teal btn-lg px-5 rounded-pill shadow-lg hover-lift"><i class="bi bi-map me-2"></i> Buka Peta</a>
                <a href="#halal-info" class="btn btn-outline-teal btn-lg px-5 rounded-pill hover-lift">Pelajari Halal</a>
            </div>
        </div>
    </header>
    
    <section id="halal-info" class="py-5 bg-white position-relative">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-dark-custom">Pentingnya Makanan Halal</h2>
                <div class="divider mx-auto bg-teal rounded"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm hover-card bg-light-pattern">
                        <div class="card-body p-4">
                            <div class="icon-box-lg bg-white shadow-sm text-teal rounded-circle mb-3"><i class="bi bi-book-half"></i></div>
                            <h4 class="fw-bold text-teal mb-3">Definisi Halal & Thayyib</h4>
                            <p class="text-secondary text-justify">
                                <b>Halal</b> (حلال) adalah segala sesuatu yang diperbolehkan oleh syariat Islam. 
                                Harus disertai dengan <b>Thayyib</b> (طيب) yang berarti baik, bersih, bergizi, dan aman.
                            </p>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-2 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-teal me-2"></i> Bebas zat haram (Babi, Alkohol).</li>
                                <li class="mb-2 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-teal me-2"></i> Penyembelihan syar'i.</li>
                                <li class="mb-2 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-teal me-2"></i> Higienis & Aman (Thayyib).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm mb-4 border-start border-4 border-teal">
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-dark-custom mb-3"><i class="bi bi-quote me-2 text-teal"></i> Dalil Al-Qur'an</h5>
                            <p class="arabic-text text-end fs-3 mb-2 text-dark-custom" dir="rtl">
                                يَا أَيُّهَا النَّاسُ كُلُوا مِمَّا فِي الْأَرْضِ حَلَالًا طَيِّبًا
                            </p>
                            <p class="fst-italic text-muted small mb-0">"Wahai manusia! Makanlah dari (makanan) yang halal dan baik yang terdapat di bumi..." (QS. Al-Baqarah: 168)</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm border-start border-4 border-coral">
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-dark-custom mb-3"><i class="bi bi-chat-quote-fill me-2 text-coral"></i> Hadist Nabi SAW</h5>
                            <p class="arabic-text text-end fs-4 mb-2 text-dark-custom" dir="rtl">
                                أَيُّهَا النَّاسُ إِنَّ اللَّهَ طَيِّبٌ لَا يَقْبَلُ إِلَّا طَيِّبًا
                            </p>
                            <p class="fst-italic text-muted small mb-0">"Sesungguhnya Allah itu <b>Thayyib</b> (baik), tidak menerima kecuali yang baik..." (HR. Muslim)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="peta" class="py-5 bg-light-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-teal">Peta Interaktif Sawangan</h2>
                <p class="text-muted">Data lokasi kuliner berdasarkan survei lapangan (Data Real).</p>
            </div>
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden p-1 bg-white">
                <div class="card-body p-0 position-relative">
                    <div id="map" style="height: 650px; width: 100%; border-radius: 12px;"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="py-5 bg-white border-top">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase text-teal fw-bold letter-spacing-2 small">Tim Pengembang</span>
                <h2 class="fw-bolder text-dark-custom mt-2">Kelompok 4</h2>
                <div class="divider mx-auto bg-coral rounded"></div>
            </div>

            <div class="row justify-content-center g-4 mb-5">
                <div class="col-md-6 col-lg-4"><div class="team-card p-4 text-center rounded-4 h-100 border hover-lift"><div class="avatar mx-auto mb-3 bg-teal-light text-teal fw-bold d-flex align-items-center justify-content-center fs-4 rounded-circle" style="width: 80px; height: 80px;">MF</div><h5 class="fw-bold text-dark mb-1">M. Fahri Afrizal</h5><p class="text-muted small mb-0">NIM: 11220930000002</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="team-card p-4 text-center rounded-4 h-100 border hover-lift border-teal"><div class="avatar mx-auto mb-3 bg-teal text-white fw-bold d-flex align-items-center justify-content-center fs-4 rounded-circle" style="width: 80px; height: 80px;">AI</div><h5 class="fw-bold text-dark mb-1">Aprido Ilham</h5><p class="text-muted small mb-0">NIM: 11220930000004</p><span class="badge bg-teal mt-2 rounded-pill">Map Developer</span></div></div>
                <div class="col-md-6 col-lg-4"><div class="team-card p-4 text-center rounded-4 h-100 border hover-lift"><div class="avatar mx-auto mb-3 bg-teal-light text-teal fw-bold d-flex align-items-center justify-content-center fs-4 rounded-circle" style="width: 80px; height: 80px;">MC</div><h5 class="fw-bold text-dark mb-1">M. Caesar M.</h5><p class="text-muted small mb-0">NIM: 11220930000016</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="team-card p-4 text-center rounded-4 h-100 border hover-lift"><div class="avatar mx-auto mb-3 bg-coral-light text-coral fw-bold d-flex align-items-center justify-content-center fs-4 rounded-circle" style="width: 80px; height: 80px;">J</div><h5 class="fw-bold text-dark mb-1">Janniethia</h5><p class="text-muted small mb-0">NIM: 11220930000019</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="team-card p-4 text-center rounded-4 h-100 border hover-lift"><div class="avatar mx-auto mb-3 bg-coral-light text-coral fw-bold d-flex align-items-center justify-content-center fs-4 rounded-circle" style="width: 80px; height: 80px;">AK</div><h5 class="fw-bold text-dark mb-1">Ayu Kusuma Dewi</h5><p class="text-muted small mb-0">NIM: 11220930000021</p></div></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="project-case-study-card p-5 rounded-4 shadow-sm text-center">
                        <div class="icon-wrapper mb-4"><i class="bi bi-file-earmark-code display-3 text-teal-gradient"></i></div>
                        <h5 class="text-muted text-uppercase letter-spacing-2 mb-2 small fw-bold">Fokus Penelitian</h5>
                        <h3 class="fw-bolder text-dark mb-3">Studi Kasus: Penerapan SIG Akademik</h3>
                        <p class="text-muted mb-0">Implementasi teknis pemetaan data menggunakan CodeIgniter 3, Leaflet.js, dan Bootstrap 5.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light-soft position-relative overflow-hidden">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-dark-custom">Hubungi Kami</h2>
                <p class="text-muted">Punya pertanyaan atau masukan? Kirimkan pesan kepada kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-lg rounded-4 h-100 overflow-hidden bg-teal-dark text-white">
                        <div class="card-body p-4 p-lg-5">
                            <h4 class="fw-bold mb-4">Info Kontak</h4>
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-white/20 rounded-circle p-2 me-3"><i class="bi bi-geo-alt-fill fs-5"></i></div>
                                <div><h6 class="fw-bold mb-1">Lokasi Kampus</h6><p class="small opacity-75 mb-0">FST UIN Syarif Hidayatullah Jakarta</p></div>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-white/20 rounded-circle p-2 me-3"><i class="bi bi-envelope-fill fs-5"></i></div>
                                <div><h6 class="fw-bold mb-1">Email</h6><p class="small opacity-75 mb-0">kelompok4@uinjkt.ac.id</p></div>
                            </div>
                            <hr class="border-white opacity-25">
                            <div class="d-flex gap-2 mt-4">
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width:40px;height:40px;"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width:40px;height:40px;"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg rounded-4 h-100 bg-white">
                        <div class="card-body p-4 p-lg-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-muted">Nama Lengkap</label>
                                        <input type="text" class="form-control bg-light border-0" placeholder="Nama Anda">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold small text-muted">Email</label>
                                        <input type="email" class="form-control bg-light border-0" placeholder="email@contoh.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold small text-muted">Pesan</label>
                                        <textarea class="form-control bg-light border-0" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="button" class="btn btn-teal px-5 rounded-pill fw-bold hover-lift w-100 w-md-auto">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark-custom text-white py-4 mt-5 border-top border-teal border-5">
        <div class="container text-center">
            <p class="small text-white-50 mb-0">© 2025 SIG-HALAL Sawangan | Kelompok 4 UIN Jakarta</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
    <script>const BASE_URL = '<?= base_url() ?>';</script>
    <script src="<?= base_url('assets/js/main.js?v=15.7') ?>"></script>
</body>
</html>