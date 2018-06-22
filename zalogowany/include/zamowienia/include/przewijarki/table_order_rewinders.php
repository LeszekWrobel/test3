<?php
include 'save_table_order_rewinders.php';
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
					echo '<div class="uzytkow"><b>Tulejka</b></div>';
					echo '<div class="reps"><b>Ilość e/r</b></div>';
					echo '<div class="kolory"><b>Długość rolki</b></div>';
					echo '<div class="ilosc_zebow"><b>Ilość rolek</b></div>';
					echo '<div class="termin_realizacji"><b>Termin realizacji</b></div>';
					echo '<div class="rzecz_ilosc_mat"><b>Ilość przewinięta</b></div>';
					echo '<div class="zrealizowane"><b>Zrealizowane</b></div>';

					$rezultat = @$polaczenie->query("SELECT * FROM karty_produkcji WHERE ilosc_przewinieta = 0 ORDER BY termin_realizacji DESC");
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							echo '<div class="kod_karty_prod">';
							include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							echo'</div>';
							echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
							echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
							echo '<div class="ilosc_do_realizacji"> '.$wiersz['ilosc_do_realizacji'].'</div>';
							echo '<div class="material"> '.$wiersz['material'].'</div>';
							echo '<div class="tulejka"> '.$wiersz['tulejka'].'</div>';
							echo '<div class="zalecana_szer_mat"> '.$wiersz['ilosc_er'].'</div>';
							echo '<div class="dlugosc_materialu"> '.$wiersz['dl_rolki'].'</div>';
							echo '<div class="ilosc_zebow"> '.$wiersz['ilosc_rolek'].'</div>';
							echo '<div class="termin_realizacji"> '.$wiersz['termin_realizacji'].'</div>';
							$tak = '';
							if($wiersz['ilosc_przewinieta']!='0')
								{
									echo '<div class="ilosc_przewinieta"> '.$wiersz['ilosc_przewinieta'].'</div>'; // odczyt z bazy wpisane przez drukarza
									$tak = '<img src="include/zamowienia/include/drukarki/img/checked_off.jpg" height="20px"></src>';
								}else
								{
									$tak = '<input id="submit" name="submit" type="submit" value="Tak"></input>';
									echo '<div class="ilosc_przewinieta">';
									echo '<form method="post" action="">';
									echo '<input name="id" type="hidden" value="'.$wiersz['id'].'">';
									echo '<input name="kod_karty_prod" type="hidden" value="'.$wiersz['kod_karty_prod'].'">';
									echo '<input name="scrolled_amount" size="10" placeholder=" '.$_SESSION['scrolled_amount'].'"></input>';
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
?>
