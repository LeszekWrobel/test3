<?php
include 'kalendarz.php';
include 'save_form_completed.php';
require_once "../include/connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
?>
			<div class="table_order_printers_grid">
				<?php
					echo '<div class="item1"><b>KOD</b></div>';
					echo '<div class="dimension_y"><b>KLIENT</b></div>';
					echo '<div class="form"><b>WZÓR</b></div>';
					echo '<div class="raw_material"><b>Nakład</b></div>';
					echo '<div class="number_of_teeth"><b>Materiał</b></div>';
					echo '<div class="data_realizacji"><b>Data realizacji</b></div>'; // wpisać z kalendarza
					echo '<div class="zrealizowane"><b>Zrealizowane</b></div>';
					echo '<div class="uzytkow"><b>Szerokość</b></div>';
					echo '<div class="reps"><b>Zużycie materiału</b></div>';
					echo '<div class="kolory"><b>Ilość przewinięta</b></div>';
					echo '<div class="ilosc_zebow"><b>Faktura</b></div>';
					echo '<div class="rzecz_ilosc_mat"><b>Faktura</b></div>';


					$rezultat = @$polaczenie->query("SELECT * FROM karty_produkcji WHERE ilosc_przewinieta != 0 ORDER BY termin_realizacji DESC");
					$nr_kal = 1; //inicjacja nr kalendarza
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							echo '<div class="kod_karty_prod">';
							include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							echo'</div>';
							echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
							echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
							echo '<div class="ilosc_do_realizacji"> '.$wiersz['ilosc_do_realizacji'].'</div>';
							echo '<div class="material"> '.$wiersz['material'].'</div>';

							$end_date = strtotime($wiersz['end_date']);
							$time = date("H:i", $end_date);
							$date = date("Y-m-d",$end_date);
							if($wiersz['end_date']!= 0)
								{
									echo '<div class="end_date"> '.$date.'<br />'.$time.'</div>'; // odczyt z bazy wpisane przez fakturzystę
									$tak = '<img src="include/zamowienia/include/drukarki/img/checked_off.jpg" height="20px"></src>';
								}else
								{
									$tak = '';
									// $tak = '<input id="submit" name="submit_date" type="submit" value="Tak"></input>';
									 echo '<div class="end_date">';
									// echo '<form method="post" action="">';
									// echo '<input name="id" type="hidden" value="'.$wiersz['id'].'">';
									// echo'<input name="end_date" id="indexjQueryDatePicker'.$nr_kal.'" style="" size="8"  placeholder=" '.$_SESSION['end_date'].'">';
									 echo '</div>'; // wpisuje drukarz
								}
									//$wiersz=$wiersz['end_date'];
									//$data=date($wiersz);
									//$data = date("Y-m-d", $wiersz['end_date']);
									//$czas = date("H:i",  $wiersz['end_date']);
									//$czas=date("H:i");
									//echo '<div class="material"> '.$wiersz['end_date'].'</div>';
									echo '<div class="zrealizowane">';
									echo $tak;
									echo '</div>';
									//echo '</form>';
							$nr_kal = $nr_kal + 1; //inkrementacja kalendarza
							echo '<div class="zalecana_szer_mat"> '.$wiersz['zalecana_szer_mat'].'</div>';
							echo '<div class="dlugosc_materialu"> '.$wiersz['rzeczywista_ilosc_mat'].'</div>';
							echo '<div class="ilosc_zebow"> '.$wiersz['ilosc_przewinieta'].'</div>';
							$tak = '';
							if($wiersz['nr_faktury']!='')
								{
									echo '<div class="nr_faktury"> '.$wiersz['nr_faktury'].'</div>'; // odczyt z bazy wpisane przez fakturzystę
									$tak = '<img src="include/zamowienia/include/drukarki/img/checked_off.jpg" height="20px"></src>';
								}else
								{
									$tak = '<input id="submit" name="submit_invoice" type="submit" value="Tak"></input>';
									echo '<div class="nr_faktury">';
									echo '<form method="post" action="">';
									echo '<input name="id" type="hidden" value="'.$wiersz['id'].'">';
									echo '<input name="nazwa_wytw" type="hidden" value="'.$wiersz['nazwa_wytw'].'">';
									echo '<input name="invoice_number" size="10" placeholder=" '.$_SESSION['invoice_number'].'"></input>';
									echo '</div>'; // wpisuje drukarz
								}
									echo '<div class="zrealizowane">';
									echo $tak;
									echo '</div>';
									echo '</form>';

						}
				?>
			</div>
<?php	}
	$polaczenie->close();
?>
