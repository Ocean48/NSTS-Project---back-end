<?php

    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("refresh:0.1; url=account.php");
        exit();
    }
    else {
        if(isset($_POST["email_s"])){
            $go = TRUE;
            $email = $_POST["email_s"];
            $password = $_POST["password_s"];
            
            if (($email == "admin") && ($password == "123456")){
                $_SESSION['loggedin'] = true;
                header("refresh:0.1; url=account.php");
            }
            else {
                echo '<script>alert("wrong email or password")</script>';                
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sign in</title>

    <style>
        body{
            background-image: url(images/login.jpg);
            background-size: cover;
        }
        
        input {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        }
    </style>

</head>
<body>

    <div style="float: left; padding-left: 44%; padding-top: 10%;">
        <h1>Sign in</h1>
        <form method="POST">
            <label for="user_name">User name</label>
            <br>
            <input name="email_s" type="text" style="margin-top: 5%; margin-bottom: 8%; padding: 5%; width: 180px; font-style: italic;" placeholder="User name" required>
            <br>
            <label for="password">Password</label>
            <br>
            <input name="password_s" type="password" style="margin-top: 5%; margin-bottom: 8%; padding: 5%; width: 180px; font-style: italic;" placeholder="Password" required>
            <br>
            <input type="submit" style="margin-top: 5%; margin-bottom: 8%; padding: 5%;" value="Sign in">
        </form> 
    </div>
    
    <br style="clear: both;"><br style="clear: both;"><br style="clear: both;">

</body>
</html>


