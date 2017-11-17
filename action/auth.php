<?php 
	require_once '../lib/link.php';
	$user = new User();
	$user-> Auth($_POST['login'], $_POST['pass']);
	header('Location:../index.php');
?>