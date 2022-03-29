<?php
session_start();
$_SESSION['favcolor']= 'Black';
echo "session is set";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>