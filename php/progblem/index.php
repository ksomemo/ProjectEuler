<?php
if (!isset($argv[1])) {
	die('Input Problem Id.' . PHP_EOL);
}

$problemId = $argv[1];
$file      = __DIR__ . DIRECTORY_SEPARATOR .'p'. str_pad($problemId, 3, '0', STR_PAD_LEFT) . '.php';

if (!is_readable($file)) {
	die('Not Found Problem Id File.' . PHP_EOL);
}

require_once __DIR__ . '/vendor/autoload.php';

require_once $file;
