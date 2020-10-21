
<?php
        //database connection
        include_once('config.php');

        //get url from home
        $id = $_GET['id'];

        $result = mysqli_query($dbc, "SELECT * FROM students WHERE id=$id");

        $row = mysqli_fetch_array($result);
                $name = $row['name'];
                $address = $row['address'];
                $idrandom = $row['idrandom'];

?>
<?php
        if(isset($_POST['yes'])) {
                $id = $_POST['hidden'];
                $other= mysqli_query($dbc, "DELETE FROM students WHERE id=$id");
                header("Location:index.php");
        }
        if(isset($_POST['no'])) {
                header("Location:index.php");
        }
?>



<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <title>Delete User</title>
                <link rel="stylesheet" href="addedit.css" >
        </head>
        <body>
                <h3>Are you sure to delete <br/>
                <?php echo "$name"."  "."$address"."  "."$idrandom"."?" ; ?> </h3>
                <div class="form">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="submit" name="yes" value="YES">
                        <input type="submit" name="no" value="NO">
                        <input type="hidden" name="hidden" value=<?php echo $_GET['id']; ?> >
                        </form>
                </div>
        </body>
</html>
