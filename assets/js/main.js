document.addEventListener("DOMContentLoaded", function () {
	// 1. TITIK TENGAH (Sawangan)
	const center = [-6.3811, 106.7725];
	const zoom = 14;

	// 2. JENIS-JENIS PETA (Layer)
	// Peta Jalan
	const g_road = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
		{
			maxZoom: 20,
			subdomains: ["mt0", "mt1", "mt2", "mt3"],
			attribution: "Google Maps",
		}
	);
	// Peta Satelit
	const g_sat = L.tileLayer(
		"http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
		{
			maxZoom: 20,
			subdomains: ["mt0", "mt1", "mt2", "mt3"],
			attribution: "Google Satellite",
		}
	);
	// OpenStreetMap
	const osm = L.tileLayer(
		"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
		{
			attribution: "OpenStreetMap",
		}
	);

	// 3. MENAMPILKAN PETA UTAMA
	const map = L.map("map", {
		center: center,
		zoom: zoom,
		zoomControl: false, // Zoom dipindah ke bawah
		layers: [g_road], // Default: Jalan
	});
	L.control.zoom({ position: "bottomright" }).addTo(map);

	// 4. GRUP MARKER (Wadah Titik Restoran)
	// Gunakan featureGroup agar bisa auto-zoom (getBounds)
	const markerGroup = L.featureGroup().addTo(map);
	const polygonGroup = L.featureGroup(); // Untuk Wilayah Kelurahan
	const roadGroup = L.featureGroup(); // Untuk Jaringan Jalan

	// 5. TOMBOL GANTI PETA (Kanan Atas)
	const baseMaps = {
		"Peta Jalan": g_road,
		"Peta Satelit": g_sat,
		OpenStreetMap: osm,
	};
	const overlayMaps = {
		"📍 Tampilkan Restoran": markerGroup,
		"🗺️ Batas Wilayah": polygonGroup, // Menambahkan polygon ke control
		"🛣️ Jaringan Jalan": roadGroup
	};
	L.control.layers(baseMaps, overlayMaps, { position: "topright" }).addTo(map);
	// 6. MINIMAP SINKRON (Fitur Keren)
	// Layer khusus minimap agar tidak bentrok
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
		minimized: false,
		position: "bottomleft",
		width: 140,
		height: 140,
	}).addTo(map);

	// Logika Ganti Tema MiniMap
	map.on("baselayerchange", function (e) {
		if (e.name === "Peta Jalan") miniMap.changeLayer(mm_road);
		else if (e.name === "Peta Satelit") miniMap.changeLayer(mm_sat);
		else miniMap.changeLayer(mm_osm);
	});

	// 7. DESAIN ICON MARKER
	const halalIcon = L.divIcon({
		className: "custom-pin",
		html: `<div style="background:#10B982; width:40px; height:40px; border-radius:50%; border:3px solid white; display:flex; justify-content:center; align-items:center; box-shadow:0 4px 10px rgba(0,0,0,0.3);">
                <i class="bi bi-geo-alt-fill text-white fs-5"></i>
               </div>`,
		iconSize: [40, 40],
		iconAnchor: [20, 40],
		popupAnchor: [0, -45],
	});

	// 8. LOAD DATA RESTORAN (GeoJSON)
	let cleanUrl = BASE_URL;
	if (!cleanUrl.endsWith("/")) cleanUrl += "/";

	fetch(cleanUrl + "assets/sawangan_halal.geojson")
		.then((res) => {
			if (!res.ok) throw new Error("Gagal load GeoJSON");
			return res.json();
		})
		.then((data) => {
			L.geoJSON(data, {
				pointToLayer: (f, latlng) => L.marker(latlng, { icon: halalIcon }),
				onEachFeature: (f, layer) => {
					const p = f.properties;
					// Data
					const nama = p.NAMOBJ || "Restoran Halal";
					const harga = p.RENTANG_HARGA || "-";
					const jam = p.JAM_BUKA || "-";
					const alamat = p.ALAMAT || "-";
					const img = p.FOTO
						? cleanUrl + p.FOTO
						: "https://placehold.co/400x250/eee/999?text=No+Image";

					// HTML Popup
					const popupHTML = `
                        <div>
                            <img src="${img}" class="popup-img">
                            <div class="popup-body">
                                <span class="popup-title">${nama}</span>
                                <div class="popup-row"><i class="bi bi-tag-fill"></i> ${harga}</div>
                                <div class="popup-row"><i class="bi bi-clock-fill"></i> ${jam}</div>
                                <div class="popup-row"><i class="bi bi-geo-alt-fill"></i> ${alamat}</div>
                                <div class="popup-badge"><i class="bi bi-check-circle-fill"></i> TERVERIFIKASI HALAL</div>
                            </div>
                        </div>
                    `;
					layer.bindPopup(popupHTML);
					markerGroup.addLayer(layer);
				},
			});

			// Auto Zoom ke area marker
			if (markerGroup.getLayers().length > 0) {
				map.fitBounds(markerGroup.getBounds(), { padding: [50, 50] });
			}
		})
		.catch((err) => {
			console.error(err);
			alert("Gagal memuat data peta. Pastikan file GeoJSON ada.");
		});

		fetch(cleanUrl + "assets/jalan_sawangan.geojson")
        .then((res) => res.json())
        .then((data) => {
            L.geoJSON(data, {
                // Style Jalan: Garis agak tebal, warna biru tua/abu-abu
                style: function(feature) {
                    return {
                        color: "#6f7c8fff",   // Warna Biru Standar Jalan
                        weight: 2,          // Ketebalan garis
                        opacity: 0.8        // Tidak terlalu transparan
                    };
                },
                
                onEachFeature: function(feature, layer) {
                    roadGroup.addLayer(layer);
                }
            });
            
            polygonGroup.bringToBack();

        })
        .catch(
			(err) => console.error("Error Jalan:", err)
	);

	fetch(cleanUrl + "assets/sawangan_pg.geojson")
    .then((res) => res.json())
    .then((data) => {
        L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: "#999",        // Warna garis batas
                    weight: 1,            // Ketebalan garis
                    fillColor: "#31a354", // Warna isi (hijau)
                    fillOpacity: 0.6
                };
            },

            onEachFeature: function(feature, layer) {
                // Popup nama wilayah (opsional, bisa dihapus jika tidak dibutuhkan)
                if (feature.properties && feature.properties.NAMOBJ) {
                    layer.bindPopup(feature.properties.NAMOBJ);
                }

                // Masukkan ke group polygon
                polygonGroup.addLayer(layer);
            }
        });
    })
    .catch((err) => console.error("Error Polygon:", err));
});
