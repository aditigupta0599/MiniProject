<?php
$u1n=$_REQUEST['uname'];
$e1n=$_REQUEST['emails'];
$p1n=$_REQUEST['num'];
$ren_p1=$_REQUEST['address'];


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

$sql = "INSERT INTO `registration` (`name`, `email`, `phone`, `address`) 
VALUES ('$u1n', '$e1n', '$p1n', '$ren_p1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location:services.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>