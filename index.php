<?php

require_once 'Filesystem.php';
require_once 'GlobalData.php';

$gd = new \TestCodacy\GlobalData($_GET, $_POST, $_COOKIE, $_SERVER);
var_dump($gd->getServer());

var_dump(file_exists('a.txt'));
