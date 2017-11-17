<?php 
	require_once 'link.php';
	$user = new User();
	$user-> Auth($_POST['login'], $_POST['pass']);

?>