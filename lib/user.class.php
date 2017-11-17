<?php 
	/**
	* 
	*/

	class User
	{
		public $login;
		public $pass;
		public $verify;
		public $fio;
		public function Ident(){
			global $db;
			if (isset($_COOKIE['login'])){
				$q = $db->query("SELECT * FROM `users` WHERE `login` = '?s'", $_COOKIE['login']);
				if ($q){
					$all = $q->fetch_object();
					if (isset($all)){
						$hash = hash('sha256', $all->login.$all->pass);
						if ($hash==$_COOKIE['hash']) {
							return array('Ident' => true, 'verify' => $all->verify);
						}	
					}
				}
			}

		}

		public function Auth($login, $pass)
		{
			$this->login = $login;
			$this->pass = $pass;
			global $db;
			$q = $db->query("SELECT * FROM `users` WHERE `login` = '?s'", $this->login);
			$slf = $q->fetch_object();
			if (password_verify($this->pass, $slf->pass)) {				
				setcookie('login', $this->login, time()+3600*24, '/');	
				setcookie('hash', hash('sha256', $this->login.$slf->pass), time()+3600*24, '/');
			}

		}
	}
 ?>