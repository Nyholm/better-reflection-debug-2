<?php

declare(strict_types=1);

namespace Debug;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Foobar
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger = null)
    {
        if ($logger === null) {
            $logger = new NullLogger();
        }
        $this->logger = $logger;
    }
}