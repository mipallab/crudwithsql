<?php

/**
 * Database connection
 */
try {
    $dbconnect  = new PDO("mysql:host=localhost;dbname=crud", "root", '');
} catch (PDOException $errormsg) {
    echo "Connection Failed " . $errormsg->getMessage();
}