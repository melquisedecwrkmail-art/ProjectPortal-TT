<?php

/**
 * INTELLIGENCE ENGINE
 * -------------------
 * Analyzes productivity behavior and system events.
 */

class IntelligenceEngine
{
    private string $logFile;

    public function __construct()
    {
        $this->logFile = __DIR__ . '/../../storage/events.log';
    }

    /**
     * Reads recent events
     */
    public function getEvents(int $limit = 100): array
    {
        if (!file_exists($this->logFile)) return [];

        $lines = array_reverse(file($this->logFile));
        $events = [];

        foreach (array_slice($lines, 0, $limit) as $line) {
            $events[] = json_decode($line, true);
        }

        return $events;
    }

    /**
     * Calculates productivity score
     */
    public function productivityScore(): int
    {
        $events = $this->getEvents(100);

        $score = 0;

        foreach ($events as $event) {
            match ($event['event']) {
                'TaskCompleted' => $score += 5,
                'XPRewarded' => $score += 3,
                'LevelUp' => $score += 20,
                default => null
            };
        }

        return min(100, $score);
    }

    /**
     * Burnout detection logic
     */
    public function burnoutRisk(): string
    {
        $events = $this->getEvents(20);
        $taskCount = count(array_filter($events, fn($e) => $e['event'] === 'TaskCompleted'));

        if ($taskCount > 15) return "🔥 EXTREME";
        if ($taskCount > 10) return "⚠ HIGH";
        if ($taskCount > 5) return "🟡 MODERATE";

        return "🟢 LOW";
    }

    /**
     * System insight generation
     */
    public function insights(): array
    {
        return [
            'score' => $this->productivityScore(),
            'burnout' => $this->burnoutRisk(),
            'message' => $this->generateAdvice()
        ];
    }

    private function generateAdvice(): string
    {
        return match ($this->burnoutRisk()) {
            "🔥 EXTREME" => "Take a break. You are overloading yourself.",
            "⚠ HIGH" => "Slow down. Balance your workload.",
            "🟡 MODERATE" => "Good pace. Maintain consistency.",
            default => "Excellent rhythm. Keep it steady."
        };
    }
}
