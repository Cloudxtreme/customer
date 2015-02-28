<?php
//datatypes
header('Content-type: text/plain; charset=utf-8');
date_default_timezone_set('Europe/Stockholm');
//set datatypes

session_start();

if (!isset($_SESSION['username'])&&isset($_SESSION['role'])) {
	header('Location: ../login');
}

require '../../scripts/mysql.php';

$a = $_POST['a'];
$id = $_POST['id'];

$ins = mysqli_query($con, "UPDATE `nageby`.`support` SET `a` = '$a' WHERE `support`.`id` = $id;");

header('Location: ../support');
?>