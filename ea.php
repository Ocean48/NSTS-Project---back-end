<?php
	$oe = $_POST['old_email'];
	$ne = $_POST['new_email'];
	$np = $_POST['password'];


	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `account` SET ";

    if(strlen($ne) > 0){
    	$sql = $sql."`email` = '".$ne."'";
    }

    if(strlen($np) > 0){
    	if(strlen($ne) > 0){
    		$sql = $sql.", ";
    	}
    	$sql = $sql."`password` = '".$np."'";
    }

    $sql = $sql." WHERE email = '".$oe."';";

    if(strlen($ne) > 0 OR strlen($np) > 0){
    	$conn->query($sql);
    }
    header('Location: http://localhost/nozuonodie_back/account.php');
?>