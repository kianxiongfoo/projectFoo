<!DOCTYPE html>
<html>
<head>
	<title>Foo Here</title>
</head>

<body>

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
$txt = "W3Schools.com";
echo "I love $txt! ";
echo "<br>";
echo "I love $txt and something $txt ! ";


$servername = "avian.jobstreet.com";
$username = "jbos_read";
$password = "Yur6swem";
$dbname = "jbos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, competitor_code, active_jobs FROM competitor_active_jobs LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["competitor_code"]. " " . $row["active_jobs"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

if (isset($_GET['name'])) {
  $text = $_GET['name'];

   echo 'Hello ' . $text . '!';
}
*/
session_start();

$_SESSION['images']=array('john'=>'John@sample.com','peter'=>'Peter@example.com');

$text = $_GET['foo'];

echo "This sample illustrates how to convert text into images using php<br><br>";


echo "First Email:<img src='http://dev.jobstreet.com:8080/txt2img.php?text=$text' /><br>";

//echo "Second Email:<img src='http://dev.jobstreet.com:8080/txt2img.php?img=peter' />";


?>
<br/><br/>
<input type="text" name = "txt">
<input type="password" name = "pwd">
<textarea name-"area">test</textarea>
<br/><br/>
<input type="checkbox" name="test" value="value1">
<br/><br/>
<input type="radio" name="group" value = "option1">1
<input type="radio" name="group" value = "option2">2
<input type="radio" name="group" value = "option3">3
<br/><br/>




</body>
</html>