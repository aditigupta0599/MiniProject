<?php session_start();
	$host_name='localhost';
	$data_base='event_management';
	$user_name='root';
	$password='';
	$connection= mysqli_connect($host_name,$user_name,$password,$data_base);
	if($connection->connect_error)
		{
		die($connection->connect_error);
		echo "connection failed";
		}
//$myusername = $_REQUEST['username'];
$myusername = $_REQUEST['username'];
$mypassword = $_REQUEST['password'];
//echo $myusername;
//echo $mypassword;
$mysql_query="select * from signup where username='$myusername' and password ='$mypassword'";





$result = mysqli_query($connection,$mysql_query);
$total =mysqli_num_rows($result);
if ($total==1)
{
//$info = mysql_fetch_array($result);
header("location:home.php");
}
else
{
    echo "Invalid User Name or Password";
    
}
?>
