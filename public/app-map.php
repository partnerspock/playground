<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c66aa74d08.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-rotate@0.2.8/dist/leaflet-rotate.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            user-select: none;
        }

        html, body {
            width: 100%;
            max-width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #2b2b2b;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .app-bar {
            background-color: #008ed0; 
            height: 55px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            flex-shrink: 0;
            border-bottom: 2px solid rgba(255, 255, 255, 0.05);
            z-index: 100;
        }

        .app-bar-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .app-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #fff;
        }

        .app-title {
            font-size: 18px;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .app-bar-right .close-btn {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 20px;
            cursor: pointer;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .app-bar-right .close-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .app-map-workspace {
            position: relative;
            width: 100%;
            flex-grow: 1;
            display: flex;
            overflow: hidden;
        }

        .map-view {
            width: 100%;
            height: 100%;
            background: #242424;
            z-index: 1;
        }

        .custom-zoom-control {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .zoom-circle-btn {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(8px);
            border: 2px solid rgba(255, 255, 255, 1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s, border-color 0.2s, transform 0.1s;
        }

        .zoom-circle-btn:hover {
            background: #1d1d1d;
            border-color: #fff;
        }

        .zoom-circle-btn:active {
            transform: scale(0.95);
        }

        .map-sidebar {
            position: absolute;
            right: 0;
            top: 0;
            width: 350px;
            height: 100%;
            background: #2b2b2b;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            padding: 15px 20px;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.5);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.1, 0.9, 0.2, 1);
        }

        .map-sidebar.active {
            transform: translateX(0);
        }

        .sidebar-content-wrapper {
            overflow-y: auto;
            flex-grow: 1;
            padding-right: 2px;
            margin-top: 1px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sidebar-content-wrapper::-webkit-scrollbar {
            width: 3px;
        }

        .sidebar-content-wrapper::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 2px;
        }

        .sidebar-header-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .back-circle-btn {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            cursor: pointer;
            flex-shrink: 0;
            transition: background 0.2s, border-color 0.2s;
        }

        .back-circle-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: #fff;
        }

        .place-title {
            font-size: 22px;
            font-weight: 300;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .place-photo-container {
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            background: #111;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .place-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sidebar-body {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .place-address {
            font-size: 13px;
            font-weight: 300;
            line-height: 1.4;
            opacity: 0.9;
        }

        .place-info-grid {
            display: flex;
            flex-direction: column;
            gap: 6px;
            font-size: 13px;
            opacity: 0.8;
        }

        .sidebar-footer-row {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            padding-bottom: 10px;
        }

        .action-circle-btn {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s, border-color 0.2s, transform 0.1s;
        }

        .action-circle-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: #fff;
        }

        .action-circle-btn:active {
            transform: scale(0.95);
        }

        @media (max-width: 600px) {
            .map-sidebar {
                width: 100%;
                padding: 20px;
            }
            .app-bar {
                padding-left: 20px;
                padding-right: 20px;
            }
            .custom-zoom-control {
                left: 20px;
            }
        }
    </style>
</head>
<body>

    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-map"></i></div>
            <span class="app-title">Maps</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <main class="app-map-workspace">
        <div id="leaflet-map" class="map-view"></div>

        <div class="custom-zoom-control">
            <button class="zoom-circle-btn" onclick="map.zoomIn()" title="Zoom In"><i class="fa-solid fa-plus"></i></button>
            <button class="zoom-circle-btn" onclick="map.zoomOut()" title="Zoom Out"><i class="fa-solid fa-minus"></i></button>
            <button class="zoom-circle-btn" onclick="rotateMap()" title="Rotate 45°"><i class="fa-solid fa-compass"></i></button>
            <button class="zoom-circle-btn" onclick="panToMyPlace()" title="My Place"><i class="fa-solid fa-location-crosshairs"></i></button>
        </div>

        <div class="map-sidebar active" id="mapSidebar">
            <div class="sidebar-content-wrapper">
                <div class="sidebar-header-row">
                    <button class="back-circle-btn" onclick="toggleSidebar()" title="Back"><i class="fa-solid fa-arrow-right"></i></button>
                    <h1 class="place-title">My Place</h1>
                </div>

                <div class="place-photo-container">
                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80" alt="Rumah Saya" class="place-photo">
                </div>

                <div class="sidebar-body">
                    <p class="place-address">Jl. Remaja III</p>
                    <p class="place-address">Cempaka Baru, Kemayoran</p>
                    <p class="place-address">DKI Jakarta, Indonesia</p>
                    <div class="place-info-grid">
                        <div>(+62) 856-2417-7008</div>
                    </div>
                </div>

                <!-- <div class="sidebar-footer-row">
                    <button class="action-circle-btn" title="Direction" onclick="alert('Membuka rute...')">
                        <i class="fa-solid fa-diamond-turn-right"></i>
                    </button>
                    <button class="action-circle-btn" title="Share" onclick="shareLocation()">
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                    <button class="action-circle-btn" title="Favorite" onclick="alert('Ditambahkan ke Favorit')">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="action-circle-btn" title="More" onclick="alert('Opsi lainnya...')">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
                </div> -->
            </div>
        </div>
    </main>

    <script>
        const myLat = -6.2088;
        const myLng = 106.8456;

        const map = L.map('leaflet-map', {
            zoomControl: false,
            minZoom: 3,
            maxBounds: [
                [-85, -180],
                [85, 180]
            ],
            maxBoundsViscosity: 1.0,
            rotate: true,
            bearing: 0,
            touchRotate: true,
            rotateControl: false
        }).setView([myLat, myLng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap'
        }).addTo(map);

        const customIcon = L.divIcon({
            className: 'custom-map-pin',
            html: '<div style="color: #d00000ff; font-size: 36px; filter: drop-shadow(0 3px 6px rgba(0,0,0,0.5)); display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-location-dot"></i></div>',
            iconSize: [36, 36],
            iconAnchor: [18, 36]
        });

        const marker = L.marker([myLat, myLng], { icon: customIcon }).addTo(map);

        marker.on('click', function() {
            document.getElementById('mapSidebar').classList.add('active');
        });

        function rotateMap() {
            const currentBearing = map.getBearing();
            map.setBearing(currentBearing + 45);
        }

        function panToMyPlace() {
            map.setView([myLat, myLng], 16, { animate: true });
            document.getElementById('mapSidebar').classList.add('active');
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('mapSidebar');
            sidebar.classList.toggle('active');
        }

        function shareLocation() {
            const shareUrl = window.location.href;
            navigator.clipboard.writeText(shareUrl).then(() => {
                alert('Link URL berhasil disalin ke clipboard!');
            }).catch(err => {
                alert('Gagal menyalin link.');
            });
        }

        function backToStartMenu() {
            window.location.href = "index.php";
        }

        map.on('click', function(e) {
            document.getElementById('mapSidebar').classList.remove('active');
        });
    </script>
</body>
</html>