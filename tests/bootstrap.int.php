<?php

// load composer generated autoloading file
require_once __DIR__.'/../vendor/autoload.php';

\Phake::setClient(\Phake::CLIENT_PHPUNIT);

// loading mocks
require_once __DIR__ . '/integration/PSRedis/Redis_Integration_TestCase.php';