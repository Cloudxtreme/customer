<?php
function passwd_enc($email,$passwd)
{
  $email = strtolower($email);
  $passwd = hash('sha256', $email.$passwd);
  return $passwd;
}

require '../scripts/mysql.php';

session_start();
$username = $_POST['username'];
$password = passwd_enc($username, $_POST['password']);

$username = stripslashes($username);
$password = stripslashes($password);

$result=mysqli_query($con, "SELECT * FROM users WHERE email='$username' and password='$password'");
$count = mysqli_num_rows($result);

if($count ==1){
$_SESSION['username'] = "$username";

while ($q = mysqli_fetch_array($result)) {
	$_SESSION['id'] = $q['id'];
	$_SESSION['name'] = $q['name'];
	$_SESSION['number'] = $q['cellphone'];
	$_SESSION['role'] = $q['role'];
}
header('Location: /customer/index');

}else {
	header('Location: /customer/login?msg=fail');
}
?>