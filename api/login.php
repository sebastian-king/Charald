<?php

require_once("../include/db.php");
header('Content-Type: application/json');

//var_dump($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

$return = array('id' => 0, 'session' => '');

if (empty($email)) {
	$return = array('id' => -1, 'session' => '');
} else if (empty($password)) {
	$return = array('id' => -2, 'session' => '');
} else {
	// all good
	$q = $db->query("SELECT id, password FROM users WHERE email = '".$db->real_escape_string($email)."'");
	if ($q->num_rows == 0) {
		$return = array('id' => -3, 'session' => '');
	} else {
		$r = $q->fetch_array(MYSQLI_ASSOC);
		if (password_verify($password, $r['password'])) {
			$return = array('id' => (int)$r['id'], 'session' => hash("sha512", $r['password']));
		} else {
			$return = array('id' => -4, 'session' => '');
		}
	}
}
echo json_encode($return);