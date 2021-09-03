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


    <h1 align = "center">User Information</h1>


    <?php
        $conn = mysqli_connect("sql304.epizy.com", "epiz_29619319", "xAqCxk4Urp", "epiz_29619319_test");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        $sql = "SELECT * FROM `account`";

        $result = $conn->query($sql);
    ?>

   
    <table style="width:80%">
        <tr>
            <th width="40%">User Email</th>
            <th width="35%">Password</th>
            <th></th>
        </tr>
        

        <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th>".$row['email']."</th>";
                echo "<th>".$row['password']."</th>";
                echo '<th>
                    <form style="float:left;" action = "b_edit_account.php" method="POST">
                    <input type = "hidden" name = "e" value = "'.$row['email'] .'">
                    <input type = "submit" value = "Edit">
                    </form>
                    <form style="float:left; margin-left: 3%;" action = "b_delete_account.php" method="POST">
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
