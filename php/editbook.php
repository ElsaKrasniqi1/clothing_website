<?php
session_start();
require './db_connect.php';
if (isset($_POST['edit'])) {
    if (!empty($_POST['book']) && !empty($_POST['branch']) && !empty($_POST['category'])) {
        // Check if the book exists
        $sth = $pdo->query("SELECT COUNT(*) FROM Books WHERE bookname='" . $_POST['book'] . "' AND branch='" . $_POST['branch'] . "'");
        $row = $sth->fetch();
        $copy = $row[0];

        if ($copy > 0) {
            // Update the book's category
            $pdo->exec("UPDATE Books SET Category='" . $_POST['category'] . "' WHERE BookName='" . $_POST['book'] . "' AND Branch='" . $_POST['branch'] . "'");
            echo '<p>' . $_POST['book'] . ' successfully updated to the ' . $_POST['category'] . ' category in the ' . $_POST['branch'] . ' branch.</p>';
        } else {
            echo '<p>' . $_POST['book'] . ' does not exist in the ' . $_POST['branch'] . ' branch.</p>';
        }
    } else {
        echo '<p>All fields are required.</p>';
    }
}

$pdo = null;
?>




<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="../css/editanddelete.css">
</head>
<body>
    <h1>Edit Book</h1>
    <h3>Fill in the below fields and click on 'Edit Book'</h3>
    <form name="EditBook" method="post" action="">
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
            <input type="submit" name="edit" value="Edit Book" />
            <input type="button" name="return" value="Return" onClick="location.href='books.php'/>
        </p>
    </form>

    <?php
    if (isset($_POST['edit'])) {
        // Handle book editing logic here
        // You can retrieve the selected book information and update it in the database
    }

    $pdo = null;
    ?>

</body>
</html>
