<?php
function passwd_enc($email,$passwd)
{
  $email = strtolower($email);
  $passwd = hash('sha256', $email.$passwd);
  return $passwd;
}
echo passwd_enc($_GET['email'], $_GET['passwd']);
?>