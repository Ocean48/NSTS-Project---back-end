<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=b_sign_in.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/b_style.css" type="text/css">
    <title>Index</title>


    <style>
        table, th{
            border: 1px solid black;
            margin-left: 10%;
        }

        footer{
            position: relative;
            width: 100%;
            background-color: rgb(172, 172, 172);
        }

        body{
            background-color: #e0f3ff;
        }

        form{
            font-size: larger;
            margin-top: 3%;
   			margin-left: 40%;
        }

        input[type = "submit"]{
            font-size: large;
            background-color: #4CAF50;
            border: none;
            color: #ffffff;
            height: 42px;
            margin: 4px 2px;
            cursor: pointer;
            width : 140px;
            border-radius: 8px;
            text-align: center;
        }

        input[type = "text"]{
            border-radius: 2px;
        	background-color: #e4eeff;
            border: 1px solid #000000;
            color: white;
            padding: 14px 30px;
            margin: 4px 2px;
            cursor: pointer;
            width : 200px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container_header">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo" class="logo">

            <nav>
                <ul>
                    <li><a href="b_account.php">Account</a></li>
                    <li><a href="b_cart.php">Cart</a></li>
                    <li><a href="b_product.php">Products</a></li>
                    <li><a href="b_event.php">Event</a></li>
                    <li><a href="b_sign_out.php">Sign Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <br>

    <?php
    	$e = $_POST['e'];
    

	    echo '<form action = "b_ea.php" method="POST">
	    	<input type="hidden" name="old_email" value = "'.$e.'">
	    	New Name: <br>
	    	<input type="text" name="new_email"><br><br><br>
	    	New Password: <br>
	    	<input type="text" name="password"><br><br><br>
	    	<input type="submit" value = "Confirm">
	    </form>'

	?>
    <br><br><br><br><br><br><br><br>
    
        
    <script src="js/script.js"></script>
    
    <br>

    <footer>
        <img src="images/logo.png" alt="logo">
        <p class="copyright">copyright &copy; <script>document.write(new date().getfullyear())</script> all rights reserved</p>
    </footer>
</body>
</html>