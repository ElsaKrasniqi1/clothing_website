<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=addbook.sql", "root", "");
} catch (PDOException $pdo) {
    die("Unsuccessful connection");
}