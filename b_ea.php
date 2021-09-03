<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=b_sign_in.php");
        exit();
    }
?>
<?php
	$oe = $_POST['old_email'];
	$ne = $_POST['new_email'];
	$np = $_POST['password'];


	$conn = mysqli_connect("sql304.epizy.com", "epiz_29619319", "xAqCxk4Urp", "epiz_29619319_test");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `account` SET "; 
    $sql2 = "UPDATE `cart` SET `email` = '$ne' WHERE email = '$oe'"; 

    if(strlen($ne) > 0){
        $sql = $sql."`email` = '".$ne."'";
        $conn->query($sql2);
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
    header("refresh:0.1; url=b_account.php");
?>