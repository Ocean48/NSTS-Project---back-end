<?php
	
	$t = $_POST['t'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `event` WHERE title = '$t'";

    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/event.php');
?>