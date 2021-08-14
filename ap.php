<?php
	
	$pn = $_POST['pn'];
    $p = $_POST['p'];
    $i = $_POST['i'];
    $i1 = $_POST['i1'];
    $i2 = $_POST['i2'];
    $i3 = $_POST['i3'];
    $i4 = $_POST['i4'];
    $i5 = $_POST['i5'];
    $i6 = $_POST['i6'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "INSERT INTO `products`(`name`, `price`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`, `image_url7`) VALUES ('$pn',$p,'$i','$i1','$i2','$i3','$i4','$i5','$i6')";
    
    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/product.php');
?>