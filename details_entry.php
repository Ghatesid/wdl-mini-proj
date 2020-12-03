<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="db_wdl";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//check connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$areacode = $_POST['areacode'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	
	$sql_query = "INSERT INTO entry_details (first_name, last_name, email, areacode, phone, subject)
	VALUES ('$first_name', '$last_name', '$email', '$areacode', '$phone', '$subject')";

	if (mysqli_query($conn, $sql_query))
	{
	   echo "New Details Entered Successfully !";
	}
	else
	{
	   echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>