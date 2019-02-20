<?php

require_once 'Filesystem.php';
require_once 'GlobalData.php';

$gd = new \TestCodacy\GlobalData($_GET, $_POST, $_COOKIE, $_SERVER);
//@codingStandardsIgnoreStart
\var_dump($gd->getServer());
//@codingStandardsIgnoreEnd

\var_dump(\file_exists('a.txt'));
