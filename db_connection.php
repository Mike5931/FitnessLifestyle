<?php
try {
    $dsn = 'mysql:host=localhost; dbname=fitnesslifestyle';
    $db = new PDO($dsn, "fitnesslifestyle_username", "fitnesslifestyle_password");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}
