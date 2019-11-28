<?php
$u1=$_REQUEST['username'];
$e1=$_REQUEST['email'];
$p1=$_REQUEST['password'];
$re_p1=$_REQUEST['repassword'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `signup` (`username`, `email`, `password`, `repassword`) 
VALUES ('$u1', '$e1', '$p1', '$re_p1')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully Registered. Please Login Now";
    header('Location:login1.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>