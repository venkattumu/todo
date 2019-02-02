<?php
$DSN = "mysql:host=localhost;dbname=todo";
$USERNAME = "root";
$PASSWORD = "";
$options = array(PDO::ATTR_PERSISTENT => true);
try{
$con = new PDO($DSN, $USERNAME, $PASSWORD, $options);

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "conection established";
}
catch(PDOException $ex){
    echo "Database Connection Failed!.. Due to :".$ex->getMessage();
}


?>