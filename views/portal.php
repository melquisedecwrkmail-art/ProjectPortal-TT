<?php ob_start(); ?>

<div class="header">🚀 Intelligence Portal</div>

<div class="grid">
    <div class="card">
        <h3>🧠 Intelligence Engine</h3>
        <p>Real-time productivity analysis</p>
    </div>

    <div class="card">
        <h3>⚡ Event Monitor</h3>
        <p>System activity & debug stream</p>
    </div>

    <div class="card">
        <h3>🎮 Gamification Engine</h3>
        <p>XP, levels, streaks, achievements</p>
    </div>

    <div class="card">
        <h3>📊 Productivity Analytics</h3>
        <p>Deep performance insights</p>
    </div>
</div>

<?php
$content = ob_get_clean();
$title = "Portal";
require __DIR__ . '/layouts/portal.php';
