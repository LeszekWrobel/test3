<!DOCTYPE html>
<html lang="pl">
	<head>
		 <title>Wylogowany</title>
			<!-- dane wejściowe dla całego skryptu. - - -   START   - - -->
			<?php
				include 'include/config_skrypt.php'; // zmienne i stałe, konfiguracja ustawień programu
				include 'include/display_errors.php';// wyświetlaj błędy
			?>
			<!-- dane wjściowe dla całego skryptu. - - -   END   - - - -   -->
			<?php include 'include/head_noindex.php'; // head noindex ?>
	</head>
	<body>
		<div id="baner">
			<?php include 'include/baner.php'; ?>
		</div>
		<div id="admin">
			<?php
			//	include 'include/unlink.php'; // usuwanie grafiki pomocniczej
			/*// usuwanie zmiennej
			unset($_SESSION['nazwa_zmiennej']);*/
			/*// usuwanie wszystkich zmiennych z $_SESSION
			$_SESSION = array();*/
			/*// zniszczenie sesji
			session_destroy();*/

			$yes = '<br>Zostałeś wylogowany.<br>';
			include 'include/yes.html.php';
			echo '<a style="margin-left:25px" href="zalogowany/index.php">Logowanie</a>';
			?>
		</div> <!-- div admin koniec-->
	</body>
</html>
