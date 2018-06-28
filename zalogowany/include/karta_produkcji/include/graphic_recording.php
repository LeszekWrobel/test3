<?php
	if (is_uploaded_file($_FILES['plik']['tmp_name']))
	{
		if ($_FILES['plik']['size'] > $max_rozmiar)
		{
			echo 'Plik jest za duży!';
		//	include 'form_img.php';
		} else
		{
			$zd = $_FILES['plik']['name'];//utworzenie nazwy pliku z grafiką
			include ('remove_pl.php');//usuwa polskie znaki -->
			$zd = remove_pl($zd, 'utf8'); // funkcja usuwanie polskich znaków
			move_uploaded_file($_FILES['plik']['tmp_name'],
			$katalogskr.'/img/graphics/'.$zd);
			$_SESSION['link_img'] = $zd;
			//include 'form_img.php';
		}
	}
	else
	{
		$error ='Wybierz grafikę do wyświetlenia';
		include $katalogskr.'/include/error.html.php';
	//	include 'form_img.php';
	}
?>
