<?php

$databaseHost='localhost';
$databaseName='test';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 echo"Connected Successfully";
}
