<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=sign_in.php");
        exit();
    }
?>

<?php
	
	$t = $_POST['t'];
    $si = $_POST['si'];
    $kw = $_POST['kw'];
    $ud = $_POST['ud'];
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

    $sql = "INSERT INTO `event`(`title`, `short_info`, `key_word`, `upload_date`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`) VALUES ('$t','$si','$kw','$ud','$i1','$i2','$i3','$i4','$i5','$i6')";
    
    $conn->query($sql);
    header('Location: http://localhost/nozuonodie_back/event.php');
?>