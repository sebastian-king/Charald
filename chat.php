<?php

require_once("include/header.php");
require_auth();

$userinfo = $db->query("SELECT id, name, email FROM users WHERE id = '".$db->real_escape_string($_COOKIE['id'])."' LIMIT 1");
$userinfo = $userinfo->fetch_array(MYSQLI_ASSOC);
?>
Hello <?php echo $userinfo['name']; ?>