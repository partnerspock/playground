<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>PC Settings - Windows 8.1</title>
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

        /* 2. TOP BLACK BAR (APP BAR) - Warna khas Settings (Purple/Plum) */
        .app-bar {
            background-color: #643264; 
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

        /* 3. SUB-HEADERS (PANORAMIC STYLE) - DENGAN UNDERLINE JELAS */
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
            border-bottom: 4px solid #643264; /* Underline tebal sesuai warna aksen Settings */
        }

        .header-item:hover {
            color: #cccccc;
            border-bottom: 4px solid rgba(100, 50, 100, 0.4);
        }

        /* 4. CONTENT AREA - AREA INI SAJA YANG BISA SCROLL VERTIKAL */
        .app-content {
            width: 100%;
            flex-grow: 1;
            padding: 25px 40px 50px 40px;
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

        /* --- STYLING PC INFO LAYOUT WIN 8.1 --- */
        .pcinfo-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
            width: 100%;
        }

        .pcinfo-left {
            display: flex;
            flex-direction: column;
            gap: 30px;
            flex-grow: 1;
            max-width: 750px;
        }

        .pcinfo-block {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .pcinfo-heading {
            font-size: 16px;
            font-weight: 600;
            color: #00bcf2;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .pcinfo-row {
            display: flex;
            font-size: 15px;
            line-height: 1.8;
            color: #dddddd;
            font-weight: 300;
        }

        .pcinfo-label {
            width: 220px;
            color: #999999;
            flex-shrink: 0;
        }

        .pcinfo-value {
            color: #ffffff;
            font-weight: 400;
        }

        /* Windows Activation Box */
        .activation-box {
            background-color: #262626;
            border-left: 4px solid #643264;
            padding: 18px 20px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .activation-title {
            font-size: 15px;
            font-weight: 500;
            color: #ffffff;
        }

        .activation-desc {
            font-size: 13px;
            color: #aaaaaa;
            font-weight: 300;
        }

        /* Sisi Kanan: Logo / Banner Windows 8.1 */
        .pcinfo-right {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #262626;
            border: 2px solid rgba(255, 255, 255, 0.05);
            padding: 40px;
            width: 320px;
            flex-shrink: 0;
            text-align: center;
            gap: 15px;
        }

        .win-logo-box {
            font-size: 64px;
            color: #00bcf2;
        }

        .win-edition-title {
            font-size: 20px;
            font-weight: 300;
            color: #ffffff;
        }

        .win-edition-sub {
            font-size: 13px;
            color: #888888;
            font-weight: 300;
            line-height: 1.4;
        }

        /* --- STYLING PERSONALIZATION GRID --- */
        .settings-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .settings-card {
            background-color: #262626;
            border: 2px solid transparent;
            padding: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
            cursor: pointer;
            transition: background 0.2s, border-color 0.2s;
        }

        .settings-card:hover {
            background-color: #313131;
            border-color: #643264;
        }

        .settings-card-icon {
            font-size: 28px;
            color: #643264;
            width: 50px;
            height: 50px;
            background-color: rgba(100, 50, 100, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .settings-card-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .settings-card-title {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        .settings-card-desc {
            font-size: 13px;
            color: #aaaaaa;
            font-weight: 300;
            opacity: 0.85;
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

    <!-- 1. TOP BLACK BAR -->
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-gear"></i></div>
            <span class="app-title">PC Settings</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <!-- 2. SUB-HEADERS (DENGAN UNDERLINE AKTIF) -->
    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">PC Info</div>
        <div class="header-item" onclick="switchTab(1)">Personalization</div>
    </nav>

    <!-- 3. CONTENT AREA -->
    <main class="app-content">
        
        <!-- ================= TAB 0: PC INFO ================= -->
        <section class="content-section active" id="section-0">
            <div class="pcinfo-container">
                
                <!-- Sisi Kiri: Spesifikasi -->
                <div class="pcinfo-left">
                    <div class="pcinfo-block">
                        <div class="pcinfo-heading">View basic information about your computer</div>
                        
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">Manufacturer</div>
                            <div class="pcinfo-value">Custom Built Machine</div>
                        </div>
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">Model</div>
                            <div class="pcinfo-value">MacBook Air / Web Workstation</div>
                        </div>
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">Processor</div>
                            <div class="pcinfo-value">Apple Silicon M-Series / Multi-Core Architecture</div>
                        </div>
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">Installed memory (RAM):</div>
                            <div class="pcinfo-value">Unified Memory Architecture</div>
                        </div>
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">System type:</div>
                            <div class="pcinfo-value">64-bit Operating System, x64-based processor</div>
                        </div>
                        <div class="pcinfo-row">
                            <div class="pcinfo-label">Pen and Touch:</div>
                            <div class="pcinfo-value">No Pen or Touch Input is Available for this Display</div>
                        </div>
                    </div>

                    <!-- Windows Activation -->
                    <div class="pcinfo-block">
                        <div class="pcinfo-heading">Windows activation</div>
                        <div class="activation-box">
                            <div class="activation-title"><i class="fa-solid fa-circle-check" style="color: #43b929;"></i> Windows is activated</div>
                            <div class="activation-desc">Product ID: 00330-80000-00000-AA582</div>
                        </div>
                    </div>
                </div>

                <!-- Sisi Kanan: Logo Windows -->
                <div class="pcinfo-right">
                    <div class="win-logo-box">
                        <i class="fa-brands fa-windows"></i>
                    </div>
                    <div class="win-edition-title">Windows 8.1 Pro</div>
                    <div class="win-edition-sub">
                        © 2026 Microsoft Corporation. All rights reserved.<br>
                        Metro UI Web Workspace Edition.
                    </div>
                </div>

            </div>
        </section>

        <!-- ================= TAB 1: PERSONALIZATION ================= -->
        <section class="content-section" id="section-1">
            <div class="pcinfo-heading" style="margin-bottom: 5px;">Personalize your Start menu & workspace</div>
            
            <div class="settings-grid">
                <!-- Setting Card 1 -->
                <div class="settings-card" onclick="alert('Accent & Tile Color settings opened!')">
                    <div class="settings-card-icon"><i class="fa-solid fa-palette"></i></div>
                    <div class="settings-card-info">
                        <div class="settings-card-title">Accent & Tile Color</div>
                        <div class="settings-card-desc">Customize Metro theme colors, dark background, and accent tones.</div>
                    </div>
                </div>

                <!-- Setting Card 2 -->
                <div class="settings-card" onclick="alert('Lock screen settings opened!')">
                    <div class="settings-card-icon"><i class="fa-solid fa-image"></i></div>
                    <div class="settings-card-info">
                        <div class="settings-card-title">Lock Screen & Wallpaper</div>
                        <div class="settings-card-desc">Manage background images, screensaver, and high-definition views.</div>
                    </div>
                </div>

                <!-- Setting Card 3 -->
                <div class="settings-card" onclick="alert('Notifications settings opened!')">
                    <div class="settings-card-icon"><i class="fa-solid fa-bell"></i></div>
                    <div class="settings-card-info">
                        <div class="settings-card-title">Notifications & Sound</div>
                        <div class="settings-card-desc">Configure live tile alerts, sound FX, and background updates.</div>
                    </div>
                </div>

                <!-- Setting Card 4 -->
                <div class="settings-card" onclick="alert('Display settings opened!')">
                    <div class="settings-card-icon"><i class="fa-solid fa-desktop"></i></div>
                    <div class="settings-card-info">
                        <div class="settings-card-title">Display & Resolution</div>
                        <div class="settings-card-desc">Adjust screen scaling, full-screen mode, and viewport layouts.</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Fungsi untuk mengganti tab aktif & underline
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

        // Tombol kembali ke start menu
        function backToStartMenu() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>