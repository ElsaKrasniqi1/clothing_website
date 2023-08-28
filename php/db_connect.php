<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=librariaonline", "root", "");
} catch (PDOException $pdo) {
    die("Unsuccessful connection");
}