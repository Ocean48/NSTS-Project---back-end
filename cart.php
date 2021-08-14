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

        input[type = "submit"]{
          background-color: #4CAF50;
          border: none;
          color: white;
          width: 130px;
          height: 50px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          width : 100px;
        }
        input[type = "text"]{
          border-color: black;
          color: black;
          height: 50px;
          font-size: 18px;
          text-decoration: none;
          margin: 50px 56px;
          cursor: pointer;
        }
        input[type = "email"]{
          border-color: black;
          color: black;
          height: 50px;
          font-size: 18px;
          text-decoration: none;
          margin: 50px 52px;
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
                    <li><a href="account.php">Account</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="event.php">Event</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <h1 align = "center">User Information</h1>

    <form action = "add_cart.php" method="POST" style="margin-left: 10%;">
        <label>E-mail: </label>
        <input type = "email" name = "email">
        <label>Product: </label>
        <input type = "text" name = "product">
        <input type = "submit" value = "Add Order" style="margin-left: 5.5%;">
    </form>

   <?php
        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        $sql = "SELECT * FROM `cart`";

        $result = $conn->query($sql);
    ?>


    <table style="width:80%">
        <tr>
            <th width="34%">User Email</th>
            <th width="40%">Product</th>
            <th width="40%">price</th>
            <th></th>
        </tr>
        

        <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th>".$row['email']."</th>";
                echo "<th>".$row['product']."</th>";
                echo "<th>".$row['price']."</th>";
                echo '<th>
                    <form action = "delete_cart.php" method="POST">
                    <input type = "hidden" name = "e" value = "'.$row['email'] .'">
                    <input type = "hidden" name = "p" value = "'.$row['product'] .'">
                    <input type = "submit" value = "delete">
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
        <div class="footer_logo">
            <img src="images/logo.png" alt="logo">
        </div>
    </footer>
</body>

</html>
