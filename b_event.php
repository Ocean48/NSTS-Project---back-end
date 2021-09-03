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
            color: white;
            width: 120px;
            height: 40px;
            text-decoration: none;
            margin: 10px 8px;
            cursor: pointer;
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


    <h1 align = "center">Event Information</h1>

    <form action="b_add_event.html">
        <input style="float: right; margin-right: 20%; margin-bottom: 3%; width: 140px;" type="submit" value="Add Event">
    </form>


    <?php
        $conn = mysqli_connect("sql304.epizy.com", "epiz_29619319", "xAqCxk4Urp", "epiz_29619319_test");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        $sql = "SELECT * FROM `event`";

        $result = $conn->query($sql);
    ?>

   
    <table style="width:80%; clear: both;">
        <tr>
            <th width="65%">Event Title</th>
            <th width="20%">Key Word</th>
            <th width="15%">Upload Date</th>
            <th></th>
        </tr>
        

        <?php
            $a = [];
            while ($row = $result->fetch_assoc()){
                $a[$row['title']."+".$row['key_word']] = $row['upload_date'];
            }

            arsort($a);


            foreach($a as $k=>$v) {
                $t = explode("+", $k);

                echo "<tr>";
                echo "<th>".$t[0]."</th>";
                echo "<th>".$t[1]."</th>";
                echo "<th>".$v."</th>";
                echo '<th>
                    <form action = "b_delete_event.php" method="POST">
                    <input type = "hidden" name = "t" value = "'.$t[0] .'">
                    <input type = "submit" value = "Delete">
                    </form>
                </th>';
                echo "</tr>";
            }
        ?>
    </table>


    <br>
    
        
    <script src="js/script.js"></script>
    
    <br>

    <footer>
        <img src="images/logo.png" alt="logo">
        <p class="copyright">copyright &copy; <script>document.write(new date().getfullyear())</script> all rights reserved</p>
    </footer>
</body>

</html>
