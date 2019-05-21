<?php

namespace Psalm\Internal\Fork;

class ForkTerminationMessage implements ForkMessage
{
    /**
     * @var array
     */
    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
