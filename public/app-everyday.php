<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creations - Happay</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        .app-bar {
            background-color: #291C0F; 
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
        }

        .header-item {
            font-size: 28px;
            font-weight: 300;
            color: #7a7a7a;
            cursor: pointer;
            padding-bottom: 10px;
            border-bottom: 4px solid transparent;
            transition: color 0.2s, border-color 0.2s;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
            border-bottom: 4px solid #291C0F;
        }

        .header-item:hover {
            color: #cccccc;
        }

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
            color: #291C0F;
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
            background-color: #291C0F;
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
            background-color: #291C0F;
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
            height: 230px;
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
            border-color: #291C0F;
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
            background-color: #291C0F;
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
            border-color: #291C0F;
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
    </style>
</head>
<body>
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-brands fa-accusoft"></i></div>
            <span class="app-title">Everyday</span>
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
                    <img src="assets/img/tile/evr1.png" alt="Everyday">
                </div>
                <div class="overview-info">
                    <h2 class="overview-title">Everyday - Productivity Tools</h2>
                    <div class="overview-subtitle">Free</div>
                    <div class="overview-meta"><i class="fa-solid fa-layer-group"></i> Productivity Tools</div>
                    <div style="display: flex; gap: 15px;">
                        <a href="https://apache-wages-ventures-accompanying.trycloudflare.com" target="_blank" class="install-btn">
                            <i class="fa-solid fa-link"></i> Open
                        </a>
                        <a href="https://github.com/partnerspock/everyday" target="_blank" class="install-btn" style="background: #2b2b2b;">
                            <i class="fa-brands fa-github"></i> Repo
                        </a>
                    </div>
                </div>
            </div>
            <div class="overview-middle-content">
                <p>Developed a web-based Point of Sale (POS) and Warehouse Management System using PHP Laravel, designed to support payment processing, sales transactions, and inventory management within an integrated business application.</p>
                <p>Implemented POS workflows for handling sales transactions and payment processing, alongside warehouse management functionality to support stock monitoring, inventory tracking, and stock movement operations.</p>
                <p>Built the application using Laravel, PHP, HTML, and CSS, with Font Awesome integrated to enhance the user interface through consistent icons and visual elements.</p>
                <p>Designed the system to streamline daily business operations by connecting point-of-sale activities with warehouse inventory workflows, improving transaction visibility and stock management.</p>
                <p>Currently preparing the production deployment environment using a VPS, with domain configuration and final deployment planned as the next steps. Source code and version control are managed through GitHub.</p>
            </div>
        </section>
        <section class="content-section" id="section-1">
            <div class="gallery-grid">
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e1.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Desktop</span>
                        <div class="gallery-text">Item Inventory Report</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e2.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Desktop</span>
                        <div class="gallery-text">Item Management</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e3.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Desktop</span>
                        <div class="gallery-text">Region Management</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e4.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Sales & Payment</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e5.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Region Management</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-everyday/e6.png">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mobile</span>
                        <div class="gallery-text">Stock HIstory Audit</div>
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
                    <div class="tool-tile" style="background-color: #ffffff; font-size:28px;">
                        <i class="fa-solid fa-font-awesome" style="color: rgb(116, 192, 252);"></i>
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Font Awesome</div>
                        <div class="tool-desc">Icon Library</div>
                    </div>
                </div>
                <div class="tool-card">
                    <div class="tool-tile">
                        <img src="assets/img/tile/laravel.png" alt="ERP System">
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Laravel</div>
                        <div class="tool-desc">Framework</div>
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
                    <div class="tool-tile" style="background-color: #000000;">
                        <i class="fa-brands fa-github" alt="Github" style="font-size:28px;"></i>
                    </div>
                    <div class="tool-info">
                        <div class="tool-name">Github</div>
                        <div class="tool-desc">Multi-Device Syncing</div>
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

            headers.forEach((h, i) => {
                if (i === index) {
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
        }

        // Fungsi tombol close / back ke start menu
        function backToStartMenu() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>