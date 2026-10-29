<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification</title>
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
            background-color: #7e3878; 
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
            padding: 20px 40px 0 40px; /* Padding bawah disesuaikan untuk garis bawah */
            display: flex;
            gap: 40px;
            flex-shrink: 0;
            background-color: #1d1d1d;
            z-index: 99;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08); /* Garis tipis dasar */
        }

        .header-item {
            font-size: 28px;
            font-weight: 300;
            color: #7a7a7a;
            cursor: pointer;
            padding-bottom: 10px; /* Ruang untuk underline */
            border-bottom: 4px solid transparent; /* Default transparan */
            transition: color 0.2s, border-color 0.2s;
        }

        .header-item.active {
            color: #ffffff;
            font-weight: 400;
            border-bottom: 4px solid #7e3878; /* Underline tebal sesuai warna aksen saat aktif */
        }

        .header-item:hover {
            color: #cccccc;
            border-bottom: 4px solid rgba(126, 56, 120, 0.4); /* Efek hover agar user tahu ini interaktif */
        }

        /* 4. CONTENT AREA - AREA INI SAJA YANG BISA SCROLL VERTIKAL */
        .app-content {
            width: 100%;
            flex-grow: 1;
            padding: 25px 40px 50px 40px;
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
            color: #7e3878;
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
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 12px;
            flex-shrink: 0;
        }

        .reader-top-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
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
            border-color: #7e3878;
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
            background-color: #7e3878;
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
    </style>
</head>
<body>

    <!-- 1. TOP BLACK BAR (STAY AT TOP) -->
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-award"></i></div>
            <span class="app-title">Certifications</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <!-- 2. SUB-HEADERS (DENGAN UNDERLINE AKTIF) -->
    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Leadership Management International</div>
        <div class="header-item" onclick="switchTab(1)">Badan Nasional Sertifikasi Profesi</div>
    </nav>

    <!-- 3. CONTENT AREA -->
    <main class="app-content">
        
        <!-- ================= TAB 0 ================= -->
        <section class="content-section active" id="section-0">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/lmi.jpg" alt="LMI">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">LMI - Effective Personal Productivity</h2>
                    <div class="reader-year">2025</div>
                    <div class="reader-short-desc">First and foundational step in LMI's Total Leader® framework, which also includes Personal Leadership, Motivational Leadership, and Strategic Leadership.</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>The Effective Personal Productivity (EPP) program by Leadership Management International (LMI) provided practical learning in personal effectiveness, goal setting, time management, and productivity management. The program covered identifying high- and low-value activities, prioritizing tasks based on their impact, setting clear objectives, planning action steps, and managing time more effectively.</p>
                <p>It also emphasized evaluating work habits, identifying bottlenecks, and implementing improvements to increase efficiency and achieve measurable results.</p>
                <p>The program also focused on effective communication, collaboration, and empathy. Key learnings included organizing thoughts before communicating, understanding different perspectives, recognizing others' needs, and adapting communication styles to different individuals.</p>
                <p>Through these concepts, the program strengthened my understanding of how self-management, interpersonal skills, and continuous improvement contribute to better individual performance and more effective teamwork.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/lmi1.jpg" alt="LMI 1">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Moment</span>
                        <div class="gallery-text">Final Presentation</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/lmi2.jpg" alt="LMI 2">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Moment</span>
                        <div class="gallery-text">EPP Program Completion</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/lmi3.png" alt="LMI 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Certificate</span>
                        <div class="gallery-text">Achievement Proof</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= TAB 1 ================= -->
        <section class="content-section" id="section-1">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/bnsp.jpg" alt="BNSP">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">BNSP - Program Analyst</h2>
                    <div class="reader-year">2022 - 2025</div>
                    <div class="reader-short-desc">Independent institution formed by the Indonesian government to regulate and implement professional competence certification for the Indonesian workforce.</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Completed the BNSP-certified Program Analyst training and certification program, covering software scalability analysis, SQL, database access, programming algorithms, and code documentation.</p>
                <p>The training provided an understanding of key programming concepts, database operations, and software development practices.</p>
                <p>The program also covered debugging, program profiling, code review, unit testing, and integration testing. These competencies focus on identifying software issues, evaluating program performance, reviewing code quality, and verifying that individual components and integrated systems function as expected.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/bnsp1.png" alt="BNSP 1">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Certificate</span>
                        <div class="gallery-text">Program Analyst License</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/bnsp2.png" alt="BNSP 2">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Certificate</span>
                        <div class="gallery-text">Assessment Sheet</div>
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