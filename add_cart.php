<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=sign_in.php");
        exit();
    }
?>
<?php
	
	$e = $_POST['email'];
    $p = $_POST['product'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $price = mysqli_fetch_assoc($conn->query("SELECT `price` FROM `products` WHERE name = '$p';"))['price'];

    $sql = "INSERT INTO `cart`(`email`, `product`, `price`) VALUES ('$e', '$p', '$price')";
    
    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/cart.php');
?>