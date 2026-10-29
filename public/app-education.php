<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
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
            background-color: #ad2f4b; 
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
            padding: 25px 40px 15px 40px;
            display: flex;
            gap: 40px;
            flex-shrink: 0;
            background-color: #1d1d1d;
            z-index: 99;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        .header-item {
            font-size: 28px;
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
            border-bottom: 4px solid #ad2f4b;
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

        .content-section {
            display: none;
            flex-direction: column;
            gap: 30px;
            width: 100%;
        }

        .content-section.active {
            display: flex;
        }

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
            color: #ad2f4b;
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
            border: 2px solid rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
            padding: 10px;
            overflow: hidden;
        }

        .reader-top-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

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

        .gallery-box:hover img {
            opacity: 0.3;
        }

        .gallery-box:hover {
            border-color: #ad2f4b;
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
            background-color: #ad2f4b;
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
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <span class="app-title">Education</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>
    <nav class="app-headers">
        <div class="header-item active" onclick="switchTab(0)">Universitas Nusa Mandiri</div>
        <!-- <div class="header-item" onclick="switchTab(1)">Badan Nasional Sertifikasi Profesi</div> -->
    </nav>
    <main class="app-content">
        <section class="content-section active" id="section-0">
            <div class="reader-top-section">
                <div class="reader-headers-left">
                    <div class="reader-top-image">
                        <img src="assets/img/tile/nusamandiri.png" alt="nusamandiri">
                    </div>
                </div>
                <div class="reader-headers-left">
                    <h2 class="reader-main-title">Bachelor Degree of Computer Science (S.Kom)</h2>
                    <div class="reader-year">2018 - 2022</div>
                    <div class="reader-short-desc"><i class="fa-solid fa-location-dot"></i> Jakarta, Indonesia</div>
                </div>
            </div>
            <div class="reader-middle-content">
                <p>Earned a Bachelor’s Degree in Computer Science (Information Systems) from Universitas Nusa Mandiri, with a GPA of 3.71/4.00.</p>
                <p>The program provided a foundation in information systems, business processes, database management, and technology solutions to support organizational needs.</p>
                <p>Studied various subjects, including ERP software, UI/UX design, web programming, MySQL database management, and project management. These areas of study developed an understanding of how information systems are designed, developed, and managed to support business operations and improve process efficiency.</p>
            </div>
            <div class="reader-bottom-gallery">
                <div class="gallery-box">
                    <img src="assets/img/app-education/edu1.png" alt="Gallery 1">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Certificate</span>
                        <div class="gallery-text">Bachelor Degree Transcript</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-education/edu2.png" alt="Gallery 2">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Moment</span>
                        <div class="gallery-text">Graduation Ceremony</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-education/edu3.png" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Event</span>
                        <div class="gallery-text">Socialization and Charity</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="content-section" id="section-1">
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
                    <img src="assets/img/app-certifications/bnsp1.jpg" alt="BNSP 1">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Certification</span>
                        <div class="gallery-text">Program Analyst License</div>
                    </div>
                </div>
                <div class="gallery-box">
                    <img src="assets/img/app-certifications/bnsp2.jpg" alt="BNSP 2">
                    <div class="gallery-overlay">
                        <span class="gallery-tag">Competency</span>
                        <div class="gallery-text">Assessment Sheet</div>
                    </div>
                </div>
            </div>
        </section> -->

    </main>

    <script>
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