<?php
session_start();
require './db_connect.php';
?>

<!DOCTYPE html >
<html >
    <head>
        <title>Add Book</title>
        <link rel="stylesheet" href="../css/addbook.css">
    </head>
    <body>
        <h1>Add Book</h1>
        <h3>Fill in below fields and click on 'Add Book'</h3>
        <form name="AddBook" method="post" action="">
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
                <input type="submit" name="add" value="Add Book" />
	            <input type="button" name="return" value="Return" onClick="location.href='books.php'/>
            </p>
        </form>

        <?php
            if (isset($_POST['add'])) {
              if (!empty($_POST['book']) && !empty($_POST['branch']) && !empty($_POST['category'])) {
                $sth = $pdo->query("select count(*) from Books where bookname='".$_POST['book']."' and branch='".$_POST['branch']."'");
                $row = $sth->fetch();
                $copy = $row[0];
                if ($copy == 0) {
                  $pdo->exec("insert into Books (BookName, Branch, Category) values('".$_POST['book']."', '".$_POST['branch']."', '".$_POST['category']."')");
                  echo '<p>'.$_POST['book'].' successfully added in the '.$_POST['category'].' catgeory of the '.$_POST['branch'].' branch.</p>';
                }
                else 
                  echo '<p>'.$_POST['book'].' already exists in the '.$_POST['category'].' catgeory of the '.$_POST['branch'].' branch.</p>';
              }
              else
                echo '<p>All fields are required.</p>';
            }

            $pdo = null;
        ?>

    </body>
</html>