<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); /note. root is used here, although any user can be used as you see fit.
define('DB_PASSWORD', '');     /note. this field is shown blank, however, use the password for the stated user above.
define('DB_NAME', 'fivex5');   /note. for this demo fivex5 was the name of the db, name the db as you see fit.
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>