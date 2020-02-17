<?php
// phpcs:ignoreFile

$searchFor = '/source/';
$basePath = substr(__FILE__, 0, strpos(__FILE__, $searchFor) + strlen($searchFor));

define('OX_BASE_PATH', getenv('OXID_PATH') ?: $basePath);
require OX_BASE_PATH . '/bootstrap.php';
define('OXID_PHP_UNIT', true);
