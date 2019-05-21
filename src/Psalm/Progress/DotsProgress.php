<?php

namespace Psalm\Progress;

class DotsProgress extends Progress
{
    public function endScanningFile(string $filePath)
    {
        fwrite(STDERR, '.');
    }
}
