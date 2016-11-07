<?php
	define('DB_SERVER', '127.0.0.1');
	define('DB_PORT', 3306);
	define('DB_USERNAME', 'arotexconfeccion');
	define('DB_PASSWORD', 'Arotex190');
	define('DB_DATABASE', 'arotexco_shoppingcar');

	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
?>