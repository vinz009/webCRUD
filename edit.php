
<!DOCTYPE html>
<?php
        include_once('config.php');

        if(isset($_POST['submit'])) {
                $id = $_POST['id'];

                $name = $_POST['name'];
                $address = $_POST['address'];

                $query = "UPDATE students
                SET name='$name',address='$address'
                WHERE id='$id'";

                mysqli_query($dbc,$query)
                or die ("data unsuceful");
                echo "update sucecfull"."<br>";
                mysqli_close($dbc);
        }
?>

<?php 
        $id = $_GET['id'];

        $result = mysqli_query ($dbc, "SELECT * FROM students WHERE id=$id");

        while($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
                $address = $row['address'];
                $idrandom = $row['idrandom'];
        }
?>

<html lang="en">
        <head>
                <meta charset="UTF-8">
                <title>Update Student</title>
                <link rel="stylesheet" href="font.css">
                <link rel="stylesheet" href="addedit.css">
        </head>
        <body>
                <h2><a href="index.php">Go back to Home</a><br></h2>

                <div class="form">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                <label for="name">Name:</label> 
                                <input type="text" name="name" id="name" value=<?php echo $name; ?> >
                                <label for="address">Address:</label> 
                                <input type="text" name="address" id="address" value="<?php echo $address; ?>" >
                                <input type="submit" name="submit" value="Update">
                                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> >
                        </form>
                </div>

        </body>
</html>
