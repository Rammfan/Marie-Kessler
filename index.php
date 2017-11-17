<?php require_once "tmp/up.php";?>

<div class="content">
	<div class="cont-head">
		Войти в систему
	</div>
	<div class="cont-menu">
		<?php 
			if (($id['Ident']) && ($id['verify']==0)) {
				require_once "tmp/migrant-menu.php"; 
			}
			else if (($id['Ident']) && ($id['verify']==1)) {
				require_once "tmp/admin-menu.php";
			}
				
		?>
	</div>
	<div class="cont-body">
		<?php require_once "tmp/auth-form.php"; ?>
	</div>
</div>

<?php require_once "tmp/down.php"; ?>


<?php /*
	include "path"; - подкл файл
	require 'path'; - подкл файл и проверяет его существование
	require_once 'path'; - тоже самое что и require , но подкл только один раз
*/ ?>
