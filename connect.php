<?php
/*connect.php
Allows PHP to connect to your db
*/
//Database variables
$server='localhost';
$user='root';
$pass='';
$db='dbinfo';
//connect to database
$connection=new PDO("mysql:host=$server;dbname=$db",$user,$pass);
?>