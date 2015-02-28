<?php
session_start();
if (!isset($_SESSION['username'])) {
	if (empty($_SERVER[HTTP_REFERER])) {
		header('Location: login');
	}else{
		header("Location: login?ref=$_SERVER[HTTP_REFERER]");
	}
}
require "head.php";
require "nav.php";
?>