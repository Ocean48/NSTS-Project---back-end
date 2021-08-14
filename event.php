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

        input{
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 16px 32px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          width : 100px;
        }

        .bu{
          background-color: #4CAF50;
          border: none;
          color: white;
          text-decoration: none;
          margin: 50px 10.5%;
          cursor: pointer;
          width : 150px;
          height: 60px;
          font-size: 20px;
          float: right;
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


    <h1 align = "center">Event Information</h1>

    <form action="add_event.html">
        <input class="bu" type="submit" value="Add Event">
    </form>


    <?php
        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }

        $sql = "SELECT * FROM `event`";

        $result = $conn->query($sql);
    ?>

   
    <table style="width:80%; clear: both;">
        <tr>
            <th width="80%">Event Title</th>
            <th></th>
        </tr>
        

        <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th>".$row['title']."</th>";
                echo '<th>
                    <form action = "delete_event.php" method="POST">
                    <input type = "hidden" name = "t" value = "'.$row['title'] .'">
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
