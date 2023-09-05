<?php

require './db_connect.php';


$book = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$errors = array();
if (isset($_REQUEST["cmd"])) {
    $cmd = $_REQUEST["cmd"];
    switch ($cmd) {
        case 'editbook':
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
            $bookname = isset($_REQUEST['bookname']) ? $_REQUEST['bookname'] : '';
            $Copy = isset($_REQUEST['Copy']) ? $_REQUEST['Copy'] : '';
            $Branch = isset($_REQUEST['Branch']) ? $_REQUEST['Branch'] : '';
            $Cardholder = isset($_REQUEST['Cardholder']) ? $_REQUEST['Cardholder'] : '';
            $Category = isset($_REQUEST['Category']) ? $_REQUEST['Category'] : '';
            
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                $errors[] = "id nuk eshte valide";
            }
          
            $bookname_pattern = '/^[0-9-]{7,}+$/';
            if (!preg_match($bookname_pattern, $isbn)) {
                $errors[] = "emri i librit nuk eshte valid";
            }
            if (filter_var($Copy, FILTER_VALIDATE_INT) === false) {
                $errors[] = "Kopja nuk eshte valide";
            }
            if (filter_var($Branch, FILTER_VALIDATE_INT) === false || $Branch < 1) {
                $errors[] = "Dega nuk eshte valide";
            }
            if (filter_var($Cardholder, FILTER_VALIDATE_FLOAT) === false || $Cardholder < 0.01) {
                $errors[] = "Mbajtesi i kartes nuk eshte valid";
            }
            if (count($errors) > 0) {
                $book = getid($id);
                
            } else {
                
                $Copy = number_format($Copy, 2);
                
                $res = book($id, $bookname, $Copy, $Branch, $Cardholder, $Category);
                if ($res == true) {
                    $book = getBookFromId($id);
                    
                    $success_message = "Libri eshte regjistruar me sukses.";
                } else {
                    $errors[] = "Libri nuk eshte regjistruar me sukses";
                   
                }
            }
            break;
        default:
            break;
    }
} else {
    $book = getBookFromId($id);
}
if (isset($book)) {
    ?>
	<div class="container">
		<h2> Modifiko Librin</h2>
		<?php 
    if (count($errors) > 0) {
        ?>
			<div class="errors">
				<?php 
        foreach ($errors as $error) {
            ?>
					<p><?php 
            echo "- " . $error;
            ?>
</p>
				<?php 
        }
        ?>
			</div>
		<?php 
    }
    ?>
		<?php 
    if (isset($success_message)) {
        ?>
			<div class="success">	
				<p><?php 
        echo "- " . $success_message;
        ?>
</p>	
			</div>
		<?php 
    }
    ?>
		<form method="POST" action="" class="bookform">
		
			<input type="hidden" name="cmd" value="edit_book">

			<div class="formField"> 
				<label class="formLabel" for="title">Titulli</label>
				<input type="text" name="title" id="title" placeholder="Titulli" value="<?php 
    echo $book['bookname'];
    ?>
"> 
			</div>

			<div class="formField">
				<label class="formLabel" for="isbn">ID</label>
				<input type="text" name="isbn" id="id" placeholder="ID" value="<?php 
    echo $book['id'];
    ?>
">
			</div>
			
			<?php 
    $Category = getCategory();
    ?>
			<div class="formField">
				<label class="formLabel" for="id_author">Category</label>
				<select name="Category">
					<?php 
    foreach ($Category as $Category) {
        ?>
						<option <?php 
        echo $Category['id'] == $book['id'] ? 'selected=selected' : '';
        ?>
 value="<?php 
        echo $Category['id'];
        ?>
"><?php 
        echo $Category['id'] . " " . $Category['title'];
        ?>
</option>
					<?php 
    }
    ?>
				</select>
			</div>

			<div class="formField">
				<label class="formLabel" for="Copy">Kopjet</label>
				<input type="text" name="copy" id="Copy" placeholder="Copy" value="<?php 
    echo $book['Copy'];
    ?>
">
			</div>


			<div class="formField">
				<label class="formLabel" for="Branch">Dega</label>
				<input type="text" name="Dega" id="Branch" placeholder="Branch" value="<?php 
    echo $book['Branch'];
    ?>
">
			</div>

			<div class="formField">
				<label class="formLabel" for="Cardholder">Mbajtesi i Kartes</label>
				<input type="text" name="Cardholder" id="Cardholder" placeholder="Cardholder" value="<?php 
    echo number_format($book['Cardholder'], 2);
    ?>
">
			</div>

			<button class ="loginbutton"type="submit">Modifiko</button>
		</form>
	</div>
<?php 
} else {
    ?>
	<h2>ERRORE: Libri i perzgjedhur nuk eshte i pranishem</h2>
<?php 
}