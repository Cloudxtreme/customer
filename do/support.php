<?php
//datatypes
header('Content-type: text/plain; charset=utf-8');
date_default_timezone_set('Europe/Stockholm');
//set datatypes

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: ../login');
}

require '../scripts/mysql.php';


$q = $_POST['q'];

$date = date('Y-m-d H:i:s');

$ins = mysqli_query($con, "INSERT INTO support (id, user, q, a, time) VALUES (NULL, '1', '$q', '', '$date');");

$q = mysqli_query($con, "SELECT * FROM support WHERE q='$q'");
while ($r = mysqli_fetch_array($q)) {
	$id = $r['id'];
}
$m = $_POST[q]." http://nageby.se/customer/answer?id=$id";

mail("nagebyinternet@gmail.com", "0739278472", $m, $headers);

header('Location: ../support');
?>