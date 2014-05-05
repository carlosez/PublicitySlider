<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpgang_usr');
define('DB_PASSWORD', 'PhpGangUser2014');
define('DB_DATABASE', 'phpgang');
$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error($connection));
?>