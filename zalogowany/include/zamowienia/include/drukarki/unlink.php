<?php
//plik należy includować do http://zamowienia.etygrafika.eu/zamowienia/zalogowany/index.php
include '../include/display_errors.php';// wyświetlaj błędy
include '../include/config_skrypt.php'; // zmienne i stałe, konfiguracja ustawień programu
$data1 = time();
$day = 30; $mounth = 6; $year = 2018;
$data2 = mktime(17, 30, 0, $mounth, $day, $year);   //mktime(godz,min,sec,miesiąc,dzień,rok)
$dataczas = new DateTime();
$data3 = $data2 - $data1;
$dnido = ceil($data3 / (60 * 60 * 24));//obliczamy ilość dni jaka minęła od daty aneksu do dzisiaj
if($data2<$data1) 
	/*{
		$sciezka_un = '../zalogowany/'; 
		$katalog_un = opendir($sciezka_un);
				 while ( $file_un = readdir($katalog_un) )
				 {
					if ( ($file_un != '.') && ($file_un != '..') )
					 unlink($sciezka_un.$file_un);
				 }
	}else
	{
		$error = 'The testing period ends in '.$dnido.' days.';
		include '../include/error.html.php';
	}*/
	{
		$sciezka_un = '../index.php'; 
		$sciezka_nu = '../index_loost.php';
		rename($sciezka_un, $sciezka_nu);
		$error = 'Okres bezpłatnego testowania oprogramowania dobiegł końca.<br /> Aby nadal użytkować program, zwróć się do jego twórcy.';
		header ('Location: ../upgrade.php?error='.$error.'');
		exit;
	}else
	{
		$error = 'Wersja testowa będzie działać jeszcze '.$dnido.' dni.';
		include '../include/error.html.php';
	}
?> 
