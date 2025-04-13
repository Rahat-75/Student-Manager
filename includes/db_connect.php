<?php
require_once 'config.php';

function connectDB() {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    return $conn;
}
?>