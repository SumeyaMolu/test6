<?php
//create the database connection using cinstants previously created

//Inserting constants content
require_once "constants.php";

//create the database connection 
$dbConn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

//verify the connection
if($dbConn->connect_error){
  die("Connection failed: " .$dbConn->connect_error);
}else{
  print "The connection was successful!!! :-)";
}
http://localhost/test6/config/db_connect.php