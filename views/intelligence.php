<?php ob_start(); ?>

<div class="header">🧠 Intelligence Dashboard</div>

<div class="grid">
    <div class="card">
        <h3>Productivity Score</h3>
        <div class="big">0%</div>
    </div>

    <div class="card">
        <h3>Burnout Risk</h3>
        <div class="status">
            <div class="dot"></div> LOW
        </div>
    </div>

    <div class="card">
        <h3>System Advice</h3>
        <p>Excellent rhythm. Keep it steady.</p>
    </div>
</div>

<?php
$content = ob_get_clean();
$title = "Intelligence Engine";
require __DIR__ . '/layouts/portal.php';
