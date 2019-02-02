<?php
include_once 'database.php';

$createTable = "CREATE TABLE IF NOT EXISTS tasks(
                id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                t_name VARCHAR(50) NOT NULL,
                description VARCHAR(256) NOT NULL,
                created_at TIMESTAMP )";

try {
    $con->query($createTable);
    echo "Table Created Sucessfully";
} catch (PDOException $ex) {
    echo "Table Not Created because:".$ex->getMessage();
}

?>