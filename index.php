<?php 
require_once './commons/db.php';

$sql = "select * from users where id < 3";
$users = executeQuery($sql, true);
var_dump($users);


 ?>