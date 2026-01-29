<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Monitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-green-400 min-h-screen">

<div class="max-w-5xl mx-auto p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl font-bold">⚡ Event Monitor Core</h1>
        <a href="/" class="px-4 py-2 rounded-lg border border-green-500/30 hover:bg-green-500 hover:text-black transition">
            ← Back to Portal
        </a>
    </div>

    <!-- Log Panel -->
    <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20 font-mono text-sm space-y-2">

        <?php if (!$events): ?>
            <p class="text-gray-500">No events recorded.</p>
        <?php else: ?>
            <?php foreach ($events as $event): ?>
                <div class="flex gap-3">
                    <span class="text-gray-500">[<?= $event->time ?>]</span>
                    <span class="text-green-500 font-bold"><?= $event->event ?></span>
                    <span class="text-cyan-400"><?= json_encode($event->data) ?></span>
                </div>
            <?php endforeach ?>
        <?php endif; ?>

    </div>

</div>

</body>
</html>
