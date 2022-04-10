<?php
   include 'pages/connect.php';
   $username= $pwd="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = ($_POST["username"]);
 $pwd = ($_POST["pwd"]);
}
$sql = "INSERT INTO login (username,pwd)
VALUES ('$username' ,'$pwd')";
if ($conn->query($sql) === TRUE) {
    header("location: login.php");
 } else {
   echo 'Error: ' . $sql . '<br>' . $conn->error;
 }
 $conn->close();

?>
   