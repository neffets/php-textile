<?php

namespace Netcarver\Textile\Test;

ini_set('memory_limit', '512M');

error_reporting(E_ALL);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new \Exception($errstr . ' in ' . $errfile . ' on line ' . $errline);
});

include dirname(__DIR__) . '/classTextile.php';
