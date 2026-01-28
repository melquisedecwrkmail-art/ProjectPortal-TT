<h1 style="font-size:2rem">🧠 Intelligence Dashboard</h1>

<div style="background:#0f172a;color:#e5e7eb;padding:20px;border-radius:12px;width:420px">

    <h3>Productivity Score</h3>
    <div style="font-size:3rem;color:#22c55e">
        <?= $insights['score'] ?>%
    </div>

    <h3>Burnout Risk</h3>
    <div style="font-size:1.4rem">
        <?= $insights['burnout'] ?>
    </div>

    <h3>System Advice</h3>
    <div style="margin-top:10px;color:#38bdf8">
        <?= $insights['message'] ?>
    </div>

</div>
