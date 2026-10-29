<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c66aa74d08.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            user-select: none;
        }

        html, body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #1d1d1d;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .app-bar {
            background-color: #5b53f5; 
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
            border-bottom: 4px solid #5b53f5;   
        }

        .header-item:hover {
            color: #cccccc;
        }

        .app-content {
            flex-grow: 1;
            padding: 10px 40px 30px 40px;
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

        .calendar-header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            flex-shrink: 0;
        }

        .calendar-title-display {
            font-size: 22px;
            font-weight: 300;
            color: #5b53f5;
        }

        .cal-nav-btns {
            display: flex;
            gap: 8px;
        }

        .cal-btn {
            background: #2d2d2d;
            border: 2px solid transparent;
            color: white;
            padding: 5px 14px;
            cursor: pointer;
            font-size: 13px;
            transition: background 0.2s, border-color 0.2s;
        }

        .cal-btn:hover {
            background: #3d3d3d;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .month-view-wrapper {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .calendar-grid-month-header {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 6px;
            flex-shrink: 0;
        }

        .cal-day-name {
            text-align: center;
            font-weight: 400;
            color: #888;
            font-size: 13px;
            padding-bottom: 6px;
        }

        .calendar-grid-month {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(5, 1fr);
            gap: 6px;
            flex-grow: 1;
        }

        .cal-cell {
            background-color: #262626;
            padding: 8px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: background 0.2s, border-color 0.2s;
            border: 2px solid transparent;
            height: 100%;
        }

        .cal-cell:hover {
            background-color: #333333;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .cal-cell.empty {
            background-color: transparent;
            cursor: default;
            border: none;
        }

        .cal-cell.today {
            background-color: #5b53f5;
            color: #ffffff;
            border-color: #ffffff;
        }

        .date-num {
            font-size: 16px;
            font-weight: 300;
        }

        .date-event {
            font-size: 10px;
            background: rgba(0, 0, 0, 0.2);
            padding: 2px 4px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .today .date-event {
            background: rgba(0, 0, 0, 0.15);
        }

        .calendar-grid-week {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            flex-grow: 1;
        }

        .week-column {
            background-color: #262626;
            padding: 15px;
            display: flex;
            flex-direction: column;
            border: 2px solid transparent;
            transition: background 0.2s, border-color 0.2s;
            height: 100%;
        }

        .week-column:hover {
            background-color: #2f2f2f;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .week-column.today {
            background-color: #5b53f5;
            color: #ffffff;
            border-color: #ffffff;
        }

        .week-col-header {
            font-size: 13px;
            color: #888;
            margin-bottom: 4px;
            text-transform: uppercase;
        }

        .week-column.today .week-col-header {
            color: rgba(255, 255, 255, 0.8);
        }

        .week-col-date {
            font-size: 24px;
            font-weight: 300;
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .week-events-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .week-event-card {
            background: rgba(0, 0, 0, 0.25);
            padding: 8px 10px;
            font-size: 11px;
            border-left: 3px solid #ffffff;
        }

        .calendar-grid-year {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(3, 1fr);
            gap: 12px;
            flex-grow: 1;
        }

        .mini-month-card {
            background-color: #262626;
            padding: 10px 12px;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: border-color 0.2s;
            height: 100%;
        }

        .mini-month-card:hover {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .mini-month-title {
            font-size: 14px;
            font-weight: 400;
            color: #5b53f5;
            margin-bottom: 4px;
        }

        .mini-days-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 2px;
            text-align: center;
            font-size: 10px;
            flex-grow: 1;
        }

        .mini-day {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
        }

        .mini-day.header {
            color: #666;
            font-weight: bold;
        }

        .mini-day.today {
            background-color: #5b53f5;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- 1. TOP BLACK BAR -->
    <header class="app-bar">
        <div class="app-bar-left">
            <div class="app-icon"><i class="fa-solid fa-calendar"></i></div>
            <span class="app-title">Calendar</span>
        </div>
        <div class="app-bar-right">
            <button class="close-btn" onclick="backToStartMenu()" title="Back to Start Menu">✕</button>
        </div>
    </header>

    <!-- 2. SUB-HEADERS (WEEKLY, MONTHLY, YEARLY) -->
    <nav class="app-headers">
        <div class="header-item" onclick="switchTab(0)">Weekly</div>
        <div class="header-item active" onclick="switchTab(1)">Monthly</div>
        <div class="header-item" onclick="switchTab(2)">Yearly</div>
    </nav>

    <!-- 3. CONTENT AREA (FULLSCREEN STRETCH) -->
    <main class="app-content">
        
        <!-- Tab 0: Weekly View -->
        <section class="content-section" id="section-0">
            <div class="calendar-header-controls">
                <div class="calendar-title-display" id="weekRangeDisplay">Week of October 11 - 17, 2026</div>
                <div class="cal-nav-btns">
                    <button class="cal-btn" onclick="changeWeek(-1)">‹ Prev</button>
                    <button class="cal-btn" onclick="goToCurrentWeek()">This Week</button>
                    <button class="cal-btn" onclick="changeWeek(1)">Next ›</button>
                </div>
            </div>
            <div class="calendar-grid-week" id="weeklyDaysGrid">
                <!-- Generated via JS -->
            </div>
        </section>

        <!-- Tab 1: Monthly View -->
        <section class="content-section active" id="section-1">
            <div class="calendar-header-controls">
                <div class="calendar-title-display" id="monthYearDisplay">October 2026</div>
                <div class="cal-nav-btns">
                    <button class="cal-btn" onclick="changeMonth(-1)">‹ Prev</button>
                    <button class="cal-btn" onclick="goToCurrentMonth()">Today</button>
                    <button class="cal-btn" onclick="changeMonth(1)">Next ›</button>
                </div>
            </div>
            <div class="month-view-wrapper">
                <div class="calendar-grid-month-header">
                    <div class="cal-day-name">Sun</div>
                    <div class="cal-day-name">Mon</div>
                    <div class="cal-day-name">Tue</div>
                    <div class="cal-day-name">Wed</div>
                    <div class="cal-day-name">Thu</div>
                    <div class="cal-day-name">Fri</div>
                    <div class="cal-day-name">Sat</div>
                </div>
                <div class="calendar-grid-month" id="calendarDaysGrid" style="margin-top: 4px;">
                    <!-- Generated via JS -->
                </div>
            </div>
        </section>

        <!-- Tab 2: Yearly View -->
        <section class="content-section" id="section-2">
            <div class="calendar-header-controls">
                <div class="calendar-title-display" id="yearDisplay">2026</div>
                <div class="cal-nav-btns">
                    <button class="cal-btn" onclick="changeYear(-1)">‹ Prev</button>
                    <button class="cal-btn" onclick="goToCurrentYear()">This Year</button>
                    <button class="cal-btn" onclick="changeYear(1)">Next ›</button>
                </div>
            </div>
            <div class="calendar-grid-year" id="yearlyMonthsGrid">
                <!-- Generated via JS -->
            </div>
        </section>

    </main>

    <script>
        let currentLiveDate = new Date();

        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const dayNamesShort = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

        const eventsData = {
            "1999-03-16": "My 1st Day",
            "2026-06-30": "Farewell",
            "2026-10-28": ""
        };

        // --- 1. RENDER MONTHLY VIEW ---
        function renderMonthlyView() {
            const year = currentLiveDate.getFullYear();
            const month = currentLiveDate.getMonth();

            document.getElementById('monthYearDisplay').innerText = `${monthNames[month]} ${year}`;

            const grid = document.getElementById('calendarDaysGrid');
            grid.innerHTML = '';

            const firstDayIndex = new Date(year, month, 1).getDay();
            const totalDays = new Date(year, month + 1, 0).getDate();
            const todayReal = new Date();

            for (let i = 0; i < firstDayIndex; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.className = 'cal-cell empty';
                grid.appendChild(emptyCell);
            }

            for (let day = 1; day <= totalDays; day++) {
                const cell = document.createElement('div');
                cell.className = 'cal-cell';

                const mFormatted = String(month + 1).padStart(2, '0');
                const dFormatted = String(day).padStart(2, '0');
                const dateKey = `${year}-${mFormatted}-${dFormatted}`;

                if (year === todayReal.getFullYear() && month === todayReal.getMonth() && day === todayReal.getDate()) {
                    cell.classList.add('today');
                }

                let htmlContent = `<span class="date-num">${day}</span>`;
                if (eventsData[dateKey]) {
                    htmlContent += `<div class="date-event">${eventsData[dateKey]}</div>`;
                }

                cell.innerHTML = htmlContent;
                grid.appendChild(cell);
            }
        }

        function changeMonth(direction) {
            currentLiveDate.setMonth(currentLiveDate.getMonth() + direction);
            renderMonthlyView();
        }

        function goToCurrentMonth() {
            currentLiveDate = new Date();
            renderMonthlyView();
        }

        // --- 2. RENDER WEEKLY VIEW ---
        function renderWeeklyView() {
            const grid = document.getElementById('weeklyDaysGrid');
            grid.innerHTML = '';

            let curr = new Date(currentLiveDate);
            let dayOfWeek = curr.getDay();
            let startOfWeek = new Date(curr);
            startOfWeek.setDate(curr.getDate() - dayOfWeek);

            let endOfWeek = new Date(startOfWeek);
            endOfWeek.setDate(startOfWeek.getDate() + 6);

            document.getElementById('weekRangeDisplay').innerText = `Week of ${monthNames[startOfWeek.getMonth()]} ${startOfWeek.getDate()} - ${endOfWeek.getDate()}, ${endOfWeek.getFullYear()}`;

            const todayReal = new Date();

            for (let i = 0; i < 7; i++) {
                let d = new Date(startOfWeek);
                d.setDate(startOfWeek.getDate() + i);

                const col = document.createElement('div');
                col.className = 'week-column';

                const year = d.getFullYear();
                const month = d.getMonth();
                const day = d.getDate();

                if (year === todayReal.getFullYear() && month === todayReal.getMonth() && day === todayReal.getDate()) {
                    col.classList.add('today');
                }

                const mFormatted = String(month + 1).padStart(2, '0');
                const dFormatted = String(day).padStart(2, '0');
                const dateKey = `${year}-${mFormatted}-${dFormatted}`;

                let eventHtml = '';
                if (eventsData[dateKey]) {
                    eventHtml = `<div class="week-event-card"><strong>${eventsData[dateKey]}</strong><br><span style="font-size:9px; opacity:0.8;">All Day</span></div>`;
                }

                col.innerHTML = `
                    <div class="week-col-header">${dayNamesShort[i]}</div>
                    <div class="week-col-date">${day}</div>
                    <div class="week-events-list">${eventHtml}</div>
                `;

                grid.appendChild(col);
            }
        }

        function changeWeek(direction) {
            currentLiveDate.setDate(currentLiveDate.getDate() + (direction * 7));
            renderWeeklyView();
        }

        function goToCurrentWeek() {
            currentLiveDate = new Date();
            renderWeeklyView();
        }

        // --- 3. RENDER YEARLY VIEW ---
        function renderYearlyView() {
            const year = currentLiveDate.getFullYear();
            document.getElementById('yearDisplay').innerText = year;

            const grid = document.getElementById('yearlyMonthsGrid');
            grid.innerHTML = '';

            const todayReal = new Date();

            for (let m = 0; m < 12; m++) {
                const card = document.createElement('div');
                card.className = 'mini-month-card';

                let daysGridHtml = `<div class="mini-day header">S</div><div class="mini-day header">M</div><div class="mini-day header">T</div><div class="mini-day header">W</div><div class="mini-day header">T</div><div class="mini-day header">F</div><div class="mini-day header">S</div>`;

                const firstDayIndex = new Date(year, m, 1).getDay();
                const totalDays = new Date(year, m + 1, 0).getDate();

                for (let i = 0; i < firstDayIndex; i++) {
                    daysGridHtml += `<div class="mini-day"></div>`;
                }

                for (let d = 1; d <= totalDays; d++) {
                    let isToday = (year === todayReal.getFullYear() && m === todayReal.getMonth() && d === todayReal.getDate());
                    let todayClass = isToday ? ' today' : '';
                    daysGridHtml += `<div class="mini-day${todayClass}">${d}</div>`;
                }

                card.innerHTML = `
                    <div class="mini-month-title">${monthNames[m]}</div>
                    <div class="mini-days-grid">${daysGridHtml}</div>
                `;

                grid.appendChild(card);
            }
        }

        function changeYear(direction) {
            currentLiveDate.setFullYear(currentLiveDate.getFullYear() + direction);
            renderYearlyView();
        }

        function goToCurrentYear() {
            currentLiveDate = new Date();
            renderYearlyView();
        }

        // --- SWITCH TAB ---
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
                    if (index === 0) renderWeeklyView();
                    if (index === 1) renderMonthlyView();
                    if (index === 2) renderYearlyView();
                } else {
                    s.classList.remove('active');
                }
            });
        }

        function backToStartMenu() {
            window.location.href = "index.php";
        }

        // Inisialisasi awal
        renderMonthlyView();
    </script>
</body>
</html>