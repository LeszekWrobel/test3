<?php
 if(isset($_GET['zmienne_ini']) && $_GET['zmienne_ini'] === 'clear')
{
	include 'include/ini_session_variables.php'; //czyszczenie zmiennych sesyjnych
}
 if (isset($_GET['mode']) && $_GET['mode'] === 'edit'){$_SESSION['mode'] = 'edit';}
//if ($_SESSION['mode']==='edit')
// 	{
// 		$yes='<small>Tryb podglądu i edycji</small>';
// 		include $katalogskr.'/include/yes.html.php';
// 	}else{}
if(isset($_GET['id'])  && $_GET['id'] != '' && (isset($_GET['zmienne'])) && $_GET['zmienne'] === 'restart')
	{
		// nadpisanie zmiennych sesyjnych zmiennymi z bazy po kliknięciu na numer karty produkcji w celu wykonania kopi zamówienia jako nowego do realizcji
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
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['kod_karty_prod'] = $wiersz['kod_karty_prod'];//   $wiersz['kod_karty_prod'];
				$_SESSION['nazwa_wytw'] = $wiersz['nazwa_wytw'];
				$_SESSION['nazwa_wzoru'] = $wiersz['nazwa_wzoru'];
				$_SESSION['kod_ean'] = $wiersz['kod_ean'];
				$_SESSION['link_img'] = $wiersz['grafika'];
				$_SESSION['paper'] = $wiersz['material'];
				$_SESSION['glue'] = $wiersz['klej'];
				$_SESSION['quantity_er'] = $wiersz['ilosc_er'];
				$_SESSION['bush'] = $wiersz['tulejka'];
				$_SESSION['ilosc_uzytkow'] = $wiersz['ilosc_uzytkow'];
				$_SESSION['roll_length'] = $wiersz['dl_rolki'];
				$_SESSION['kolor'] = explode( ",",$wiersz['kolory'] ); // tablica kolorów
				$i = 0 ;	// licznik kolorów
				foreach($_SESSION['kolor'] as $value) // wyświetlenie zapisanych w tablicy kolorów
				{ if($value!='' ) // aby seperatory nie były wyświetlane gdy polo koloru jest puste
				  {  $i++;  }
				}
				$_SESSION['ilosc_kolorow'] = $i ; // zapisanie ilości kolorów do sesji
				//print $_SESSION['ilosc_kolorow'];
				//$_POST['kolor'] = '';
				$_SESSION['direction_roll'] = $wiersz['nawoj'];
				// $_SESSION['wymiar_x_od'] = '';
				// $_SESSION['wymiar_x_do'] = '';
				// $_SESSION['wymiar_y_do'] = '';
				// $_SESSION['wymiar_y_od'] = '';
				$_SESSION['circulation'] = $wiersz['ilosc_do_realizacji'];
				$_SESSION['termin'] = '';//   $wiersz['termin_realizacji'];

				$_SESSION['date_of_completion'] = '';//  $wiersz['termin_realizacji'];
				$_SESSION['raw_material_lenght'] = '';// $wiersz['dlugosc_materialu']; //zerujemy a poniżej wyliczamy ze wzoru
				$_SESSION['form_material_width'] = '';
				$_SESSION['material_width'] = $wiersz['zalecana_szer_mat'];
				$_SESSION['link_img'] = $wiersz['grafika'];
				$_SESSION['comments_to_order'] = $wiersz['uwagi'];
				$_SESSION['print_report'] = $wiersz['raport_druku'];
				$_SESSION['date_of_insertion'] = '';//  $wiersz['data_dodania'];
				$_SESSION['date_of_edition'] = '';//  $wiersz['data_aktualizacji'];
				$_SESSION['id_wykrojnik'] = $wiersz['id_wykrojnik'];
				//$_SESSION['id_autora'] = $wiersz['id_autora'];
				$_SESSION['number_of_rolls'] = '';//  $wiersz['ilosc_rolek'];//zerujemy a poniżej wyliczamy ze wzoru
				$_SESSION['actual_amount_of_material_used'] = '';//  $wiersz['rzeczywista_ilosc_mat'];
				$_SESSION['scrolled_amount'] = '';//  = $wiersz['ilosc_przewinieta'];
				$_SESSION['invoice_number'] = '';// $wiersz['nr_faktury'];
				$_SESSION['end_date'] = '';//$wiersz['end_date'];
				$_SESSION['date_of_insertion'] = date('Y-m-d'); //date dodania ustawiamy na aktualną date('Y-m-d');
				$_SESSION['ip_autor'] = $_SERVER['REMOTE_ADDR'];//identyfikacja ip
			//	header ('Location: ?menuadmin=karta_produkcji&id_wykrojnik='.$wiersz['id_wykrojnik'].'');

				// obliczamy i ustawiamy pozostałe zmienne:
				// $_SESSION['raw_material_lenght']=($_SESSION['circulation']/$_SESSION['uzytkow'])*($_SESSION['number_of_teeth']*3.175/$_SESSION['reps'])+($_SESSION['ilosc_kolorow']*25)+40;   // długość materiału
				// $_SESSION['raw_material_lenght']=round($_SESSION['raw_material_lenght'],2);
				// $_SESSION['number_of_rolls']=$_SESSION['circulation']*1000/$_SESSION['quantity_er'];   //ilość rolek
				// $_SESSION['number_of_rolls']=ceil($_SESSION['number_of_rolls']);
				//$_SESSION['date_of_edition'] = '';
				//$_SESSION['id_autora'] ;

				//$_GET['id_wykrojnik']
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
				// $_SESSION['radius'] = $wiersz['radius'];  "?menuadmin=edytuj_wykrojnik&id_wykrojnik='.$wiersz['id'].'"
			// }

		}

	$polaczenie->close();
	}
?>
