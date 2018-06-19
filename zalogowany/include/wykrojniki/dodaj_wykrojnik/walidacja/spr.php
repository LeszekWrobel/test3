<?php
if (isset($_POST['submit']) && ($_POST['submit']) =='Dodaj') {$link = 'include/wykrojniki/dodaj_wykrojnik/form_add_punch.php';} //link gdy dodajemy
if (isset($_POST['submit']) && ($_POST['submit']) =='Zmień') {$link = 'include/wykrojniki/edytuj_wykrojnik/include/form_edit_punch.php';}   // link gdy edytujemy

	// - - - - sprawdzenie ilości znaków w opisie START - - - - - -
/*			$zm = strlen($opis);
		if ($zm >= 0 && $zm <= 455) 
		{  //napis o długości od 1 do 455 znaków
		} else 
		{
			$error = '<br />Zbyt długi opis składa się z '.$zm.' znaków<br /><small>Możesz użyć maksymalnie 455 znaków.</small> ';
			include $katalogskr.'/include/error.html.php'; // wyświetlenie błędu, napis pusty lub zbyt długi
			include 'form_add_punch.php'; // wyświetlenie formularza do poprawy
			exit;
		}
*/			// - - - - sprawdzenie ilości znaków w opisie STOP - - - - - -
		if(!(preg_match ($sprawdzdimension_x, $dimension_x)))
		{
			$error = '<br />Sprawdź pole "Wymiar X mm".';
			include $katalogskr.'/include/error.html.php'; 
			include $link; 
			exit;
		} else {}

		if(!(preg_match ($sprawdzdimension_y, $dimension_y)))
		{
			$error = '<br />Sprawdź pole "Wymiar Y mm."';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
		if(!(preg_match ($sprawdzform, $form)))
		{
			$error = '<br />Sprawdź pole "Kształt."';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		}else{}
		if(!(preg_match ($sprawdzraw_material, $raw_material)))
		{
			$error = '<br />Sprawdź pole "Materiał".';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
		if(!(preg_match ($sprawdznumber_of_teeth, $number_of_teeth)))
		{
			$error = '<br />Sprawdź pole "Ilość zębów".';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
		if(!(preg_match ($sprawdzuzytkow, $uzytkow)))
		{
			$error = '<br />Sprawdź pole "Użytków".';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
		if(!(preg_match ($sprawdzreps, $reps)))
		{//napis o długości 11 znaków
			$error = '<br />Sprawdź pole "Powtórzeń".';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
			} else {}
		if(!(preg_match ($sprawdzradius, $radius)))
		{
			$error = '<br />Sprawdź pole "Promień".';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
/*		
		if(!(preg_match ($sprawdzadres, $adres)))
		{
			$error = '<br />Sprawdź pole Adres.<br /><small>Wpisz na przykład: ul. A.F.Modrzewskiego 2 m.10u</small>';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}			
		if(!(preg_match ($sprawdztel, $tel)))
		{
			$error = '<br />Sprawdź pole Telefon.<br /><small>Zapisz 9 cyfr w formacie XXXXXXXXX</small>';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
		if(!(preg_match ($sprawdzmail, $mail)))
		{
			$error = '<br />Sprawdź pole Mail.';
			include $katalogskr.'/include/error.html.php'; 
			include $link;  // wyświetlenie formularza do poprawy
			exit;
		} else {}
*/
?>