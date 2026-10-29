<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Experience</title>
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

        /* 3. SUB-HEADERS (PANORAMIC STYLE) - STICKY IKUT DI ATAS */
        .app-headers {
            width: 100%;
            padding: 25px 40px 15px 40px;
            display: flex;
            gap: 40px;
            flex-shrink: 0;
            background-color: #1d1d1d; /* Supaya tidak tembus pandang saat di-scroll */
            z-index: 99;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        
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
            transition: color 0.2s;
        
            flex-shrink: 0;
            white-space: nowrap;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
        }

        .header-item:hover {
            color: #cccccc;
        }

        /* 4. CONTENT AREA - AREA INI SAJA YANG BISA SCROLL VERTIKAL */
        .app-content {
            width: 100%;
            flex-grow: 1;
            padding: 20px 40px 50px 40px;
            overflow-y: auto;   /* Scroll vertikal aktif di sini */
            overflow-x: hidden; /* Mencegah scroll samping */
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

        .app-headers {
            width: 100%;
            padding: 20px 40px 0 40px; /* Padding bawah disesuaikan jadi 0 agar garis bawah pas di ujung bawah */
            display: flex;
            gap: 40px;
            flex-shrink: 0;
            background-color: #1d1d1d;
            z-index: 99;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08); /* Garis tipis dasar penjelas area header */
        }

        .header-item {
            font-size: 28px;
            font-weight: 300;
            color: #7a7a7a;
            cursor: pointer;
            padding-bottom: 10px;                  /* Memberikan ruang untuk garis bawah */
            border-bottom: 4px solid transparent;   /* Default transparan untuk state biasa */
            transition: color 0.2s, border-color 0.2s;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
            border-bottom: 4px solid #008ed0;       /* INI YANG DITAMBAHKAN: Garis tebal warna aksen saat aktif */
        }

        .header-item:hover {
            color: #cccccc;
            border-bottom: 4px solid rgba(40, 182, 243, 0.49)/* Efek hover interaktif saat kursor mendekat */
        }

        /* --- BAGIAN ATAS --- */
        .reader-top-section {
            width: 100%;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .reader-headers-left {
            flex-grow: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            min-width: 0;
        }

        .reader-main-title {
            font-size: 32px;
            font-weight: 300;
            color: #ffffff;
            word-break: break-word;
        }

        .reader-year {
            font-size: 16px;
            font-weight: 400;
            color: #00bcf2;
        }

        .reader-short-desc {
            font-size: 14px;
            color: #aaaaaa;
            font-weight: 300;
            line-height: 1.5;
            word-break: break-word;
        }

        .reader-top-image {
            width: 140px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            flex-shrink: 0;
            overflow: hidden;
        }

        .reader-top-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

        /* --- BAGIAN TENGAH: Teks Bacaan --- */
        .reader-middle-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .reader-middle-content p {
            font-size: 15px;
            line-height: 1.8;
            color: #dddddd;
            font-weight: 300;
            word-break: break-word;
        }

        /* --- BAGIAN BAWAH: 3 Kotak Gambar Vertikal / Berjajar dengan Hover Effect --- */
        .reader-bottom-gallery {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            height: auto;
            margin-bottom: 20px;
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
            height: 100%;
            transition: border-color 0.2s;
        }

        .gallery-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        /* Efek Redup (Opacity) pada Gambar saat Hover */
        .gallery-box:hover img {
            opacity: 0.3;
        }

        .gallery-box:hover {
            border-color: #00bcf2;
        }

        /* Konten Text & Tag yang Muncul saat Hover */
        .gallery-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 15px;
            background: rgba(0, 0, 0, 0.4); /* Efek gelap tipis di balik text */
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-box:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-tag {
            align-self: flex-start;
            background-color: #00bcf2;
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

    <!-- 1. TOP BLACK BAR (STAY AT TOP) -->
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-briefcase"></i></div>
            <span class="app-title">Experience</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Mitra 2000 - SA</div>
        <div class="header-item" onclick="switchTab(1)">Mitra 2000 - PDA</div>
        <div class="header-item" onclick="switchTab(2)">Shopee Express</div>
        <div class="header-item" onclick="switchTab(3)">Idemitsu</div>
    </nav>

    <main class="app-content">
        <section class="content-section active" id="section-0">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/1m-square.png" alt="nusamandiri">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">System Analyst</h2>
                    <div class="reader-year">2023 - 2026</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta Timur, Indonesia - Hybrid</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Supported ERP and business system implementation across Head Office and Branch operations, covering Sales, Purchasing, Warehouse, Logistics, Finance, Accounting, Marketplace Fulfillment, POS, service booking, and reporting.</p>
                <p>Validated modules from development through UAT and deployment by testing functional workflows, assessing downstream impacts, and coordinating fixes and retesting with developers.</p>
                <p>Investigated transaction, inventory, reporting, and accounting issues by tracing system behavior and underlying data to identify root causes and determine whether developer changes or data corrections were required.</p>
                <p>Identified a marketplace inventory gap where stock was deducted at checkout before fulfillment, and worked with developers to move the stock-out trigger to the fulfillment process to align inventory movement with operational and accounting flow.</p>
                <p>Translated operational requests into functional workflows, including a marketplace fulfillment report with filtering, pickup status tracking, reversal handling, and validation rules; also supported branch implementation, user training, and operational monitoring.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-experience/1m.png" alt="Gallery 1">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">My Team</span>
                        <div class="gallery-text">IT Development</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-experience/2m.jpg" alt="Gallery 2">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Time Block</span>
                        <div class="gallery-text">Focus without any Distractions</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-experience/3m.png" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Training & UAT</span>
                        <div class="gallery-text">Medan's Branch</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-experience/4m.png" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Training & UAT</span>
                        <div class="gallery-text">Jakarta's Branch</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-experience/6m.png" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">My Workspace</span>
                        <div class="gallery-text">Where Ideas Are Conceived and Ways to Execute Are Found</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section" id="section-1">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/1m-square.png" alt="nusamandiri">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">Product Data Analyst</h2>
                    <div class="reader-year">2022 - 2023</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta Timur, Indonesia - On Site</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Migrated and standardized 10,935 product records from an in-house legacy system into a new PIM after restructuring and cleansing raw data for system requirements.</p>
                <p>Improved processing throughput approximately 4×, from 28 to 112 SKU/hour, by combining spreadsheet automation with SQL-based bulk processing.</p>
                <p>Developed SQL queries and stored procedures for bulk database updates and performed duplicate checks across SKU, part number, and product code to maintain data quality.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-experience/5m.png" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Event</span>
                        <div class="gallery-text">Company's Gathering</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section" id="section-2">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/2s-square.png" alt="Google">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">Geolocation Data Support</h2>
                    <div class="reader-year">2021 - 2022</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta Utara, Indonesia - Hybrid</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Processed 100–120+ geolocation cases per day, cleansing and validating customer location data from the existing system and Google Maps for internal mapping database integration.</p>
                <p>Coordinated daily workload across a 6-person team, distributing approximately 100–120+ cases per person and monitoring district coverage, import failures, and progress.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-experience/1s.jpg" alt="1s">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">My Team</span>
                        <div class="gallery-text">Geolocation Support</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section" id="section-3">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/3i-square.png" alt="Idemitsu B2B">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">Finance & Accounting ERP Support</h2>
                    <div class="reader-year">2020 - 2021</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta Utara, Indonesia - On Site</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Supported SAP ERP → Infor ERP migration by validating invoice and sales data during the system transition.</p>
                <p>Reconciled Sales and VAT accounts against the legacy system and investigated invoice processing issues with Finance, Accounting, Logistics, and Sales Administration.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-experience/1i.jpg" alt="1s">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">My Team</span>
                        <div class="gallery-text">Finance & Accounting</div>
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