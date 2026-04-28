<?php

require_once __DIR__ . '/db.php';

function t(string $key, string $lang): string
{
	static $strings = null;
	if ($strings === null) {
		$strings = [];
		$rows = db()->query('SELECT language, tkey, value FROM tob_translations')->fetchAll();
		foreach ($rows as $row) {
			$strings[$row->language][$row->tkey] = $row->value;
		}
	}
	return $strings[$lang][$key] ?? 'Unknown translation string';
}
