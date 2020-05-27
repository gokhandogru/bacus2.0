<?php

//This file is for establishing the connection with the database.//
//Once a database is created on a host, a user name and pasword is specified, and a name is given to the database, fill out the details below with the corresponding data. In fields where you see "XXXXXXXXXX"// 

//Host name, user name, password and database name shall be entered here.//
$host = "localhost";
$username = "XXXXXXXXXX";
$user_pass = "XXXXXXXXXX
$database_in_use = "XXXXXXXXXX";

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);


//The code below is for avoiding character-set problems across different languages.//

if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    
}

?>