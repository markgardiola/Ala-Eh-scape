<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ala-eh-scape";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

if($conn->connect_error){
  echo"Failed to connect to DB".$conn->connect_error;
}
