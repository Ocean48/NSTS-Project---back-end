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
            background-color: rgb(172, 172, 172);
        }

        body{
            font-size: 18px;
            background-color: #e0f3ff;
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
            text-align: center;
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

            <form action = "sign_out.php">
                <input style="margin-left: 50%; margin-top: 5%; font-size: large; font-weight: bold; background-color: #e4eeff;  border: none;  color: #000000;  height: 42px;  cursor: pointer;  width : 120px; text-align: center;" type="submit" value="Sign out">
            </form>
        </div>
    </header>


    <h1 align = "center">User Information</h1>


    <?php
        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        $sql = "SELECT * FROM `account`";

        $result = $conn->query($sql);
    ?>

   
    <table style="width:80%">
        <tr>
            <th width="34%">User Email</th>
            <th width="40%">Password</th>
            <th></th>
        </tr>
        

        <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th>".$row['email']."</th>";
                echo "<th>".$row['password']."</th>";
                echo '<th>
                    <form action = "edit_account.php" method="POST">
                    <input type = "hidden" name = "e" value = "'.$row['email'] .'">
                    <input type = "submit" value = "Edit">
                    </form>
                    <form action = "delete_account.php" method="POST">
                    <input type = "hidden" name = "e" value = "'.$row['email'] .'">
                    <input type = "submit" value = "Delete">
                    </form>
                </th>';
                echo "</tr>";
            }
        ?>
    </table>


    <br><br><br><br><br><br>
    
        
    <script src="js/script.js"></script>
    
    <br>

    <footer>
        <img src="images/logo.png" alt="logo">
        <p class="copyright">copyright &copy; <script>document.write(new date().getfullyear())</script> all rights reserved</p>
    </footer>
</body>

</html>
