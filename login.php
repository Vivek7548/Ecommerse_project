<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flash_shop_accounts";  

        $conn = new mysqli($servername,$username,$password,$dbname);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    $s = "SELECT * FROM useerlogin WHERE username = '$uname' && password = '$pass'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

    if($num == 1)
    {
        header('location:index.html');
    }
    else
    {
        echo "invaild credentials";
    }


?>