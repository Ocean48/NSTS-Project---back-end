<?php
	
	$e = $_POST['e'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `account` WHERE email = '$e'";

    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/account.php');
?>