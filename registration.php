<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flash_shop_accounts";

$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

$s = "SELECT * FROM useerlogin WHERE username = '$name'";
		$result = mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);
			
		if($num == 1)
			{
				echo "Username Already Taken";
			}
		else
			{
				$reg = "INSERT INTO useerlogin (username,email,password)
				VALUES ('$name', '$email', '$pass')";
				mysqli_query($conn,$reg);
				echo "Registration Successful";	
			}	

$conn->close();
?>