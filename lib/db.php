<?php

require_once __DIR__ . '/db_credentials.php';

function db(): PDO
{
	static $pdo = null;
	if ($pdo === null) {
		$host = $DB_HOST ?: 'db';
		$name = $DB_NAME ?: 'cwg';
		$user = $DB_USER ?: 'cwg';
		$pass = $DB_PASS ?: 'cwg';
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
