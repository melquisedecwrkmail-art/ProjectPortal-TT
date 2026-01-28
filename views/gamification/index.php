<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamification Engine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-green-400 min-h-screen">

<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-6">🎮 Gamification Engine</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl">XP</h2>
            <p class="text-3xl font-bold"><?= $stats->xp ?></p>
        </div>

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl">Level</h2>
            <p class="text-3xl font-bold"><?= $stats->level ?></p>
        </div>

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl">Streak</h2>
            <p class="text-3xl font-bold"><?= $stats->streak ?> days</p>
        </div>

    </div>

    <div class="mt-8 bg-gray-900 p-6 rounded-xl border border-green-500/20">
        <h2 class="text-xl mb-4">🏆 Badges</h2>

        <?php if (!$stats->badges): ?>
            <p class="text-gray-500">No badges yet.</p>
        <?php else: ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ($stats->badges as $badge): ?>
                    <span class="bg-green-600 text-black px-3 py-1 rounded-full">
                        <?= $badge ?>
                    </span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

</div>

</body>
</html>
