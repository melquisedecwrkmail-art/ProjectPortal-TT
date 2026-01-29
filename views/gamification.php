<?php ob_start(); ?>

<div class="header">🎮 Gamification Engine</div>

<div class="grid">
    <div class="card">
        <h3>XP</h3>
        <div class="big"><?= $stats->xp ?? 0 ?></div>
    </div>

    <div class="card">
        <h3>Level</h3>
        <div class="big"><?= $stats->level ?? 1 ?></div>
    </div>

    <div class="card">
        <h3>Streak</h3>
        <div class="big"><?= $stats->streak ?? 0 ?> days</div>
    </div>
</div>

<div class="card" style="margin-top:20px">
    <h3>🏆 Badges</h3>
    <?php foreach (($stats->badges ?? []) as $badge): ?>
        <span style="
            display:inline-block;
            background:#22c55e;
            color:#022c22;
            padding:6px 12px;
            border-radius:14px;
            margin:4px;
            font-weight:600;
        "><?= $badge ?></span>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
$title = "Gamification";
require __DIR__ . '/layouts/portal.php';
