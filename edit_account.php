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
   			vertical-align: middle;
        }

        input[type = "submit"]{
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 16px 32px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          width : 100px;
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
	        width : 100px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container_header">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo" class="logo">
        
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <?php
    	$e = $_POST['e'];
    

	    echo '<form action = "ea.php" method="POST">
	    	<input type="hidden" name="old_email" value = "'.$e.'">
	    	New Name: <br>
	    	<input type="text" name="new_email"><br>
	    	New Password: <br>
	    	<input type="text" name="password"><br>
	    	<input type="submit" value = "Confirm">
	    </form>'

	?>
    <br><br><br><br><br><br>
    
        
    <script src="js/script.js"></script>
    
    <br>

    <footer>
        <div class="footer_logo">
            <img src="images/logo.png" alt="logo">
        </div>
    </footer>
</body>
</html>