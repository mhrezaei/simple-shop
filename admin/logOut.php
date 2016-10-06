<?php

require_once '../config/config.php';
setUsetLogOut();
$url = $uri . '/admin';
header('location: ' . $url);
exit;

?>