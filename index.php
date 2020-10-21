<?php
//start connection on database
date_default_timezone_set("Asia/Manila");
require_once ("config.php");


//fetch all the data in database
$result = mysqli_query( $dbc, "SELECT * FROM students");
?>

<html>
        <head>
                <title>Dashboard</title>
                <link rel="stylesheet" type="text/css" href="css1.css" />
                <link rel="stylesheet" type="text/css" href="font.css" />
        </head>
        <body>
                <div class="wrapper">
                        <header >
                                <img src="image/eastern_univ.png" alt="univ banner">
                        </header>
                        <div class="date">
                                <h1>Today is </br> <?php echo date("l-Y-m-d");
                                        echo "<br>".date("h:i:sa"); ?>. </h1> 
                        </div>
                        <aside>
                                <img src="image/banner1.jpg" alt="univ banner">
                        </aside>
                        <main>
                                <h3><a href="add.php">Add Student</a></h3>
                                <table class="">
                                        <tr class="">
                                                <th >Name</th> 
                                                <th>Address</th>
                                                <th>StudentID</th> 
                                                <th>Update</th>
                                        </tr>
                                                <?php
                                                 while($row = mysqli_fetch_array($result)) {
                                        echo "<tr class=''>";
                                                echo "<td>".$row['name']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['idrandom']."</td>";
                                                echo "<td> <a href='edit.php?id=$row[id]'>Edit</a> 
                                                / <a href='delete.php?id=$row[id]'>Delete</a></td>";
                                        echo "</tr>";
                                                 }
                                                 ?>
                                </table>
                        </main>
                        <footer>
                                <h5>&#169 2020-2021</h5>
                        </footer>
                </div> 
        </body>
</html>
