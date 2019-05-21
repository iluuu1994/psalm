<?php

namespace Psalm\Internal\Fork;

class ForkTaskDoneMessage implements ForkMessage
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
