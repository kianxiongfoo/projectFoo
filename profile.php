<?php
session_start();

$username = $_SESSION['username'];

echo "Login Success! You are $username";

?>
