<?php

/**
 * EVENT: XP Rewarded
 * ------------------
 * Fired when XP is added.
 */

class XPRewarded
{
    public function __construct(
        public int $xp
    ) {}
}
