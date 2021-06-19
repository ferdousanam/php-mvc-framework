<?php

$application_folder = 'app';
$config_folder = 'config';

define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', $config_folder . DIRECTORY_SEPARATOR);

require_once __DIR__ . '/helpers/Helper.php';
require_once __DIR__ . '/autoload.php';

new \System\Core\Core();
