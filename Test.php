<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL | E_STRICT);

require 'RainbowColors.php';

function boolToStr($b)
{
	return ($b ? 'TRUE' : 'FALSE');
}

echo boolToStr(RainbowColors::$RED === RainbowColors::$RED);