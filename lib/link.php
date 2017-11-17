<?php 
	require_once 'Database-1.0.0/Mysql/Exception.php';
	require_once 'Database-1.0.0/Mysql/Statement.php';
	require_once 'Database-1.0.0/Mysql.php';
	// Соединение с СУБД и получение объекта Database_Mysql
	// Database_Mysql - "обертка" над "родным" объектом mysqli
	$db = Database_Mysql::create("localhost", "root", "ahng5u98")
	      // Выбор базы данных
	      ->setDatabaseName("migrants")
	      // Выбор кодировки
	      ->setCharset("utf8");
	require_once 'user.class.php';
 ?>