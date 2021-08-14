<?php
	
	$n = $_POST['name'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `products` WHERE name = '$n'";

    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/product.php');
?>