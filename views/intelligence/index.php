<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intelligence Engine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-green-400 min-h-screen">

<div class="max-w-5xl mx-auto p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl font-bold">🧠 Intelligence Dashboard</h1>
        <a href="/" class="px-4 py-2 rounded-lg border border-green-500/30 hover:bg-green-500 hover:text-black transition">
            ← Back to Portal
        </a>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl mb-2">Productivity Score</h2>
            <p class="text-4xl font-bold text-green-500">
                <?= $insights['score'] ?>%
            </p>
        </div>

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl mb-2">Burnout Risk</h2>
            <p class="text-2xl font-bold text-yellow-400">
                <?= $insights['burnout'] ?>
            </p>
        </div>

        <div class="bg-gray-900 p-6 rounded-xl border border-green-500/20">
            <h2 class="text-xl mb-2">System Advice</h2>
            <p class="text-cyan-400">
                <?= $insights['message'] ?>
            </p>
        </div>

    </div>

</div>

</body>
</html>
