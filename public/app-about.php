<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windows 8.1 Multi-Layout App</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            user-select: none;
        }

        /* Kunci HTML & Body agar full screen tanpa scroll */
        html, body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #1d1d1d; /* Metro dark theme */
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* 1. TOP BLACK BAR (APP BAR) */
        .app-bar {
            background-color: #000000; 
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            flex-shrink: 0;
            border-bottom: 2px solid rgba(255, 255, 255, 0.05);
        }

        .app-bar-left {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .app-icon {
            width: 28px;
            height: 28px;
            background-color: #00bcf2; /* Win 8 Accent Color */
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

        /* 2. SUB-HEADERS (PANORAMIC STYLE) */
        .app-headers {
            padding: 20px 50px 10px 50px;
            display: flex;
            gap: 40px;
            flex-shrink: 0;
        }

        .header-item {
            font-size: 26px;
            font-weight: 300;
            color: #7a7a7a;
            cursor: pointer;
            transition: color 0.2s;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
        }

        .header-item:hover {
            color: #cccccc;
        }

        /* 3. CONTENT AREA (FULLSCREEN NO SCROLL) */
        .app-content {
            flex-grow: 1;
            padding: 10px 50px 30px 50px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .content-section {
            display: none;
            flex-direction: column;
            flex-grow: 1;
            width: 100%;
            height: 100%;
        }

        .content-section.active {
            display: flex;
        }

        /* --- LAYOUT 1: FEATURED (Grid Standard) --- */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 20px;
            margin-top: 10px;
        }

        .content-card {
            background-color: #2d2d2d;
            height: 150px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            cursor: pointer;
            transition: transform 0.1s, background-color 0.2s;
            border: 2px solid transparent;
        }

        .content-card:hover {
            background-color: #3d3d3d;
            border-color: rgba(255, 255, 255, 0.4);
        }

        .content-card h4 {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .content-card p {
            font-size: 12px;
            color: #aaaaaa;
        }

        /* --- LAYOUT 2: APP DETAIL / TEXT & SIDE IMAGE --- */
        .detail-container {
            display: flex;
            gap: 50px;
            width: 100%;
            flex-grow: 1;
            align-items: center;
        }

        .detail-text-side {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .detail-text-side h2 {
            font-size: 28px;
            font-weight: 300;
        }

        .detail-text-side p {
            font-size: 14px;
            line-height: 1.6;
            color: #cccccc;
        }

        .detail-image-side {
            flex: 1;
            background-color: #333333;
            height: 100%;
            max-height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 14px;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        /* --- LAYOUT 3: CATEGORIES THUMBNAIL GRID --- */
        .thumb-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 20px;
            margin-top: 10px;
        }

        .thumb-item {
            background-color: #262626;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: background 0.2s, border-color 0.2s;
            border: 2px solid transparent;
        }

        .thumb-item:hover {
            background-color: #333;
            border-color: #00bcf2;
        }

        .thumb-box {
            width: 56px;
            height: 56px;
            background-color: #00bcf2;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .thumb-title {
            font-size: 13px;
            font-weight: 400;
        }

        /* --- LAYOUT 4: READER / ARTICLE APP STYLE --- */
        .reader-container {
            width: 100%;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .reader-hero-img {
            width: 100%;
            height: 200px;
            background-color: #3a3a3a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-size: 14px;
            border: 2px solid rgba(255, 255, 255, 0.05);
            flex-shrink: 0;
        }

        .reader-content p {
            font-size: 15px;
            line-height: 1.7;
            color: #dddddd;
            margin-bottom: 12px;
            font-weight: 300;
        }
    </style>
</head>
<body>

    <!-- 1. TOP BLACK BAR -->
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon">W</div>
            <span class="app-title">Windows Store & Reader</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <!-- 2. SUB-HEADERS (4 VARIASI HEADER) -->
    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Featured</div>
        <div class="header-item" onclick="switchTab(1)">App Detail</div>
        <div class="header-item" onclick="switchTab(2)">Categories</div>
        <div class="header-item" onclick="switchTab(3)">Reader</div>
    </nav>

    <!-- 3. CONTENT AREA DENGAN 4 VARIASI LAYOUT -->
    <main class="app-content">
        
        <!-- Tab 0: Featured (Grid Standart) -->
        <section class="content-section active" id="section-0">
            <h3 style="font-weight: 300; font-size: 18px; color: #00bcf2; margin-bottom: 10px;">Recommended Highlights</h3>
            <div class="card-grid">
                <div class="content-card">
                    <h4>Metro Music</h4>
                    <p>Audio • Free</p>
                </div>
                <div class="content-card">
                    <h4>Smart Reader</h4>
                    <p>Books • $2.99</p>
                </div>
                <div class="content-card">
                    <h4>Cloud Studio</h4>
                    <p>Developer • Free</p>
                </div>
                <div class="content-card">
                    <h4>Neon Weather</h4>
                    <p>Utilities • Free</p>
                </div>
            </div>
        </section>

        <!-- Tab 1: App Detail (Gambar di Kanan, Teks Panjang di Kiri) -->
        <section class="content-section" id="section-1">
            <div class="detail-container">
                <div class="detail-text-side">
                    <h2>Experience Next-Gen App Architecture</h2>
                    <p>Windows 8.1 introduced an immersive, edge-to-edge layout paradigm that eliminates clunky chrome borders and focuses purely on fluid typographic hierarchy and high-impact visual presentation.</p>
                    <p>This layout is engineered specifically for content-heavy applications where users expect seamless horizontal/vertical scrolling panels. Every detail is meticulously aligned to maintain pristine whitespace and modern readability standards.</p>
                    <p>Designed with speed, responsiveness, and aesthetic minimalism in mind, empowering developers to deliver native desktop software performance wrapped in fluid Metro-style interfaces.</p>
                </div>
                <div class="detail-image-side">
                    [Preview Image / Illustration Box]
                </div>
            </div>
        </section>

        <!-- Tab 2: Categories (Thumbnail Kotak Banyak + Icon & Title di Bawahnya) -->
        <section class="content-section" id="section-2">
            <h3 style="font-weight: 300; font-size: 18px; color: #00bcf2; margin-bottom: 10px;">Explore All Categories</h3>
            <div class="thumb-grid">
                <div class="thumb-item">
                    <div class="thumb-box">🎮</div>
                    <span class="thumb-title">Games</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">🎵</div>
                    <span class="thumb-title">Music</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">📰</div>
                    <span class="thumb-title">News</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">📊</div>
                    <span class="thumb-title">Finance</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">📚</div>
                    <span class="thumb-title">Books</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">🛠️</div>
                    <span class="thumb-title">Utilities</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">🎬</div>
                    <span class="thumb-title">Video</span>
                </div>
                <div class="thumb-item">
                    <div class="thumb-box">⚙️</div>
                    <span class="thumb-title">Settings</span>
                </div>
            </div>
        </section>

        <!-- Tab 3: Reader / Kindle Apps Style (Gambar Besar di Atas, Teks Banyak di Bawah) -->
        <section class="content-section" id="section-3">
            <div class="reader-container">
                <h2 style="font-weight: 300; font-size: 24px;">Chapter 1: The Philosophy of Modern Immersive Design</h2>
                <div class="reader-hero-img">
                    [Large Hero Picture / Reader Illustration]
                </div>
                <div class="reader-content">
                    <p>The transition from traditional desktop windowing environments to panoramic Metro interfaces revolutionized how users consume long-form articles, documentation, and digital publications.</p>
                    <p>By stripping away unnecessary chrome elements, sidebars, and nested borders, reading applications create a distraction-free digital paper experience. The typography leverages clean font weights, optimized line spacing, and wide margins to emulate high-end editorial layouts.</p>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Fungsi ganti tab header & konten aktif
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