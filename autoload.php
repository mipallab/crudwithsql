<?php


/**
 * 
 * functions.php file included
 */
if (file_exists(__DIR__ . "/app/functions.php")) {
    require_once __DIR__ . "/app/functions.php";
} else {
    echo "<b> functions.php </b> not found!";
}

/**
 * 
 * modal.php file included
 */
if (file_exists(__DIR__ . "/app/modal.php")) {
    require_once __DIR__ . "/app/modal.php";
} else {
    echo "<b> modal.php </b> not found!";
}


/**
 * 
 * Database Configure 
 */
if (file_exists(__DIR__ . "/config/connection.php")) {
    require_once __DIR__ . "/config/connection.php";
} else {
    echo "<b> connection.php </b> not found!";
}
