<?php
if (isset($_POST['submit']) && ($_POST['submit']) =='Zmien')
	{
		$id = $_SESSION['id'];
		if ($_POST['dimension_x']!='') {$_SESSION['dimension_x'] = $_POST['dimension_x'];}
		if ($_POST['dimension_y']!='') {$_SESSION['dimension_y'] = $_POST['dimension_y'];}
		if ($_POST['form']!='') {$_SESSION['form'] = $_POST['form'];}
		// grafika strt
		if (is_uploaded_file($_FILES['plik']['tmp_name']))
		{
				$max_rozmiar = 3024*3024;
			if ($_FILES['plik']['size'] > $max_rozmiar)
			{
				echo 'Plik jest za duży!';
			//	include 'form_img.php';
			} else
			{
				$zd = $_FILES['plik']['name'];//utworzenie nazwy pliku z grafiką
				include ('include/karta_produkcji/include/remove_pl.php');//usuwa polskie znaki -->
				$zd = remove_pl($zd, 'utf8'); // funkcja usuwanie polskich znaków
				move_uploaded_file($_FILES['plik']['tmp_name'],
				$katalogskr.'/img/punch/'.$zd);
				$_SESSION['form_link'] = $zd;
				//include 'form_img.php';
			}
		}
		else
		{
			$error ='Wybierz grafikę do wyświetlenia';
			include $katalogskr.'/include/error.html.php';
		//	include 'form_img.php';
		}
	// grafika stop
		if ($_POST['raw_material']!='') {$_SESSION['raw_material'] = $_POST['raw_material'];}
		if ($_POST['number_of_teeth']!='') {$_SESSION['number_of_teeth'] = $_POST['number_of_teeth'];}
		if ($_POST['uzytkow']!='') {$_SESSION['uzytkow'] = $_POST['uzytkow'];}
		if ($_POST['reps']!='') {$_SESSION['reps'] = $_POST['reps'];}
		if ($_POST['radius']!='') {$_SESSION['radius'] = $_POST['radius'];}
		include $katalogskr.'/zalogowany/include/wykrojniki/dodaj_wykrojnik/walidacja/walidacja.php';
		include $katalogskr.'/zalogowany/include/wykrojniki/dodaj_wykrojnik/walidacja/spr.php';
		$data_aktualizacji = date('Y-m-d'); //date dodania ustawiamy na aktualną date('Y-m-d');
		$id_autora=$_SESSION['id_autora'];
		$ip_autora=$_SERVER['REMOTE_ADDR'];//identyfikacja ip
			 //include("../include/connect.php");
			require_once "../include/connect.php";
			$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);//
						if ($polaczenie->query("UPDATE wykrojniki SET nr=$nr,dimension_x=$dimension_x,dimension_y=$dimension_y,form='$form',form_link='$form_link',raw_material='$raw_material',number_of_teeth=$number_of_teeth,uzytkow=$uzytkow,reps=$reps,radius=$radius,data_aktualizacji='$data_aktualizacji',id_autora=$id_autora,ip_autora='$ip_autora' WHERE id=$id "))
						{
							$_SESSION['udanarejestracja']=true;
							header('Location: ?menuadmin=wykrojniki&yes=Zmiany zostały zapisane.');
						}
						else
						{
							throw new Exception($polaczenie->error);
						}
			$polaczenie->close();
		include '?menuadmin=wykrojniki';
	}
	else
	{
		include 'form_edit_punch.php';
	}
?>
