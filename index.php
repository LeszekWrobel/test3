<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Logowanie</title>
<!-- dane wejściowe dla całego skryptu.   START   --> 
<?php
include 'include/display_errors.php';// wyświetlaj błędy
include 'include/config_skrypt.php'; // zmienne i stałe, konfiguracja ustawień programu
?>
<!-- dane wjściowe dla całego skryptu.    END   ---->
<?php include 'include/head_noindex.php'; // head noindex ?>
</head>
<body>
<div id="baner">
<?php include 'include/baner.php'; ?>
</div>
<div id="admin">
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include 'zalogowany/include/ini_session_variables.php'; // inicjowanie zmiennych sesyjnych

	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		include("include/formlogowanie.php");
		exit();
	}
	else
	{
		include("include/connect.php");
		//require_once "include/connect.php";
		$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);  //@
		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];

			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
			$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		//
			if ($rezultat = @$polaczenie->query(
			sprintf("SELECT * FROM $tabela_uzyt WHERE user='%s' AND pass='%s'",
			mysqli_real_escape_string($polaczenie,$login),
			mysqli_real_escape_string($polaczenie,$haslo))))
			{
				$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0)
				{
					$_SESSION['zalogowany'] = true;

					$wiersz = $rezultat->fetch_assoc();

					$_SESSION['login'] = $wiersz['user'];
					$_SESSION['haslo'] = $wiersz['pass'];
					$_SESSION['id_autora'] = $wiersz['id'];
					unset($_SESSION['blad']);//usuwa zmienną błąd
					$rezultat->free_result();
					header('Location: zalogowany/index.php');
				} else
				{
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					include("include/formlogowanie.php");
				}
				$_SESSION['zalogowany'] = true;
				header('Location: zalogowany/index.php?menuadmin=zamowienia_wszystkie');
			}
			$polaczenie->close();
		}
	}
include("include/formlogowanie.php");
?>
</div> <!-- div admin koniec-->
</body>
</html>
