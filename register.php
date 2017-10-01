<?php

require_once("include/db.php");
header('Content-Type: application/json');

//var_dump($_POST);

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$return = 0;

if (empty($first_name)) {
	$return = 1;
} else if (empty($last_name)) {
	$return = 2;
} else if (empty($email)) {
	$return = 3;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$return = 3.1;
} else if (empty($password)) {
	$return = 4;
} else {
	// all good
	$q = $db->query("SELECT id FROM users WHERE email = '".$db->real_escape_string($email)."'");
	if ($q->num_rows > 0) {
		$return = 5;
	} else {
		$q = $db->query("INSERT INTO users (name, email, password) VALUES('".$db->real_escape_string($first_name." ".$last_name)."','".$db->real_escape_string($email)."','".$db->real_escape_string(password_hash($password, PASSWORD_DEFAULT))."');") or die($db->error);
		$return = !$q * 6;
	}
}
echo json_encode($return);