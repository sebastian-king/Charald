<?php
ob_start();
var_dump($_REQUEST);
$result = ob_get_clean();

file_put_contents("messages/".time(), $result);