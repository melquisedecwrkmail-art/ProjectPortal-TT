<?php ob_start(); ?>

<div class="header">⚡ Event Monitor Core</div>

<div class="card">
    <h3>Live Event Stream</h3>
    <pre>
[BOOT] System Initialized
[EVENT] XPRewarded
[EVENT] LevelUp
[EVENT] BadgeUnlocked
    </pre>
</div>

<?php
$content = ob_get_clean();
$title = "Event Monitor";
require __DIR__ . '/layouts/portal.php';
