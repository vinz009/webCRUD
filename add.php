
<?php

?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <title>Add Student</title>
                <link rel="stylesheet" href="font.css"/>
                <link rel="stylesheet" href="addedit.css"/>
                
        </head>
        <body>
                <div class="wrapper">
                        <h1>Add Student Form</h1>
                                <?php
                                        if(isset($_POST[ "submit" ])){
                                                $name=$_POST["name"];
                                                $address = $_POST ["address"];
                                                
                                                $outputForm = "yes";
                                        }
                                        else {
                                                $outputForm = "yes";
                                        }
                                        if(!empty($name) && !empty($address) ){
                                                $temp=rand(100,500);                                
                                                $rand="CSY".$temp;
                                                $dbc = mysqli_connect('localhost','bebz','bebong09','student_db')
                                                or die ("may ara error pls kayu");
                                                $query = "INSERT INTO students (name,address,idrandom)
                                                         VALUES ('$name','$address','$rand')";
                                                mysqli_query ($dbc,$query)
                                                or die ("data not inserted");
                                                echo "<h2>"."Student Added Successfully!"."</h2>";

                                                mysqli_close($dbc);
                                        }
                                        if($outputForm == "yes") {
                                ?>
                        <div class="form">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Juan Dela Cruz">
                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address"
                                                 placeholder="Manila City">
                                        <input type="submit" name="submit" value="Submit">
                                </form>
                        </div>
                        <?php
                                }
                        ?>
                        <h2><a href="index.php">Home</a></h2>
                </div>

        </body>
</html>
