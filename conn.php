<?php
$host = "localhost";
$username = "root";
$pw = "";
$db_name = "db_text";

$conn = new mysqli($host, $username, $pw, $db_name);

if (!$conn) {
	die("Error: Can't connect to database");
}
