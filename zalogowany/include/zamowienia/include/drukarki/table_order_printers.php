<?php
include 'save_table_order_printers.php';
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
					echo '<div class="kod"><b>KOD</b></div>';
					echo '<div class="klient"><b>KLIENT</b></div>';
					echo '<div class="form"><b>WZÓR</b></div>';
					echo '<div class="raw_material"><b>Nakład</b></div>';
					echo '<div class="number_of_teeth"><b>Materiał</b></div>';
					echo '<div class="uzytkow"><b>Szerokość</b></div>';
					echo '<div class="reps"><b>Długość materiału</b></div>';
					echo '<div class="termin_realizacji"><b>Termin realizacji</b></div>';
					echo '<div class="kolory"><b>Kolory</b></div>';

					echo '<div class="ilosc_zebow"><b>Ilość zębów</b></div>';
					echo '<div class="rzecz_ilosc_mat"><b>Dł.mat. rzeczywista</b></div>';
					echo '<div class="zrealizowane"><b>Zrealizowane</b></div>';
					$rezultat = @$polaczenie->query("SELECT * FROM karty_produkcji WHERE rzeczywista_ilosc_mat = 0 ORDER BY termin_realizacji DESC");
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							echo '<div class="kod_karty_prod">';
							include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							echo'</div>';
							echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
							echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
							echo '<div class="ilosc_do_realizacji"> '.$wiersz['ilosc_do_realizacji'].'</div>';
							echo '<div class="material"> '.$wiersz['material'].'</div>';
							echo '<div class="zalecana_szer_mat"> '.$wiersz['zalecana_szer_mat'].'</div>';
							echo '<div class="dlugosc_materialu"> '.$wiersz['dlugosc_materialu'].'</div>';
							echo '<div class="termin_realizacji"> '.$wiersz['termin_realizacji'].'</div>';
							echo '<div class="kolory">';
							$kolory = explode( ",",$wiersz['kolory'] ); // tablica kolorów
							foreach($kolory as $value)	{	if($value!='' )	{	print ' | '.$value;	}	}
							print ' | ';
							echo '</div>';
							echo '<div class="ilosc_zebow"> '.$wiersz['ilosc_zebow'].'</div>';
							$tak = ''; 
							if($wiersz['rzeczywista_ilosc_mat']!='0')
								{
									echo '<div class="rzecz_ilosc_mat"> '.$wiersz['rzeczywista_ilosc_mat'].'</div>'; // odczyt z bazy wpisane przez drukarza
									$tak = '<img src="include/zamowienia/include/drukarki/img/checked_off.jpg" height="20px"></src>';
								}else
								{
									// <!-- <input id="submit" class="btn btn-danger btn-block" data-toggle="modal" data-target="#zpiz" value=" Zmień, Przelicz i Zapisz "> -->
								 // <!-- Button trigger modal -->
								 // <!-- <a class="btn btn-primary" href="#drukarki" role="button">Link</a> -->
									// <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#drukarki">
									//  Launch demo modal
								 // </button>
								  $tak = '<input id="submit" name="submit" type="submit" value="Tak"></input>';// tak działa bez modali
								 //$tak = '<button  name="submit" type="button" value="'.$wiersz['id'].'"  data-toggle="modal" data-target="#drukarki"></button>';
								//	$tak = '<input name="button" type="button" value="Tak"  data-toggle="modal" data-target="#drukarki" ></input>';
									echo '<div class="rzecz_ilosc_mat">';
									echo '<form method="post" action="">';
									echo '<input name="id" type="hidden" value="'.$wiersz['id'].'">';
									echo '<input name="kod_karty_prod" type="hidden" value="'.$wiersz['kod_karty_prod'].'">';
									echo '<input name="actual_amount_of_material_used" size="10" placeholder=" '.$_SESSION['actual_amount_of_material_used'].'"></input>';
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
