<?php

namespace Psalm\Progress;

abstract class Progress
{
    /**
     * @return void
     */
    public function setErrorReporting()
    {
        error_reporting(E_ERROR);
    }

    /**
     * @return void
     */
    public function debug(string $message)
    {
    }

    /**
     * @return void
     */
    public function startScanningFiles()
    {
        // FIXME: Should be stderr
        echo 'Scanning files...' . "\n";
    }

    /**
     * @return void
     */
    public function startAnalyzingFiles()
    {
        // FIXME: Should be stderr
        echo 'Analyzing files...' . "\n";
    }
}
