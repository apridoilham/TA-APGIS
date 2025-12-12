document.addEventListener("DOMContentLoaded", function () {
	// 1. INISIALISASI PETA UTAMA
	const sawanganCenter = [-6.3811, 106.7725];
	const map = L.map("map", { zoomControl: true }).setView(sawanganCenter, 14);

	// === DEFINISI URL TILE LAYERS ===
	const tiles = {
		osm: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
		satellite:
			"https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
		carto:
			"https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",
		// GANTI INI: URL Google Maps Roadmap
		google: "https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
	};

	const attributions = {
		osm: "&copy; OpenStreetMap",
		esri: "Tiles &copy; Esri",
		carto: "&copy; CARTO",
		google: "&copy; Google Maps",
	};

	// === MEMBUAT LAYER UNTUK PETA UTAMA ===
	const mainLayers = {
		OpenStreetMap: L.tileLayer(tiles.osm, { attribution: attributions.osm }),
		"Esri World Imagery": L.tileLayer(tiles.satellite, {
			attribution: attributions.esri,
		}),
		"CartoDB Voyager": L.tileLayer(tiles.carto, {
			attribution: attributions.carto,
		}),
		// GANTI INI: Tambahkan Layer Google Maps
		"Google Maps": L.tileLayer(tiles.google, {
			attribution: attributions.google,
		}),
	};

	// Tambahkan layer default ke Peta Utama (Google Maps sebagai default agar keren)
	mainLayers["Google Maps"].addTo(map);

	// === MEMBUAT LAYER TERPISAH UNTUK MINI MAP ===
	const miniLayers = {
		OpenStreetMap: L.tileLayer(tiles.osm),
		"Esri World Imagery": L.tileLayer(tiles.satellite),
		"CartoDB Voyager": L.tileLayer(tiles.carto),
		// GANTI INI: Layer Google Maps untuk MiniMap
		"Google Maps": L.tileLayer(tiles.google),
	};

	// Inisialisasi Mini Map dengan layer default (Google Maps)
	const miniMap = new L.Control.MiniMap(miniLayers["Google Maps"], {
		toggleDisplay: true,
		position: "bottomright",
		width: 150,
		height: 150,
		zoomLevelOffset: -5,
	}).addTo(map);

	// === LOGIKA SINKRONISASI MINI MAP ===
	map.on("baselayerchange", function (e) {
		const layerName = e.name;
		const newMiniLayer = miniLayers[layerName];
		if (newMiniLayer) {
			miniMap.changeLayer(newMiniLayer);
		}
	});

	// === MARKER & DATA GEOJSON ===
	const markers = L.markerClusterGroup({
		chunkedLoading: true,
		spiderfyOnMaxZoom: true,
	});

	// Custom Icon
	const halalIcon = L.divIcon({
		html: `<div style="background:#00BCD4;color:#FF5722;width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:bold;box-shadow: 0 2px 5px rgba(0,0,0,0.4); border: 2px solid #FF5722;"><i class="bi bi-pin-map-fill"></i></div>`,
		className: "",
		iconSize: [34, 34],
		iconAnchor: [17, 34],
		popupAnchor: [0, -34],
	});

	function renderMarkers(data) {
		markers.clearLayers();

		L.geoJson(data, {
			pointToLayer: (feature, latlng) => L.marker(latlng, { icon: halalIcon }),
			onEachFeature: (feature, layer) => {
				const p = feature.properties;
				const nama = p.NAMOBJ || "Tempat Makan";
				const alamat = p.ALAMAT || "-";
				const jam = p.JAM_BUKA || "-";
				const harga = p.RENTANG_HARGA || "-";
				const foto = p.FOTO || "";

				const statusBadge =
					jam.toLowerCase().includes("setiap hari") || jam.includes("24")
						? '<span class="badge bg-success">BUKA</span>'
						: '<span class="badge bg-warning text-dark">CEK JAM</span>';

				let popup = `<div class="popup-custom" style="width:240px">`;
				if (foto)
					popup += `<img src="${
						BASE_URL + foto
					}" class="img-fluid rounded mb-2" style="width:100%;height:120px;object-fit:cover">`;
				popup += `<h6 class="fw-bold mb-1">${nama}</h6>`;
				popup += `<p class="small mb-1 text-muted"><i class="bi bi-tag-fill"></i> ${harga}</p>`;
				popup += `<p class="small mb-1 text-muted"><i class="bi bi-clock"></i> ${jam} ${statusBadge}</p>`;
				popup += `<p class="small mb-0 text-muted"><i class="bi bi-geo-alt"></i> ${alamat}</p>`;
				popup += `<hr class="my-1"><span class="badge bg-teal w-100"><i class="bi bi-patch-check-fill"></i> HALAL</span></div>`;

				layer.bindPopup(popup);
				markers.addLayer(layer);
			},
		});

		map.addLayer(markers);

		if (!document.querySelector(".leaflet-control-layers")) {
			const overlayMaps = { "Restoran Halal": markers };
			L.control.layers(mainLayers, overlayMaps).addTo(map);
		}

		if (markers.getLayers().length > 0) map.fitBounds(markers.getBounds());
	}

	// Load Data
	fetch(BASE_URL + "assets/sawangan_halal.geojson")
		.then((response) => response.json())
		.then((data) => renderMarkers(data))
		.catch((err) => console.error("Gagal memuat data:", err));
});
