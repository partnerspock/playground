<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Showcase | Ticketing</title>
    <script src="https://cdn.tailwindcss.com">
        function setupInfiniteAppHeaders() {
            const nav = document.querySelector('.app-headers');
            if (!nav) return;
            const originalItems = Array.from(nav.querySelectorAll('.header-item'));
            if (originalItems.length === 0) return;

            originalItems.forEach((item, idx) => {
                item.setAttribute('data-tab-index', idx);
                item.addEventListener('click', () => switchTab(idx));
            });

            const cloneCycles = 4;
            for (let c = 0; c < cloneCycles; c++) {
                originalItems.forEach((item, idx) => {
                    const clone = item.cloneNode(true);
                    clone.setAttribute('data-tab-index', idx);
                    clone.addEventListener('click', () => switchTab(idx));
                    nav.appendChild(clone);
                });
            }

            nav.addEventListener('scroll', () => {
                const singleSetWidth = originalItems.reduce((acc, el) => {
                    const gap = parseFloat(window.getComputedStyle(nav).gap) || 24;
                    return acc + el.offsetWidth + gap;
                }, 0);

                if (singleSetWidth > 0) {
                    if (nav.scrollLeft >= singleSetWidth * 2.5) {
                        nav.scrollLeft -= singleSetWidth;
                    } else if (nav.scrollLeft <= 5) {
                        nav.scrollLeft += singleSetWidth;
                    }
                }
            }, { passive: true });
        }
        setupInfiniteAppHeaders();

    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c66aa74d08.js" crossorigin="anonymous"></script>
    <style>
        /* 1. KUNCI UTAMA AGAR FIT HORIZONTAL & LAYAR TERKUNCI */
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
            overflow: hidden; /* Mencegah body scroll penuh, scroll dipindah ke .app-content */
            background-color: #1d1d1d; /* Metro dark theme */
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* 2. TOP BLACK BAR (APP BAR) - STICKY / TETAP DI ATAS */
        .app-bar {
            background-color: #5ec26a; 
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
            font-weight: bold;
            font-size: 14px;
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

        .app-headers {
            width: 100%;
            padding: 20px 40px 0 40px;
            display: flex;
            gap: 40px;
            flex-shrink: 0;
            background-color: #1d1d1d;
            z-index: 99;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .app-headers::-webkit-scrollbar {
            display: none;
        }

        .header-item {
            font-size: 28px;
            font-weight: 300;
            color: #7a7a7a;
            cursor: pointer;
            padding-bottom: 10px;
            border-bottom: 4px solid transparent;
            transition: color 0.2s, border-color 0.2s;
        
            flex-shrink: 0;
            white-space: nowrap;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
            border-bottom: 4px solid #5ec26a;
        }

        .header-item:hover {
            color: #cccccc;
}

        /* 4. CONTENT AREA - AREA SCROLL VERTIKAL */
        .app-content {
            width: 100%;
            flex-grow: 1;
            padding: 20px 40px 50px 40px;
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Kontrol Seksion Tab */
        .content-section {
            display: none;
            flex-direction: column;
            gap: 30px;
            width: 100%;
        }

        .content-section.active {
            display: flex;
        }

        /* --- TAB 1: OVERVIEW (Windows Store Style Detail) --- */
        .overview-top-section {
            width: 100%;
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }

        .overview-hero-image {
            width: 220px;
            height: 220px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
        }

        .overview-hero-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

        .overview-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex-grow: 1;
            min-width: 0;
        }

        .overview-title {
            font-size: 36px;
            font-weight: 300;
            color: #ffffff;
            word-break: break-word;
        }

        .overview-subtitle {
            font-size: 16px;
            color: #5ec26a;
            font-weight: 400;
        }

        .overview-meta {
            font-size: 14px;
            color: #aaaaaa;
            font-weight: 300;
        }

        /* Tombol Install ala Windows Store */
        .install-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #5ec26a;
            color: #ffffff;
            border: none;
            padding: 10px 30px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            width: fit-content;
            transition: background 0.2s, transform 0.1s;
            margin-top: 5px;
        }

        .install-btn:hover {
            background-color: #5ec26a;
        }

        .install-btn:active {
            transform: scale(0.98);
        }

        .overview-middle-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 25px;
        }

        .overview-middle-content p {
            font-size: 15px;
            line-height: 1.8;
            color: #dddddd;
            font-weight: 300;
            word-break: break-word;
        }

        /* --- TAB 2: GALLERY (Grid dengan Hover Effect) --- */
        .gallery-grid {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-box {
            position: relative;
            background-color: #2b2b2b;
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            height: auto;
            transition: border-color 0.2s;
        }

        .gallery-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .gallery-box:hover img {
            opacity: 0.3;
        }

        .gallery-box:hover {
            border-color: #5ec26a;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 15px;
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-box:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-tag {
            align-self: flex-start;
            background-color: #5ec26a;
            color: #ffffff;
            font-size: 10px;
            font-weight: 600;
            padding: 2px 8px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .gallery-text {
            font-size: 13px;
            font-weight: 400;
            color: #ffffff;
            line-height: 1.3;
        }

        /* --- TAB 3: TOOLS (2 Columns App List ala Windows Store) --- */
        .tools-grid {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 2 Kolom Kiri & Kanan */
            gap: 20px;
        }

        .tool-card {
            background-color: #262626;
            padding: 18px;
            display: flex;
            gap: 15px;
            align-items: flex-start;
            border: 2px solid transparent;
            transition: background 0.2s, border-color 0.2s;
        }

        .tool-card:hover {
            background-color: #303030;
            border-color: #5ec26a;
        }

        .tool-tile {
            width: 56px;
            height: 56px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
        }

        .tool-tile img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .tool-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
            min-width: 0;
        }

        .tool-name {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        .tool-desc {
            font-size: 13px;
            color: #aaaaaa;
            font-weight: 300;
            line-height: 1.4;
            opacity: 0.85; /* Transparansi teks sesuai request */
            word-break: break-word;
        }
    
        @media (max-width: 768px) {
            .app-bar {
                padding: max(10px, env(safe-area-inset-top)) 16px !important;
                height: auto !important;
                min-height: 50px !important;
            }
            .app-headers {
                padding: 12px 16px 0 16px !important;
                gap: 24px !important;
            }
            .header-item {
                font-size: clamp(18px, 5.5vw, 24px) !important;
                padding-bottom: 8px !important;
            }
            .app-content {
                padding: 16px 16px max(40px, env(safe-area-inset-bottom)) 16px !important;
            }
        }
    </style>
</head>
<body>
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-ticket"></i></div>
            <span class="app-title">Ticketing</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>
    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Overview</div>
        <div class="header-item" onclick="switchTab(1)">Gallery</div>
        <div class="header-item" onclick="switchTab(2)">Tools</div>
    </nav>
    <main class="app-content">
        <section class="content-section active" id="section-0">
            <div class="overview-top-section">
                <div class="overview-hero-image">
                    <img src="assets/img/tile/tkt1.png" alt="Ticketing">
                </div>
                <div class="overview-info">
                    <h2 class="overview-title">Ticketing - Community Event</h2>
                    <div class="overview-subtitle">Free</div>
                    <div class="overview-meta"><i class="fa-solid fa-layer-group"></i> Ticketing</div>
                    <div style="display: flex; gap: 15px;">
                        <a href="https://www.instagram.com/reel/DSM6cjHEnCy/?utm_source=ig_web_copy_link&igsi=MzRlODBiNWFlZA==" target="_blank" class="install-btn">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </a>
                        <a href="https://github.com/partnerspock/gkompa" target="_blank" class="install-btn" style="background: #2b2b2b;">
                            <i class="fa-brands fa-github"></i> Repo
                        </a>
                    </div>
                </div>
            </div>
            <div class="overview-middle-content">
                <p>Ticketing is a lightweight, web-based platform designed specifically for community events.</p>
                <p>Built completely without heavy frameworks, it is fully portable and can run directly on a laptop.</p>
                <p>It is powered online effortlessly using ngrok, making it easy to set up anywhere.</p>
                <p>Designed for event ushers and community committees, it features a live display list of available movies right on TV screens.</p>
            </div>
        </section>
        <section class="content-section" id="section-1">
            <div class="gallery-grid">
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t1.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Cinema Listing</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t2.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Seats Dashboard</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t3.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">seats History</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t4.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Seats Selection</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t5.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Seats Information</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-ticketing/t6.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Day Completion</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section" id="section-2">
            <div class="tools-grid">
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/php.png" alt="ERP System">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">PHP</div>
                        <div class="tool-desc">Programming Language</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile" style="background-color: #008ed0; font-size:28px;">
                        <i class="fa-brands fa-css"></i>
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">CSS</div>
                        <div class="tool-desc">Programming Language</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/ngrok.png" alt="ERP System">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Ngrok</div>
                        <div class="tool-desc">Tunneling Service</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/tableplus.jpg" alt="ERP System">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Table Plus</div>
                        <div class="tool-desc">Database Editor</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/sqltb1.png" alt="Database">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">MySQL</div>
                        <div class="tool-desc">RDBMS</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/antigravity.jpg" alt="Antigravity" style="width:24px;">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Antigravity</div>
                        <div class="tool-desc">Code Editor</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Fungsi untuk mengganti tab aktif
        function switchTab(index) {
            const headers = document.querySelectorAll('.header-item');
            const sections = document.querySelectorAll('.content-section');

            headers.forEach((h) => {
                const tabIdx = h.getAttribute('data-tab-index');
                const oc = h.getAttribute('onclick') || '';
                if (tabIdx === String(index) || oc.includes('switchTab(' + index + ')')) {
                    h.classList.add('active');
                } else {
                    h.classList.remove('active');
                }
            });

            sections.forEach((s, i) => {
                if (i === index) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });

            const activeHeaders = Array.from(document.querySelectorAll('.app-headers .header-item.active'));
            const inViewHeader = activeHeaders.find(h => {
                const r = h.getBoundingClientRect();
                return r.left >= -50 && r.left <= window.innerWidth;
            }) || activeHeaders[0];

            if (inViewHeader) {
                inViewHeader.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
            }
        }

        // Fungsi tombol close / back ke start menu
        function backToStartMenu() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>