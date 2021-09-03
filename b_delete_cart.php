<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=b_sign_in.php");
        exit();
    }
?>
<?php
	
	$e = $_POST['e'];
    $p = $_POST['p'];

	$conn = mysqli_connect("sql304.epizy.com", "epiz_29619319", "xAqCxk4Urp", "epiz_29619319_test");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `cart` WHERE email = '$e' AND product = '$p' LIMIT 1";

    $conn->query($sql);
    header("refresh:0.1; url=b_cart.php");
?>