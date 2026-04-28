<?php

require_once __DIR__ . '/translator.php';

$allowed = ['en', 'de', 'ru'];
$lang = $_GET['lang'] ?? $_COOKIE['cwlang'] ?? 'en';
if (!in_array($lang, $allowed, true)) {
	$lang = 'en';
}
setcookie('cwlang', $lang, time() + 365 * 86400, '/');

return $lang;
