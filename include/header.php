<?php

require_once("db.php");
require_once("auth.php");

function require_auth() {
	if (!auth()) {
		die(header("Location: /#login"));
	}
}