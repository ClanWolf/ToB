<?php

require_once __DIR__ . '/db_credentials.php';

function db(): PDO
{
	global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;

	static $pdo = null;
	if ($pdo === null) {
		$host = $DB_HOST ?: '127.0.0.1';
		$name = $DB_NAME ?: 'db';
		$user = $DB_USER ?: 'user';
		$pass = $DB_PASS ?: 'pass';
		$pdo = new PDO(
			"mysql:host={$host};dbname={$name};charset=utf8mb4",
			$user,
			$pass,
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			]
		);
	}
	return $pdo;
}
