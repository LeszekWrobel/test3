<?php
 if (isset($_GET['zmienne_ini']) && $_GET['zmienne_ini'] === 'clear'){include 'include/ini_session_variables.php'; //czyszczenie zmiennych sesyjnych
 }
 if (isset($_GET['mode']) && $_GET['mode'] === 'edit'){$_SESSION['mode'] = 'edit';}
 if (isset($_GET['id'])  && $_GET['id'] != '' && (isset($_GET['zmienne'])) && $_GET['zmienne'] === 'restart')
	{	// nadpisanie zmiennych sesyjnych zmiennymi z bazy po kliknięciu na numer karty produkcji w celu wykonania kopi zamówienia jako nowego do realizcji
		require_once "../include/connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0)
		{echo "Error: ".$polaczenie->connect_errno;}
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
				$_SESSION['direction_roll'] = $wiersz['nawoj'];
				$_SESSION['wymiar_x_od'] = '';
				$_SESSION['wymiar_x_do'] = 1000;
				$_SESSION['wymiar_y_do'] = 1000;
				$_SESSION['wymiar_y_od'] = '';
				$_SESSION['circulation'] = $wiersz['ilosc_do_realizacji'];
				$_SESSION['raw_material_lenght'] = '';// $wiersz['dlugosc_materialu']; //zerujemy a poniżej wyliczamy ze wzoru
				$_SESSION['form_material_width'] = '';
				$_SESSION['material_width'] = $wiersz['zalecana_szer_mat'];
				$_SESSION['link_img'] = $wiersz['grafika'];
				$_SESSION['comments_to_order'] = $wiersz['uwagi'];
				$_SESSION['print_report'] = $wiersz['raport_druku'];
				$_SESSION['id_wykrojnik'] = $wiersz['id_wykrojnik'];
				//$_SESSION['id_autora'] = $wiersz['id_autora'];
				$_SESSION['number_of_rolls'] = '';//  $wiersz['ilosc_rolek'];//zerujemy a poniżej wyliczamy ze wzoru
				$_SESSION['actual_amount_of_material_used'] = '';//  $wiersz['rzeczywista_ilosc_mat'];
				$_SESSION['scrolled_amount'] = '';//  = $wiersz['ilosc_przewinieta'];
				$_SESSION['invoice_number'] = '';// $wiersz['nr_faktury'];
				$_SESSION['end_date'] = '';//$wiersz['end_date'];
        if ($_SESSION['mode']==='edit')
          {
          	$_SESSION['date_of_completion'] = $wiersz['termin_realizacji'];// termin realizacji w trybie edycji pozostaje odczytany z bazy
            $_SESSION['date_of_edition'] = date('Y-m-d');//  $wiersz['data_aktualizacji'];
//zapis danych do bazy w trybie edycji karty produkcji
          }else{
            $_SESSION['date_of_insertion'] = '';//  $wiersz['data_dodania']; zerowanie wartości przed wprowadzeniem nowej
            $_SESSION['date_of_insertion'] = date('Y-m-d'); //date dodania nowej karty ustawiamy na aktualną date('Y-m-d');
            $_SESSION['date_of_completion'] = '';// termin realizacji w trybie tworzenia nowej karty produkcji
          }
				$_SESSION['ip_autor'] = $_SERVER['REMOTE_ADDR'];//identyfikacja ip
			}
		}

	$polaczenie->close();
	}
?>
