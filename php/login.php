<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: /projekti_ueb");
}

require './db_connect.php';
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (empty($_POST['emailLogin']) || strlen($_POST['emailLogin']) < 6 ) {
    
    $_SESSION['message'] = 'email is blank or is to short';
} else if (empty($_POST['passwordLogin']) || strlen($_POST['passwordLogin']) < 6 || strlen($_POST['passwordLogin']) > 22) {
    $_SESSION['message'] = 'Password should be at least 6 characters and max 22 characters';
} else if (isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
    $email = validate($_POST['emailLogin']);
    $password = $_POST['passwordLogin'];
    $query = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $user = $query->fetch();

    if ($email == $user['email'] && password_verify($password, $user['password'])) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['user_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['image'] = $user['image'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../index.php");
    } else {
        $_SESSION['message'] = 'Your username or password is wrong!';
        header("Location: ?message=Your username or password is wrong!");

    }
}