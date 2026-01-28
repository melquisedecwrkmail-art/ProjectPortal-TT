<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SkyFrivio System Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-black via-gray-900 to-black text-green-400 min-h-screen">

<div class="max-w-6xl mx-auto py-12 px-6">

    <div class="text-center mb-10">
        <h1 class="text-5xl font-extrabold tracking-widest">SYSTEM PORTAL</h1>
        <p class="text-green-300 mt-3">Smart Productivity Control Hub</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <?php
        $modules = [
            ['title' => 'Analytics Dashboard', 'icon' => '📊', 'desc' => 'Track productivity, trends & performance', 'url' => '/analytics'],
            ['title' => 'Smart Priority System', 'icon' => '🤖', 'desc' => 'AI-like task prioritization engine', 'url' => '/smart'],
            ['title' => 'Gamification System', 'icon' => '🎮', 'desc' => 'XP, levels, streaks & achievements', 'url' => '/gamification'],
            ['title' => 'Event-Driven Engine', 'icon' => '⚡', 'desc' => 'Core automation & system intelligence', 'url' => '/events']
        ];
        ?>

        <?php foreach ($modules as $mod): ?>
            <a href="<?= $mod['url'] ?>" class="group bg-black/40 border border-green-500/20 rounded-xl p-6 hover:border-green-400 hover:shadow-[0_0_25px_rgba(34,197,94,0.3)] transition">
                <div class="text-5xl"><?= $mod['icon'] ?></div>
                <h2 class="text-2xl font-bold mt-3 group-hover:text-green-300">
                    <?= $mod['title'] ?>
                </h2>
                <p class="text-green-500/70 mt-2"><?= $mod['desc'] ?></p>
            </a>
        <?php endforeach; ?>

    </div>

</div>

</body>
</html>
