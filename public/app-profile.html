<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Profile</title>
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
            background-color: #1d1d1d;
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
            border-bottom: 4px solid #008ed0;
        }

        .header-item:hover {
            color: #cccccc;
        }

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
            width: 40%;
            height: 120px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
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
            width: 80px;
            height: 80px;
            transition: border-color 0.2s;
            border-radius: 50%;
        }

        .gallery-box img {
            width: 100%;
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
            justify-content: center;
            background: rgba(0, 0, 0, 0.4); /* Efek gelap tipis di balik text */
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-box:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-tag {
            align-self:center;
            background-color: #00bcf2;
            color: #ffffff;
            font-size: 8px;
            font-weight: 600;
            padding: 2px 8px;
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

    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-circle-user"></i></div>
            <span class="app-title">Profile</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Professional Summary</div>
    </nav>

    <main class="app-content">
        <section class="content-section active" id="section-0">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/profile2.jpg" alt="nusamandiri">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">Abraham Tirta Garnadi</h2>
                    <div class="reader-year">System Analyst</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta Pusat, Indonesia</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>ERP and System Analyst with experience in ERP implementation, business process analysis, functional testing, UAT, data migration, and master data management. Experienced in analyzing end-to-end workflows, identifying system and process gaps, and coordinating practical solutions across business users, developers, and stakeholders. Hands-on across Finance, Accounting, Sales, Purchasing, Supply Chain, Warehouse, E-commerce, POS, and PIM.</p>
                <br>
                <h1 style="font-size: 24px;">Core Capabilities</h1>
                <p>ERP & Business Systems • Business Process Analysis • Functional Requirements • Process Mapping & Improvement • System Implementation & UAT • Functional Testing • Data Migration & Master Data Management • Business Problem Solving • Stakeholder Coordination</p>
            </div>
            <div class="reader-bottom-gallery">
                <a href="tel:+6281383038443" target="_blank" rel="noopener" class="gallery-box">
                    <i class="fa-solid fa-phone" style="font-size: 24px;"></i>
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Phone</span>
                    </div>
                </a>
                <a href="mailto:abraham.tirta.99@gmail.com" target="_blank" rel="noopener" class="gallery-box">
                    <i class="fa-solid fa-envelope" style="font-size: 24px;"></i>
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Mail</span>
                    </div>
                </a>
                <a href="https://wa.me/6281383038443" target="_blank" rel="noopener" class="gallery-box">
                    <i class="fa-brands fa-whatsapp" style="font-size: 24px;"></i>
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Whatsapp</span>
                    </div>
                </a>
                <a href="https://linkedin.com/in/abrahamtirta" target="_blank" rel="noopener" class="gallery-box">
                    <i class="fa-brands fa-linkedin" style="font-size: 24px;"></i>
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Linked In</span>
                    </div>
                </a>
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