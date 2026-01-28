<h1 style="font-size:2rem;margin-bottom:10px">⚡ Event Monitor Dashboard</h1>

<div style="font-family:monospace;background:#111;color:#0f0;padding:15px;border-radius:8px">

<?php foreach ($events as $event): ?>
    <div style="margin-bottom:6px">
        [<?= $event->time ?>] 
        <strong><?= $event->event ?></strong> 
        → <?= json_encode($event->data) ?>
    </div>
<?php endforeach ?>

</div>
