<?php

function auth() {
	global $db;
	if (!empty($_COOKIE['id']) && !empty($_COOKIE['session'])) {
		$q = $db->query("SELECT id, password FROM users WHERE id = '".$db->real_escape_string($_COOKIE['id'])."' LIMIT 1");
		if ($q->num_rows == 1) {
			$r = $q->fetch_array(MYSQLI_ASSOC);
			if (hash("sha512", $r['password']) == $_COOKIE['session']) {
				return true;
			}
		}
	}
	return false;
}