<?php

namespace Psalm\Progress;

class DebugProgress extends Progress
{
    public function setErrorReporting()
    {
        error_reporting(E_ALL);
    }

    public function debug(string $message)
    {
        fwrite(STDERR, $message);
    }
}
