<?php
session_start();


if (!isset($_POST['usernameRegister']) || !isset($_POST['passwordRegister']) || !isset($_POST['emailRegister'])) {
 
        header("Location: /projekti_ueb/pages/signup.php");

        $_SESSION['message'] = "Please fill all fields!";

}


require './db_connect.php';
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Me rregullu qe mos me mujt me regjistru usera qe egzistojn
if (isset($_POST['emailRegister'])) {
    $username = $_POST['emailRegister'];

    $query = $pdo->prepare("SELECT COUNT(*) AS numberOfUsers FROM `users` WHERE email = :email");
    $query->bindParam(':email', $email);

    $query->execute();
    $count = $query->fetch();

    if ($count['numberOfUsers'] > 0) {
        $_SESSION['message'] = 'A user exist with the same email!';
        header("Location: ./");
        die();
    } else {
    }
}
if (empty($_POST['usernameRegister']) || strlen($_POST['usernameRegister']) < 6 || strlen($_POST['usernameRegister']) > 22) {
    header("Location: /projekti_ueb/pages/signup.php?message=Username_is_Blank_or_to_short");
    $_SESSION['message'] = 'Username should be at least 6 characters and max 22 characters';
} else if (empty($_POST['passwordRegister']) || strlen($_POST['passwordRegister']) < 6 || strlen($_POST['passwordRegister']) > 22) {
    header("Location: /projekti_ueb/pages/signup.php?message=password_is_invalid");
    $_SESSION['message'] = 'Password should be at least 6 characters and max 22 characters';
} else if (isset($_POST['usernameRegister']) && isset($_FILES['image']) && isset($_POST['passwordRegister'])) {
    $name = validate($_POST['usernameRegister']);
    $password = password_hash($_POST['passwordRegister'], PASSWORD_BCRYPT);
    $email = $_POST['emailRegister'];
    $temp = $_FILES['image']['tmp_name'];
    $file_name = time() . $_FILES['image']['name'];
    move_uploaded_file($temp, dirname(__FILE__) . "\uploads\profiles\\$file_name");
    $sql = 'INSERT INTO users (user_name,email, password,image) VALUES (:name,:email, :password, :image)';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    $query->bindParam(':image', $file_name);

    if ($query->execute()) {
            $_SESSION['message'] = "You just created a new Account!";

            header("Location: /projekti_ueb/pages/signup.php");
        
    } else {
        
        header("Location:/projekti_ueb/pages/signup.php");
    }
} else {
    header("Location: /projekti_ueb/pages/signup.php");

    $_SESSION['message'] = "Something Went Wrong Try Again!";
}