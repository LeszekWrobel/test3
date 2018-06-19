<?php
// nadpisanie zmiennych sesyjnych zmiennymi z bazy po kliknięciu na numer karty produkcji w celu wykonania kopi zamówienia jako nowego do realizcji
if(isset($_GET['id'])  && $_GET['id'] != '' && (isset($_GET['zmienne'])) && $_GET['zmienne'] === 'restart')
	{
		require_once "../include/connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
			$id =$_GET['id'];
			$rezultat = @$polaczenie->query("SELECT * FROM karty_produkcji WHERE id=$id ORDER BY termin_realizacji DESC");
			while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
			{
				include 'include/karty_produkcji/include/ini_edi_variables.php';
				header ('Location: ?menuadmin=karta_produkcji&id_wykrojnika='.$wiersz['id_wykrojnik'].'');

				//$_GET['id_wykrojnika']
			}
			// $id =$_SESSION['id_wykrojnik'];

			// $rezultat = @$polaczenie->query("SELECT * FROM wykrojniki WHERE id=$id ");
			// while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
			// {
				//WYKROJNIKI

				// $_SESSION['dimension_x'] = $wiersz['dimension_x'];
				// $_SESSION['dimension_y'] = $wiersz['dimension_y'];
				// $_SESSION['form'] = $wiersz['form'];
				// $_SESSION['raw_material'] = $wiersz['raw_material'];
				// $_SESSION['number_of_teeth'] = $wiersz['number_of_teeth'];
				// $_SESSION['uzytkow'] = $wiersz['uzytkow'];;
				// $_SESSION['reps'] = $wiersz['reps'];
				// $_SESSION['radius'] = $wiersz['radius'];  "?menuadmin=edytuj_wykrojnik&id_wykrojnika='.$wiersz['id'].'"
			// }

		}

	$polaczenie->close();
	}
?>
