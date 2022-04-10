<?php
    session_start();
   include 'connect.php';
    $user = $pwd="";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $user = $_POST["username"];          
    $pwd = $_POST["pwd"];
   }
 
   $sql = "SELECT pwd FROM login WHERE username = '$user'";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();

if($row["pwd"]==$pwd){ 
    $_SESSION["user"] = true;
    header("Location: http://localhost/swe/pages/classstudents.php");
}
else echo 
"<h1 style:'text-align:center'>
Wrong Password, Enter Password again
</h1>
";
 $conn->close();

?>
   