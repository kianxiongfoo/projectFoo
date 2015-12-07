<?php
//Server/database settings
session_start();
ob_start();

$error = '';

$host       = "localhost";
$username   = "root";
$password   = "root";
$db_name    = "jbosdb";
$tbl_name   = "auth";

//Connect to the server and select the database
$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Get the username and password from the login form
//Prevent SQL injections
$username = mysql_real_escape_string($_POST['txt-username']);
$password = mysql_real_escape_string($_POST['txt-password']);
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql = "SELECT uname FROM $tbl_name WHERE uname = '$username'
and pword = '$password'";
//echo $sql;
$result = $conn->query($sql);

//echo $username;
//echo $password;



//If $result is 1 the user exists
if($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    //$_SESSION['password'] = $password;
    header('location:profile.php');
}

//If it does not match, give a return message
else {
    $error = 'Wrong Username or Password';
}


 ?>
