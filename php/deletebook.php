<?php
session_start();
require './db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Book</title>
   
<body>
    <h1>Delete Book</h1>
    <link rel="stylesheet" href="../css/editanddelete.css">
    <h3>Fill in the below fields and click on 'Delete Book'</h3>
    <form name="DeleteBook" method="post" action="">
        <p>
            <label for="book">Book:</label><br />
            <input type="text" name="book" id="book" /><br /><br />
            <label for="branch">Branch:</label><br />
            <select name="branch" id="branch">
                <?php 
                    foreach ($pdo->query('SELECT branchname FROM Branches') as $row):
                ?>
                <option value="<?php echo $row['branchname']; ?>"><?php echo $row['branchname']; ?></option>
                <?php endforeach; ?>
            </select><br /><br />
            <label for="category">Category:</label><br />
            <select name="category" id="category">
                <?php 
                    foreach ($pdo->query('SELECT categoryname FROM Categories') as $row):
                ?>
                <option value="<?php echo $row['categoryname']; ?>"><?php echo $row['categoryname']; ?></option>
                <?php endforeach; ?>
            </select><br /><br />
            <input type="submit" name="delete" value="Delete Book" />
            <input type="button" name="return" value="Return" onClick="location.href='books.php'/>
        </p>
    </form>

    <?php
    if (isset($_POST['delete'])) {
        // Handle book deletion logic here
        // You can retrieve the selected book information and delete it from the database
    }

    $pdo = null;
    ?>

</body>
</html>

