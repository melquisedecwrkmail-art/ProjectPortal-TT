<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Portal System' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Portal UI Styling -->
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: radial-gradient(circle at top, #0f172a, #020617);
            color: #e5e7eb;
        }

        .portal {
            display: grid;
            grid-template-columns: 260px 1fr;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(180deg, #020617, #020617);
            border-right: 1px solid rgba(255,255,255,.05);
            padding: 24px;
        }

        .logo {
            font-size: 22px;
            font-weight: 700;
            color: #22c55e;
            margin-bottom: 30px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 8px;
            border-radius: 10px;
            text-decoration: none;
            color: #9ca3af;
            transition: .25s;
        }

        .menu a:hover {
            background: rgba(34,197,94,.15);
            color: #22c55e;
        }

        /* Main content */
        .main {
            padding: 30px;
        }

        .header {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 24px;
        }

        /* Cards */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .card {
            background: linear-gradient(145deg, rgba(255,255,255,.03), rgba(255,255,255,.01));
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 18px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,.35);
        }

        .card h3 {
            margin: 0 0 10px;
            color: #22c55e;
        }

        .big {
            font-size: 36px;
            font-weight: 800;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #22c55e;
        }
    </style>
</head>
<body>

<div class="portal">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">⚡ OOP PORTAL</div>

        <nav class="menu">
            <a href="/">🏠 Portal</a>
            <a href="/intelligence">🧠 Intelligence</a>
            <a href="/events">⚡ Event Monitor</a>
            <a href="/gamification">🎮 Gamification</a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main">
        <?= $content ?>
    </main>

</div>

</body>
</html>
