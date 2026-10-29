<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0078d7">
<title>Playground</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/c66aa74d08.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="scrim"></div>
<header class="topbar">
    <div>
        <h1 class="start-title">Start<span class="title-dot"></span></h1>
    </div>

    <div class="top-right">
        <div class="clock">
            <strong id="clock-time">Drs. T</strong>
            <span id="clock-date">System Analyst</span>
        </div>
        <img class="avatar" src="assets/img/profile.jpg" alt="Foto profil" title="Your Name">
    </div>
</header>

<main class="workspace">
    <div class="section-group">
        <h2 class="group-title">Main Apps</h2>
        <section class="tile-grid" style="grid-template-columns: repeat(10, var(--tile));" aria-label="Section 1 tiles">
            <button class="tile big" id="tile-weather" data-app="weather"
                style="text-decoration:none;background:linear-gradient(180deg,rgba(7,28,45,.85) 0%,rgba(7,28,45,.2) 80%,transparent 100%),url('assets/img/tile/weather.jpg') center/cover;border:none;outline:none;">
                <div class="weather-container">
                    <div class="weather-info">
                        <div class="weather-tag" id="tile-weather-tag" style="font-size:10px;text-transform:uppercase;letter-spacing:1px;opacity:.8;"></div>
                        <div class="weather-temp-large" id="tile-weather-temp">--°</div>
                        <div class="weather-city" id="tile-weather-city">Jakarta, Indonesia</div>
                        <div class="weather-desc" id="tile-weather-subtitle">Today</div>
                        <div class="weather-desc" id="tile-weather-condition">Loading...</div>
                    </div>
                    <div class="weather-icon-lg" id="tile-weather-icon">⛅</div>
                </div>
            </button>
            <button class="tile wide cyan" id="tile-greeting" data-app="greeting">
                <div class="live-copy">
                    <div class="live-main" id="tile-greeting-text">
                        Welcome<br>everyone
                    </div>
                </div>
            </button>
            <button class="tile two dynamic-tile" id="tile-profile" data-app="profile" style="cursor: pointer;" onclick="openProfile();">
                <div class="dt-bg" id="tile-profile-bg"></div>
                <div class="dt-overlay" id="tile-profile-overlay"></div>
                <div class="live-copy dt-copy" id="tile-profile-copy">
                    <div class="dt-icon-wrap" id="tile-profile-icon-wrap"></div>
                    <div class="dt-tag" id="tile-profile-tag"></div>
                    <div class="dt-text" id="tile-profile-text">Memuat...</div>
                </div>
            </button>
            <button class="tile two dynamic-tile" id="tile-maps" data-app="maps" style="cursor:pointer;" onclick="openMap()">
                <div class="dt-bg" id="tile-maps-bg"></div>
                <div class="dt-overlay" id="tile-maps-overlay"></div>
                <div class="live-copy dt-copy" id="tile-maps-copy">
                    <div class="dt-icon-wrap" id="tile-maps-icon-wrap"></div>
                    <div class="dt-tag" id="tile-maps-tag"></div>
                    <div class="dt-text" id="tile-maps-text">Memuat...</div>
                </div>
            </button>
            <a href="https://portfoliotirta-l9yr6mtus-partnerspocks-projects.vercel.app" target="_blank" rel="noopener"
                class="tile two cyan" title="Portfolio" style="cursor: pointer;">
                <span class="tile-icon-two"><i class="fa-solid fa-cubes-stacked"></i></span>
                <span class="tile-caption">Portfolio</span>
            </a>
            <a href="tel:+6281234567890" class="tile one cyan"
                style="cursor: pointer;" title="Telepon Saya">
                <span class="tile-icon"><i class="fa-solid fa-phone"></i></span>
            </a>
            <a href="mailto:trax@gmail.com" class="tile one cyan"
                style="cursor: pointer;" title="Kirim Email">
                <span class="tile-icon"><i class="fa-solid fa-envelope"></i></span>
            </a>
            <a href="https://linkedin.com/in/naufalfahmi" target="_blank" rel="noopener"
                class="tile one blue" title="LinkedIn" style="cursor: pointer;">
                <span class="tile-icon"><i class="fa-brands fa-linkedin"></i></span>
            </a>
            <a href="https://wa.me/6281383038888" target="_blank" rel="noopener"
                class="tile one green" title="WhatsApp" style="cursor: pointer;">
                <span class="tile-icon"><i class="fa-brands fa-whatsapp"></i></span>
            </a>
            <button class="tile big indigo" id="tile-calendar-greetings" data-app="calendar" onclick="openCalendar()" style="cursor: pointer;">
                <div class="calendar-container">
                    <div class="calendar-top">
                        <div class="calendar-date" id="tile-calendar-greetings-date">00</div>
                        <div class="calendar-day" id="tile-calendar-greetings-day">HARI</div>
                    </div>
                    <div class="tile-bottom-icon">
                        <i class="fa-solid fa-calendar-days calendar-icon"></i>
                        <span class="tile-caption-icon" id="tile-calendar-caption">Calendar</span>
                    </div>
                </div>
            </button>
            <button class="tile big dynamic-tile" id="tile-experience" data-app="experience" style="cursor:pointer;" onclick="openExperience();">
                <div class="dt-bg" id="tile-experience-bg"></div>
                <div class="dt-overlay" id="tile-experience-overlay"></div>
                <div class="live-copy dt-copy" id="tile-experience-copy">
                    <div class="dt-icon-wrap" id="tile-experience-icon-wrap"></div>
                    <div class="dt-tag" id="tile-experience-tag"></div>
                    <div class="dt-text" id="tile-experience-text">Loading...</div>
                </div>
            </button>
            <button class="tile two dark-red" title="Education" onclick="openEducation()" style="cursor: pointer;">
                <span class="tile-icon-two"><i class="fa-solid fa-graduation-cap"></i></span>
                <div class="tile-caption">Education</div>
            </button>
            <button class="tile two purple" title="Certificate" style="cursor: pointer;" onclick="openCertificate()">
                <span class="tile-icon-two"><i class="fa-solid fa-trophy"></i></span>
                <span class="tile-caption">Certificate</span>
            </button>
        </section>
    </div>

    <div class="section-group">
        <h2 class="group-title">Project Showcases</h2>
        <section class="tile-grid" style="grid-template-columns:repeat(6,var(--tile));" aria-label="Section 3 tiles">
            
            <button target="_blank" rel="noopener" class="tile two dynamic-tile" id="tile-hptb" data-app="hptb" style="cursor:pointer;" onclick="openHappay()">
                <div class="dt-bg" id="tile-hptb-bg"></div>
                <div class="dt-overlay" id="tile-hptb-overlay"></div>
                <div class="live-copy dt-copy" id="tile-hptb-copy">
                    <div class="dt-icon-wrap" id="tile-hptb-icon-wrap"></div>
                    <div class="dt-tag" id="tile-hptb-tag"></div>
                    <div class="dt-text" id="tile-hptb-text">Loading...</div>
                </div>
            </button>
            <button onclick="openShowcase()" class="tile big dynamic-tile" id="tile-creation" data-app="creation" style="cursor:pointer;">
                <div class="dt-bg" id="tile-creation-bg"></div>
                <div class="dt-overlay" id="tile-creation-overlay"></div>
                <div class="live-copy dt-copy" id="tile-creation-copy">
                    <div class="dt-icon-wrap" id="tile-creation-icon-wrap"></div>
                    <div class="dt-tag" id="tile-creation-tag"></div>
                    <div class="dt-text" id="tile-creation-text">Loading...</div>
                </div>
            </button>
            <button class="tile two dynamic-tile" id="tile-evtb" data-app="evtb" style="cursor:pointer;" onclick="openEveryday()">
                <div class="dt-bg" id="tile-evtb-bg"></div>
                <div class="dt-overlay" id="tile-evtb-overlay"></div>
                <div class="live-copy dt-copy" id="tile-evtb-copy">
                    <div class="dt-icon-wrap" id="tile-evtb-icon-wrap"></div>
                    <div class="dt-tag" id="tile-evtb-tag"></div>
                    <div class="dt-text" id="tile-evtb-text">Loading...</div>
                </div>
            </button>
            <button class="tile two dynamic-tile" id="tile-xxi" data-app="xxi">
                <div class="dt-bg" id="tile-xxi-bg"></div>
                <div class="dt-overlay" id="tile-xxi-overlay"></div>
                <div class="live-copy dt-copy" id="tile-xxi-copy">
                    <div class="dt-icon-wrap" id="tile-xxi-icon-wrap"></div>
                    <div class="dt-tag" id="tile-xxi-tag"></div>
                    <div class="dt-text" id="tile-xxi-text">Loading...</div>
                </div>
            </button>
            <a href="https://www.instagram.com/reel/DSM6cjHEnCy/?utm_source=ig_web_copy_link&igsi=MzRlODBiNWFlZA%3D%3D" target="_blank" rel="noopener" class="tile two cyan"
                style="text-decoration:none; cursor:pointer;" title="Instagram">
                <span class="tile-icon-two"><i class="fa-brands fa-instagram"></i></span>
                <span class="tile-caption">Instagram</span>
            </a>
        </section>
    </div>

    <div class="section-group tools-section">
        <h2 class="group-title">Tools</h2>
        <div class="tools-row">
            <section class="tile-grid"
                style="grid-template-columns:repeat(4,var(--tile));"
                aria-label="Design tools">
                
                <button class="tile two dynamic-tile" id="tile-servertb" data-app="servertb">
                    <div class="dt-bg" id="tile-servertb-bg"></div>
                    <div class="dt-overlay" id="tile-servertb-overlay"></div>
                    <div class="live-copy dt-copy" id="tile-servertb-copy">
                        <div class="dt-icon-wrap" id="tile-servertb-icon-wrap"></div>
                        <div class="dt-tag" id="tile-servertb-tag"></div>
                        <div class="dt-text" id="tile-servertb-text">Loading...</div>
                    </div>
                </button>
                <button class="tile two dynamic-tile" id="tile-sqltb" data-app="sqltb">
                    <div class="dt-bg" id="tile-sqltb-bg"></div>
                    <div class="dt-overlay" id="tile-sqltb-overlay"></div>
                    <div class="live-copy dt-copy" id="tile-sqltb-copy">
                        <div class="dt-icon-wrap" id="tile-sqltb-icon-wrap"></div>
                        <div class="dt-tag" id="tile-sqltb-tag"></div>
                        <div class="dt-text" id="tile-sqltb-text">Loading...</div>
                    </div>
                </button>
                <button class="tile two dynamic-tile" id="tile-prodtb" data-app="prodtb">
                    <div class="dt-bg" id="tile-prodtb-bg"></div>
                    <div class="dt-overlay" id="tile-prodtb-overlay"></div>
                    <div class="live-copy dt-copy" id="tile-prodtb-copy">
                        <div class="dt-icon-wrap" id="tile-prodtb-icon-wrap"></div>
                        <div class="dt-tag" id="tile-prodtb-tag"></div>
                        <div class="dt-text" id="tile-prodtb-text">Loading...</div>
                    </div>
                </button>
                <button class="tile one slate" data-app="github">
                    <span class="tile-icon"><i class="fa-brands fa-github"></i></span>
                </button>
                <button class="tile one orange-half" data-app="drawio">
                    <span class="tile-icon"><i class="fa-solid fa-timeline"></i></span>
                </button>
                <button class="tile one white" data-app="antigravity">
                    <img src="assets/img/tile/antigravity.jpg" alt="antigravity" class="tile-image-icon">
                </button>
                <button class="tile one dynamic-tile" id="tile-officetools" data-app="officetools">
                    <div class="dt-bg" id="tile-officetools-bg"></div>
                    <div class="dt-overlay" id="tile-officetools-overlay"></div>
                    <div class="live-copy dt-copy" id="tile-officetools-copy">
                        <div class="dt-icon-wrap" id="tile-officetools-icon-wrap"></div>
                        <div class="dt-tag" id="tile-officetools-tag"></div>
                        <div class="dt-text" id="tile-officetools-text">Loading...</div>
                    </div>
                </button>
                <button class="tile wide slate" data-app="values">
                    <img src="assets/img/tile/figma.png" class="tile-image-icon" style="width:48px;">
                    <span class="tile-caption">Figma</span>
                </button>
            </section>
        </div>
        
        <h2 class="group-title">Utilities</h2>
        <div class="tools-row">
            <section class="tile-grid"
                style="grid-template-columns:repeat(4,var(--tile));"
                aria-label="Other tools">
                <button class="tile wide cyan" id="tile-music-main" aria-label="Putar musik">
                <span class="music-status" id="tile-music-main-status" style="position:absolute;top:8px;right:10px;font-size:10px;opacity:.8;">OFF</span>
                <div style="display:flex;gap:14px;align-items:center;width:100%;justify-content:center;margin-top:auto;margin-bottom:auto;">
                    <span id="tile-music-main-prev" role="button" aria-label="Lagu sebelumnya"
                        title="Previous Song"
                        style="width:32px;height:32px;display:flex;align-items:center;justify-content:center;border:1.5px solid rgba(255,255,255,.3);border-radius:50%;font-size:13px;opacity:.85;cursor:pointer;">
                        <i class="fa-solid fa-step-backward"></i>
                    </span>
                    <span class="tile-icon" id="tile-music-main-icon" title="Play / Pause"
                        style="width:48px;height:48px;display:flex;align-items:center;justify-content:center;border:2px solid rgba(255,255,255,.4);border-radius:50%;font-size:20px;line-height:1;cursor:pointer;">
                        <i class="fa-solid fa-play"></i>
                    </span>
                    <span id="tile-music-main-next" role="button" aria-label="Lagu berikutnya"
                        title="Next Song"
                        style="width:32px;height:32px;display:flex;align-items:center;justify-content:center;border:1.5px solid rgba(255,255,255,.3);border-radius:50%;font-size:13px;opacity:.85;cursor:pointer;">
                        <i class="fa-solid fa-forward-step"></i>
                    </span>
                </div>
                <span class="tile-caption"
                    style="position:absolute;left:12px;bottom:2px;font-size:12px;">Music Player</span>
            </button>
                <button class="tile two cyan" style="cursor:pointer;" onclick="openAbout()">
                    <span class="tile-icon-two">
                        <i class="fa-solid fa-info"></i>
                    </span>
                    <span class="tile-caption">About</span>
                </button>
                <a href="https://archristmast26.vercel.app" class="tile one green" data-app="playground" target="_blank" rel="noopener" style="cursor:pointer;">
                    <span class="tile-icon">◈</span>
                </a>
            </section>
        </div>
    </div>
</main>

<audio id="background-music" preload="auto">
    <source src="assets/audio/above.mp3" type="audio/mp3">
</audio>


<script>
"use strict";

const byId = (id) => document.getElementById(id);

// ==========================================
// 2. GREETING TILE
// ==========================================
const greetingText = byId("tile-greeting-text");

const greetingMessages = [
    ["Welcome", "everyone"],
    ["On my", "playground"],
    ["Just", "started"],
    ["Matthew", "6:13"]
];

let greetingIndex = 0;

if (greetingText) {
    setInterval(() => {
        greetingIndex = (greetingIndex + 1) % greetingMessages.length;

        greetingText.classList.add("tile-animate-out");

        setTimeout(() => {
            greetingText.innerHTML =
                `${greetingMessages[greetingIndex][0]}<br>${greetingMessages[greetingIndex][1]}`;

            greetingText.classList.remove("tile-animate-out");
            greetingText.classList.add("tile-animate-in");

            setTimeout(() => {
                greetingText.classList.remove("tile-animate-in");
            }, 400);

        }, 350);

    }, 4500);
}


// ==========================================
// 3. WEATHER
// ==========================================
async function fetchWeather() {
    const tempElement = byId("tile-weather-temp");
    const conditionElement = byId("tile-weather-condition");
    const iconElement = byId("tile-weather-icon");
    const cityElement = byId("tile-weather-city");
    const subtitleElement = byId("tile-weather-subtitle");
    const tagElement = byId("tile-weather-tag");

    if (!tempElement) return;

    try {
        const response = await fetch(
            "https://api.open-meteo.com/v1/forecast?latitude=-6.2088&longitude=106.8456&current=temperature_2m,weather_code"
        );

        if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
        }

        const data = await response.json();

        if (!data.current) {
            throw new Error("Data cuaca tidak tersedia.");
        }

        const temp = Math.round(data.current.temperature_2m);
        const code = data.current.weather_code;

        let condition = "Sunny";
        let icon = "☀️";

        if ([1, 2, 3].includes(code)) {
            condition = "Cloudy";
            icon = "⛅";
        } else if (
            (code >= 51 && code <= 67) ||
            (code >= 80 && code <= 82)
        ) {
            condition = "Rain";
            icon = "🌧️";
        } else if (code >= 95) {
            condition = "Thunderstorm";
            icon = "⚡";
        }

        tempElement.textContent = `${temp}°`;

        if (conditionElement) conditionElement.textContent = condition;
        if (iconElement) iconElement.textContent = icon;
        if (cityElement) cityElement.textContent = "Jakarta, Indonesia";
        if (subtitleElement) subtitleElement.textContent = "Today";
        if (tagElement) tagElement.textContent = "";

    } catch (error) {
        console.error("Still Load the Current Weather:", error);

        tempElement.textContent = "--°";

        if (conditionElement) {
            conditionElement.textContent = "Offline";
        }
    }
}

fetchWeather();
setInterval(fetchWeather, 15 * 60 * 1000);


// ==========================================
// 4. CALENDAR TILES
// ==========================================
function updateCalendar(tileId) {
    const dayElement = byId(`${tileId}-day`);
    const dateElement = byId(`${tileId}-date`);
    const now = new Date();

    if (dayElement) {
        dayElement.textContent = now.toLocaleDateString("en-EN", {
            weekday: "long"
        });
    }

    if (dateElement) {
        dateElement.textContent = now.getDate();
    }
}

[
    "tile-calendar-greetings",
    "tile-calendar-tools"
].forEach(updateCalendar);

// ==========================================
// 5. MUSIC PLAYER
// ==========================================
const backgroundMusic = byId("background-music");

const playlist = [
    "assets/audio/foster.mp3",
    "assets/audio/above.mp3"
];

let currentSongIndex = 0;
let loadedSongIndex = -1;

const musicControllers = [
    {
        button: byId("tile-music-main"),
        status: byId("tile-music-main-status"),
        icon: byId("tile-music-main-icon"),
        iconIdle: '<i class="fa-solid fa-play"></i>',
        iconPlaying: '<i class="fa-solid fa-pause"></i>',
        previous: byId("tile-music-main-prev"),
        next: byId("tile-music-main-next")
    },
    {
        button: byId("tile-music-compact"),
        status: byId("tile-music-compact-status"),
        icon: byId("tile-music-compact-icon"),
        iconIdle: "♫",
        iconPlaying: "Ⅱ",
        previous: null,
        next: byId("tile-music-compact-next")
    }
];

function setMusicUI(isPlaying, message = null) {
    musicControllers.forEach((controller) => {
        if (controller.status) {
            controller.status.textContent =
                message || (isPlaying ? "PLAY" : "OFF");
        }

        if (controller.icon) {
            controller.icon.innerHTML =
                isPlaying ? controller.iconPlaying : controller.iconIdle;
        }

        if (controller.button) {
            controller.button.setAttribute(
                "aria-label",
                isPlaying ? "Jeda musik" : "Putar musik"
            );

            controller.button.setAttribute(
                "aria-pressed",
                String(isPlaying)
            );
        }
    });
}

async function playCurrentSong() {
    if (!backgroundMusic || !playlist.length) return;

    try {
        if (loadedSongIndex !== currentSongIndex) {
            backgroundMusic.src = playlist[currentSongIndex];
            backgroundMusic.load();
            loadedSongIndex = currentSongIndex;
        }

        await backgroundMusic.play();
        setMusicUI(true);

    } catch (error) {
        console.error("Musik gagal diputar:", error);

        loadedSongIndex = -1;
        setMusicUI(false, "CEK FILE");
    }
}

function changeSong(direction) {
    if (!playlist.length) return;

    currentSongIndex =
        (currentSongIndex + direction + playlist.length) % playlist.length;

    loadedSongIndex = -1;
    playCurrentSong();
}

musicControllers.forEach((controller) => {
    if (controller.button) {
        controller.button.addEventListener("click", () => {
            if (!backgroundMusic) return;

            if (backgroundMusic.paused) {
                playCurrentSong();
            } else {
                backgroundMusic.pause();
                setMusicUI(false);
            }
        });
    }

    if (controller.previous) {
        controller.previous.addEventListener("click", (event) => {
            event.preventDefault();
            event.stopPropagation();
            changeSong(-1);
        });
    }

    if (controller.next) {
        controller.next.addEventListener("click", (event) => {
            event.preventDefault();
            event.stopPropagation();
            changeSong(1);
        });
    }
});

if (backgroundMusic) {
    backgroundMusic.removeAttribute("loop");

    backgroundMusic.addEventListener("playing", () => {
        setMusicUI(true);
    });

    backgroundMusic.addEventListener("pause", () => {
        if (!backgroundMusic.ended && !backgroundMusic.error) {
            setMusicUI(false);
        }
    });

    backgroundMusic.addEventListener("ended", () => {
        if (playlist.length > 1) {
            changeSong(1);
        } else {
            setMusicUI(false);
        }
    });
}


// ==========================================
// 6. DYNAMIC TILE - REUSABLE
// Caption diatur per slide lewat properti slide.caption.
//
// mode:
// image   = gambar saja
// icon    = icon tepat di tengah tile
// content = tag dan teks, dengan gambar atau warna
// ==========================================
const DT_DEFAULT_COLOR = "#008ed0";
const DT_DEFAULT_ICON_SIZE = "32px";
const DT_TRANSITION_MS = 300;

class DynamicTile {
    constructor(tileId, slides, intervalMs = 5000) {
        this.tileId = tileId;
        this.slides = Array.isArray(slides) ? slides : [];
        this.intervalMs = intervalMs;

        this.index = 0;
        this.timer = null;
        this.transitionTimer = null;
        this.animationTimer = null;

        this.tile = byId(tileId);

        if (!this.tile) {
            console.warn(`[DynamicTile] Markup '#${tileId}' tidak ditemukan.`);
            return;
        }

        const part = (name) => byId(`${tileId}-${name}`);

        this.bg = part("bg");
        this.overlay = part("overlay");
        this.copy = part("copy");
        this.iconWrap = part("icon-wrap");
        this.tag = part("tag");
        this.text = part("text");

        const required = {
            bg: this.bg,
            overlay: this.overlay,
            copy: this.copy,
            "icon-wrap": this.iconWrap,
            tag: this.tag,
            text: this.text
        };

        const missing = Object.keys(required).filter((name) => !required[name]);

        if (missing.length) {
            console.warn(
                `[DynamicTile] '#${tileId}' kekurangan elemen: ` +
                missing.map((name) => `${tileId}-${name}`).join(", ")
            );
            return;
        }

        if (!this.slides.length) {
            console.warn(`[DynamicTile] '#${tileId}' tidak punya slide.`);
            return;
        }

        // Caption dibuat satu kali dan berada di luar elemen konten slide.
        this.caption = this.tile.querySelector(".tile-caption");

        if (!this.caption) {
            this.caption = document.createElement("span");
            this.caption.className = "tile-caption";
            this.tile.appendChild(this.caption);
        }

        this.caption.setAttribute("aria-hidden", "true");

        this.render(this.slides[0]);
        this.start();
    }

    start() {
        if (this.timer || this.slides.length < 2) return;

        this.timer = setInterval(() => this.next(), this.intervalMs);
    }

    stop() {
        clearInterval(this.timer);
        clearTimeout(this.transitionTimer);
        clearTimeout(this.animationTimer);

        this.timer = null;
        this.transitionTimer = null;
        this.animationTimer = null;
    }

    render(slide) {
        if (!slide) return;

        const mode = slide.mode || "content";
        const align = slide.align || "left";

        // MODE DAN ALIGNMENT
        this.tile.dataset.slideMode = mode;
        this.tile.dataset.slideAlign = mode === "icon" ? "center" : align;

        // CAPTION PER SLIDE
        // Caption kosong atau tidak diisi berarti disembunyikan.
        if (this.caption) {
            const captionText =
                typeof slide.caption === "string" ? slide.caption.trim() : "";

            this.caption.textContent = captionText;
            this.caption.style.display = captionText ? "block" : "none";
            this.caption.style.visibility = "visible";
            this.caption.style.opacity = "1";
        }

        // BACKGROUND
        if (slide.image) {
            this.bg.style.backgroundImage = `url("${slide.image}")`;
            this.bg.style.backgroundColor = slide.color || "transparent";
            this.bg.style.backgroundPosition = "center";
            this.bg.style.backgroundSize = "cover";
            this.bg.style.backgroundRepeat = "no-repeat";
        } else {
            this.bg.style.backgroundImage = "none";
            this.bg.style.backgroundColor = slide.color || DT_DEFAULT_COLOR;
        }

        // OVERLAY
        const overlayOpacity = Math.min(
            1,
            Math.max(0, Number(slide.overlay) || 0)
        );

        this.overlay.style.background = overlayOpacity > 0
            ? `rgba(0, 0, 0, ${overlayOpacity})`
            : "transparent";

        // RESET STYLE COPY DARI SLIDE SEBELUMNYA
        this.copy.style.display = "";
        this.copy.style.flexDirection = "";
        this.copy.style.alignItems = "";
        this.copy.style.justifyContent = "";
        this.copy.style.textAlign = "";
        this.copy.style.position = "";
        this.copy.style.inset = "";
        this.copy.style.width = "";
        this.copy.style.height = "";
        this.copy.style.padding = "";
        this.copy.style.margin = "";
        this.copy.style.gap = "";
        this.copy.style.zIndex = "";

        this.tile.style.backgroundColor = "";

        // ICON
        const showIcon =
            mode !== "image" &&
            typeof slide.icon === "string" &&
            slide.icon.trim() !== "";

        this.iconWrap.replaceChildren();

        if (showIcon) {
            const iconElement = document.createElement("i");

            iconElement.className = slide.icon.trim();
            iconElement.style.fontSize = slide.iconSize || DT_DEFAULT_ICON_SIZE;
            iconElement.style.color = slide.iconColor || "#ffffff";
            iconElement.style.lineHeight = "1";
            iconElement.style.display = "inline-block";

            this.iconWrap.appendChild(iconElement);

            this.iconWrap.style.display = "flex";
            this.iconWrap.style.alignItems = "center";
            this.iconWrap.style.justifyContent =
                mode === "icon" || align === "center" ? "center" : "flex-start";
            this.iconWrap.style.width = "100%";
            this.iconWrap.style.flexShrink = "0";

            if (
                window.FontAwesome?.dom &&
                typeof window.FontAwesome.dom.i2svg === "function"
            ) {
                window.FontAwesome.dom.i2svg({ node: this.iconWrap });
            }
        } else {
            this.iconWrap.style.display = "none";
            this.iconWrap.style.width = "";
            this.iconWrap.style.flexShrink = "";
            this.iconWrap.style.alignItems = "";
            this.iconWrap.style.justifyContent = "";
        }

        // MODE IMAGE
        if (mode === "image") {
            this.tag.textContent = "";
            this.tag.style.display = "none";

            this.text.textContent = "";
            this.text.style.display = "none";

            return;
        }

        // MODE ICON
        if (mode === "icon") {
            this.copy.style.display = "flex";
            this.copy.style.flexDirection = "column";
            this.copy.style.alignItems = "center";
            this.copy.style.justifyContent = "center";
            this.copy.style.textAlign = "center";
            this.copy.style.position = "absolute";
            this.copy.style.inset = "0";
            this.copy.style.width = "100%";
            this.copy.style.height = "100%";
            this.copy.style.padding = "0";
            this.copy.style.margin = "0";
            this.copy.style.gap = "0";
            this.copy.style.zIndex = "3";

            this.tag.textContent = "";
            this.tag.style.display = "none";

            this.text.textContent = "";
            this.text.style.display = "none";

            this.tile.style.backgroundColor = slide.color || DT_DEFAULT_COLOR;

            return;
        }

        // MODE CONTENT
        const showTag = mode === "content" && Boolean(slide.tag);
        const showText = mode === "content" && Boolean(slide.text);

        this.tag.textContent = showTag ? slide.tag : "";
        this.tag.style.display = showTag ? "" : "none";

        this.text.textContent = showText ? slide.text : "";
        this.text.style.display = showText ? "" : "none";

        if (mode === "content" && align === "center") {
            this.copy.style.textAlign = "center";
            this.tag.style.textAlign = "center";
            this.text.style.textAlign = "center";
        } else {
            this.copy.style.textAlign = "";
            this.tag.style.textAlign = "";
            this.text.style.textAlign = "";
        }
    }

    next() {
        if (this.slides.length < 2) return;

        const nextIndex = (this.index + 1) % this.slides.length;
        const nextSlide = this.slides[nextIndex];

        this.index = nextIndex;

        clearTimeout(this.transitionTimer);
        clearTimeout(this.animationTimer);

        this.copy.classList.remove("tile-animate-in", "tile-animate-out");
        this.copy.classList.add("tile-animate-out");

        this.transitionTimer = setTimeout(() => {
            this.render(nextSlide);

            this.copy.classList.remove("tile-animate-out");
            this.copy.classList.add("tile-animate-in");

            this.animationTimer = setTimeout(() => {
                this.copy.classList.remove("tile-animate-in");
            }, 400);
        }, DT_TRANSITION_MS);
    }
}

// PROFILE
const dataProfile = [
    {
        mode: "image",
        image: "assets/img/profile2.jpg",
    },
    {
        mode: "content",
        color: "#00a4ef",
        tag: "Hello",
        text: "My name is Naufal Fahmi",
        caption: "Profile"
    }
];

// MAPS
const dataMaps = [
    {
        mode: "icon",
        color: "#008ed0",
        icon: "fa-solid fa-map",
        iconSize: "42px",
        iconColor: "#ffffff",
        caption: "Maps"
    },
    {
        mode: "image",
        image: "assets/img/tile/map.jpg",
    },
    {
        mode: "content",
        image: "assets/img/tile/map.jpg",
        tag: "Indonesia",
        text: "Jakarta Pusat"
    }
];

// CREATION
const dataCreation = [
    {
        mode: "icon",
        icon: "fa-solid fa-shop",
        iconSize: "38px",
        caption: "Project Showcases"
    },
    {
        mode: "content",
        image: "assets/img/tile/hap1.png"
    },
    {
        mode: "content",
        image: "assets/img/tile/evr1.png"
    }
];

// HAPPAY THUMBNAIL
const dataHptb = [
    {
        mode: "icon",
        color: "#d045c1",
        icon: "fa-solid fa-bars-staggered",
        iconSize: "38px",
        caption: "Happay"
    },
    {
        mode: "content",
        color: "#d045c1",
        icon: "fa-solid fa-bars-staggered",
        iconSize: "38px",
        tag: "POS Systems"
    }
];

// EVERYDAY THUMBNAIL
const dataEvtb = [
    {
        mode: "icon",
        color: "#291C0F",
        icon: "fa-brands fa-accusoft",
        iconSize: "38px",
        caption: "Everyday"
    },
    {
        mode: "content",
        color: "#291C0F",
        icon: "fa-brands fa-accusoft",
        iconSize: "38px",
        tag: "Productivity Tools"
    }
];

// XXI
const dataXxi = [
    {
        mode: "icon",
        color: "#008ed0",
        icon: "fa-brands fa-accusoft",
        iconSize: "42px",
        iconColor: "#ffffff",
        caption: "Ticketing"
    },
    {
        mode: "content",
        color: "#008ed0",
        icon: "fa-brands fa-accusoft",
        iconSize: "42px",
        iconColor: "#ffffff",
        tag: "Booking Your Seats Easily",
        text: "Community Event"
    }
];

// SQLTB
const dataSqltb = [
    {
        mode: "image",
        image: "assets/img/tile/sqltb1.png"
    },
    {
        mode: "image",
        image: "assets/img/tile/sqltb2.png"
    }
];

// SERVERTB
const dataServertb = [
    {
        mode: "image",
        image: "assets/img/tile/ngrok.png"
    },
    {
        mode: "image",
        image: "assets/img/tile/vercel.png"
    }
];

// PRODUCTDB
const dataProdtb = [
    {
        mode: "image",
        image: "assets/img/tile/php.png"
    },
    {
        mode: "image",
        image: "assets/img/tile/laravel.png"
    }
];

// OFFICE TOOLS
const dataOfficetools = [
    {
        mode: "image",
        image: "assets/img/tile/ms.png",
        color: "#ffffff"
    },
    {
        mode: "image",
        image: "assets/img/tile/g.png",
        color: "#ffffff"
    }
];

// EXPERIENCE
const dataExperience = [
    {
        mode: "content",
        image: "assets/img/tile/1m-square.png",
        overlay: 0.48,
        tag: "Mitra 2000 (2023 - 2026)",
        text: "System Analyst",
        caption: "Experience"
    },
    {
        mode: "content",
        image: "assets/img/tile/1m-square.png",
        overlay: 0.48,
        tag: "Mitra 2000 (2022 - 2023)",
        text: "Product Data Standardization & PIM Migration",
        caption: "Experience"
    },
    {
        mode: "content",
        image: "assets/img/tile/2s-square.png",
        overlay: 0.48,
        tag: "Shopee Express (2021 - 2022)",
        text: "Geolocation Data & Internal Mapping",
        caption: "Experience"
    },
    {
        mode: "content",
        image: "assets/img/tile/3i-square.png",
        overlay: 0.48,
        tag: "Idemitsu (2020 - 2021)",
        text: "ERP Migration",
        caption: "Experience"
    }
];

new DynamicTile("tile-profile", dataProfile, 10500);
new DynamicTile("tile-maps", dataMaps, 15000);
new DynamicTile("tile-experience", dataExperience, 9500);

new DynamicTile("tile-creation", dataCreation, 10500);
new DynamicTile("tile-hptb", dataHptb, 15000);
new DynamicTile("tile-evtb", dataEvtb, 11000);
new DynamicTile("tile-xxi", dataXxi, 16000);

new DynamicTile("tile-sqltb", dataSqltb, 1850);
new DynamicTile("tile-servertb", dataServertb, 2050);
new DynamicTile("tile-prodtb", dataProdtb, 2250);
new DynamicTile("tile-officetools", dataOfficetools, 2450);


function openCalendar() {
    window.location.href = "app-calendar.php";
}

function openCertificate() {
    window.location.href = "app-certificate.php";
}

function openExperience() {
    window.location.href = "app-experience.php";
}

function openEducation() {
    window.location.href = "app-education.php";
}

function openAbout() {
    window.location.href = "app-about.php";
}

function openProfile() {
    window.location.href = "app-profile.php";
}

function openHappay() {
    window.location.href = "app-happay.php";
}

function openEveryday() {
    window.location.href = "app-everyday.php";
}

function openShowcase() {
    window.location.href = "app-showcase.php";
}

function openMap() {
    window.location.href = "app-map.php";
}

</script>

</body>
</html>