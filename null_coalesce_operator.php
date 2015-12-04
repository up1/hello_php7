<?php
// Pre PHP 7 code
$username = isset($_GET['username']) ? $_GET['username'] : 'DEFAULT';

// PHP 7
$username = $_GET['username'] ?? 'DEFAULT';
echo $username;
?>
