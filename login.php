<?php

require_once("include/db.php");
header('Content-Type: application/json');

//var_dump($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

$return = 0;

if (empty($email)) {
	$return = 1;
} else if (empty($password)) {
	$return = 2;
} else {
	// all good
	$q = $db->query("SELECT id, password FROM users WHERE email = '".$db->real_escape_string($email)."'");
	if ($q->num_rows == 0) {
		$return = 3;
	} else {
		$r = $q->fetch_array(MYSQLI_ASSOC);
		if (password_verify($password, $r['password'])) {
			$return = 0;
			setcookie("id", $r['id'], 0, '/', "www.charald.com");
			setcookie("id", $r['id'], 0, '/', "www.charald.tech");
			setcookie("session", hash("sha512", $r['password']), 0, '/', "www.charald.com");
			setcookie("session", hash("sha512", $r['password']), 0, '/', "www.charald.tech");
		} else {
			$return = 4;
		}
	}
}
echo json_encode($return);