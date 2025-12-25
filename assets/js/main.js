document.addEventListener("DOMContentLoaded", function () {
	// 0. AUTO CLOSE NAVBAR (MOBILE)
	document.querySelectorAll(".navbar-nav .nav-link").forEach((link) => {
		link.addEventListener("click", () => {
			const navbarCollapse = document.getElementById("menuUtama");
			if (navbarCollapse.classList.contains("show")) {
				new bootstrap.Collapse(navbarCollapse).hide();
			}
		});
	});

	// 1. SETUP MAP
	const center = [-6.3811, 106.7725];
	const isMobile = window.innerWidth < 768;
	const zoom = isMobile ? 13 : 14;

	const g_road = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
		{
			maxZoom: 20,
			subdomains: ["mt0", "mt1", "mt2", "mt3"],
			attribution: "Google Maps",
		}
	);
	const g_sat = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
		{
			maxZoom: 20,
			subdomains: ["mt0", "mt1", "mt2", "mt3"],
			attribution: "Google Satellite",
		}
	);
	const osm = L.tileLayer(
		"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
		{ attribution: "OpenStreetMap" }
	);

	const map = L.map("map", {
		center: center,
		zoom: zoom,
		zoomControl: false,
		layers: [g_road],
		dragging: !L.Browser.mobile,
		tap: !L.Browser.mobile,
	});

	if (L.Browser.mobile) {
		map.dragging.enable();
		map.tap.enable();
	}
	L.control.zoom({ position: "bottomright" }).addTo(map);

	// 2. GROUPS
	const markerGroup = L.featureGroup().addTo(map);
	const polygonGroup = L.featureGroup();
	const roadGroup = L.featureGroup();

	L.control
		.layers(
			{ "Peta Jalan": g_road, "Peta Satelit": g_sat, OpenStreetMap: osm },
			{
				"📍 Tampilkan Restoran": markerGroup,
				"🗺️ Batas Wilayah": polygonGroup,
				"🛣️ Jaringan Jalan": roadGroup,
			},
			{ position: "topright", collapsed: true }
		)
		.addTo(map);

	// 3. MINIMAP SINKRON
	const mm_road = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
		{ subdomains: ["mt0", "mt1", "mt2", "mt3"] }
	);
	const mm_sat = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
		{ subdomains: ["mt0", "mt1", "mt2", "mt3"] }
	);
	const mm_osm = L.tileLayer(
		"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
	);

	const miniMap = new L.Control.MiniMap(mm_road, {
		toggleDisplay: true,
		minimized: isMobile,
		position: "bottomleft",
		width: isMobile ? 80 : 120,
		height: isMobile ? 80 : 120,
	}).addTo(map);

	map.on("baselayerchange", function (e) {
		if (e.name === "Peta Jalan") {
			miniMap.changeLayer(mm_road);
		} else if (e.name === "Peta Satelit") {
			miniMap.changeLayer(mm_sat);
		} else if (e.name === "OpenStreetMap") {
			miniMap.changeLayer(mm_osm);
		}
	});

	// 4. ICON
	const halalIcon = L.divIcon({
		className: "custom-pin",
		html: `<div style="background:#10B982; width:36px; height:36px; border-radius:50%; border:2px solid white; display:flex; justify-content:center; align-items:center; box-shadow:0 3px 8px rgba(0,0,0,0.3);">
                <i class="bi bi-geo-alt-fill text-white" style="font-size: 1.1rem;"></i>
               </div>`,
		iconSize: [36, 36],
		iconAnchor: [18, 36],
		popupAnchor: [0, -20],
	});

	// 5. DATA FETCH & POPUP
	let cleanUrl = BASE_URL.endsWith("/") ? BASE_URL : BASE_URL + "/";

	fetch(cleanUrl + "assets/sawangan_halal.geojson")
		.then((res) => res.json())
		.then((data) => {
			L.geoJSON(data, {
				pointToLayer: (f, latlng) => L.marker(latlng, { icon: halalIcon }),
				onEachFeature: (f, layer) => {
					const p = f.properties;
					const nama = p.NAMOBJ || "Restoran Halal";
					const harga = p.RENTANG_HARGA || "Harga Standar";
					const jam = p.JAM_BUKA || "09.00 - 21.00";
					const alamat = p.ALAMAT || "Sawangan, Depok";
					const img = p.FOTO
						? cleanUrl + p.FOTO
						: "https://placehold.co/400x250/eee/999?text=No+Image";

					const popupHTML = `
                        <div class="card border-0 shadow-none w-100" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                            <div class="position-relative">
                                <img src="${img}" class="card-img-top w-100" style="height: 150px; object-fit: cover; display: block;" alt="${nama}">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.8) 100%);"></div>
                                <span class="position-absolute top-0 start-0 m-2 px-2 py-1 bg-white text-emerald fw-bold rounded-pill shadow-sm" style="font-size: 0.65rem; z-index: 5;">
                                    <i class="bi bi-patch-check-fill me-1"></i>Halal Verified
                                </span>
                                <div class="position-absolute bottom-0 start-0 p-3 w-100">
                                    <h6 class="fw-bold text-white mb-0 text-truncate" style="text-shadow: 0 1px 3px rgba(0,0,0,0.8);">${nama}</h6>
                                </div>
                            </div>
                            <div class="card-body p-3 bg-white">
                                <div class="d-flex flex-column gap-2 mb-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="bg-emerald-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 24px; height: 24px;">
                                            <i class="bi bi-tag-fill text-emerald" style="font-size: 0.7rem;"></i>
                                        </div>
                                        <span class="text-secondary fw-medium text-truncate" style="font-size: 0.75rem;">${harga}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                         <div class="bg-orange-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 24px; height: 24px;">
                                            <i class="bi bi-clock-fill text-orange" style="font-size: 0.7rem;"></i>
                                        </div>
                                        <span class="text-secondary fw-medium" style="font-size: 0.75rem;">${jam}</span>
                                    </div>
                                    <div class="d-flex align-items-start gap-2">
                                         <div class="bg-pink-light rounded-circle d-flex align-items-center justify-content-center mt-1 flex-shrink-0" style="width: 24px; height: 24px;">
                                            <i class="bi bi-geo-alt-fill text-pink" style="font-size: 0.7rem;"></i>
                                        </div>
                                        <span class="text-secondary fw-medium lh-sm" style="font-size: 0.75rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">${alamat}</span>
                                    </div>
                                </div>
                                <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(
																	nama + " Sawangan Depok"
																)}" 
                                   target="_blank" 
                                   class="btn btn-sm btn-emerald w-100 rounded-pill py-2 fw-bold shadow-sm">
                                    <i class="bi bi-cursor-fill me-2"></i>Petunjuk Arah
                                </a>
                            </div>
                        </div>
                    `;

					layer.bindPopup(popupHTML, {
						closeButton: true,
						autoPan: true,
						autoPanPaddingTopLeft: L.point(10, 80),
						autoPanPaddingBottomRight: L.point(10, 10),
					});
					markerGroup.addLayer(layer);
				},
			});
			if (markerGroup.getLayers().length > 0) {
				map.fitBounds(markerGroup.getBounds(), { padding: [50, 50] });
			}
		});

	fetch(cleanUrl + "assets/jalan_sawangan.geojson")
		.then((r) => r.json())
		.then((d) => {
			L.geoJSON(d, {
				style: { color: "#6f7c8fff", weight: 2, opacity: 0.8 },
				onEachFeature: (f, l) => roadGroup.addLayer(l),
			});
			polygonGroup.bringToBack();
		});
	fetch(cleanUrl + "assets/sawangan_pg.geojson")
		.then((r) => r.json())
		.then((d) => {
			L.geoJSON(d, {
				style: {
					color: "#999",
					weight: 1,
					fillColor: "#31a354",
					fillOpacity: 0.6,
				},
				onEachFeature: (f, l) => polygonGroup.addLayer(l),
			});
		});

	// 6. SCROLL SPY (FIXED & IMPROVED)
	// Fungsi untuk menandai menu aktif berdasarkan scroll
	function onScroll() {
		const navbarHeight = document.querySelector(".navbar").offsetHeight;
		// Tambahkan sedikit buffer agar menu aktif sebelum benar-benar sampai di atas
		const scrollPos = window.scrollY + navbarHeight + 50;

		const sections = document.querySelectorAll("section");
		const navLinks = document.querySelectorAll(".nav-link");

		let currentSectionId = "";

		// Cari section mana yang sedang dilihat user
		sections.forEach((section) => {
			const top = section.offsetTop;
			const height = section.offsetHeight;

			// Cek jika posisi scroll berada di dalam range section ini
			if (scrollPos >= top && scrollPos < top + height) {
				currentSectionId = section.getAttribute("id");
			}
		});

		// Update class active di navbar
		navLinks.forEach((link) => {
			link.classList.remove("active");
			// Pastikan link href cocok dengan section ID (contoh: href="#hero")
			if (
				currentSectionId &&
				link.getAttribute("href") === `#${currentSectionId}`
			) {
				link.classList.add("active");
			}
		});
	}

	// Jalankan saat di-scroll
	window.addEventListener("scroll", onScroll);
	// Jalankan juga saat halaman pertama kali dimuat (untuk refresh state)
	window.addEventListener("load", onScroll);
});
