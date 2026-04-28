<?php

function db(): PDO
{
	static $pdo = null;
	if ($pdo === null) {
		$host = getenv('DB_HOST') ?: 'db';
		$name = getenv('DB_NAME') ?: 'cwg';
		$user = getenv('DB_USER') ?: 'cwg';
		$pass = getenv('DB_PASS') ?: 'cwg';
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
