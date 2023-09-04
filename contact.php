<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flash_shop_accounts";

$fname=$_POST['first-name'];
$lname=$_POST['last-name'];
$email=$_POST['email'];
$msg=$_POST['message'];

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

$s = "SELECT * FROM useerlogin WHERE username = '$fname'";
		$result = mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);
			
		
				$reg = "INSERT INTO message (firstName,lastName,email,message)
				VALUES ('$fname','$lname', '$email', '$msg')";
				mysqli_query($conn,$reg);
				echo "Your Message has been sent.";	
		

$conn->close();
?>