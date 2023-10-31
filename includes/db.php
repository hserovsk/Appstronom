<?php 


define("DB_HOST", "localhost:3307");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "appstronomydb");
 
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection){
    echo "db connected";
} else {
    die("db not connected");
}

?>