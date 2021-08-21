<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        echo '<script>alert("You must sign in as an admin!")</script>';
        header("refresh:0.1; url=sign_in.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Index</title>


    <style>
        table, th{
            border: 1px solid black;
            margin-left: 10%;
        }

        footer{
            position: relative;
            width: 100%;
            background-color: dimgray;
        }

        body{
            background-color: #e0f3ff;
        }

        form{
   			margin-left: 40%;
        }

        input[type = "submit"]{
          background-color: #4CAF50;
          border: none;
          color: white;
          height: 36px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          width : 100px;
          border-radius: 12px;
          text-align: center;
        
        }

        input[type = "text"]{
        	color: #fabebe;
        	border-radius: 18px;
	        background-color: #7a7391;
	        border: none;
	        color: white;
	        padding: 16px 32px;
	        text-decoration: none;
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
                    <li><a href="account.php">Account</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="event.php">Event</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <br>

    <?php
    	$e = $_POST['e'];
    

	    echo '<form action = "ea.php" method="POST">
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
        <div class="footer_logo">
            <img src="images/logo.png" alt="logo">
        </div>
    </footer>
</body>
</html>