<!-- skrypt wyświetla listę kart produkcji -->
<?php
require_once "../include/connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
					$a=$_SESSION['search_kod_karty_prod'];
					$b=$_SESSION['search_nazwa_wytw'];
					$c=$_SESSION['search_nazwa_wzoru'];
					$d=$_SESSION['search_kod_ean'];

					//$rezultat =@$polaczenie->query("SELECT COUNT id FROM karty_produkcji");
					// $wiersz = $rezultat->fetch_assoc();
					// $wiersz = count($wiersz);
					// print $wiersz.'<br><br>';
					$rezultat =@$polaczenie->query("SELECT * FROM karty_produkcji WHERE kod_karty_prod LIKE '%$a%' AND nazwa_wytw LIKE '%$b%' AND nazwa_wzoru LIKE '%$c%' AND kod_ean LIKE '%$d%' ORDER BY termin_realizacji DESC");
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							$wierszy = count($wiersz);//liczba wierszy w bazie danych
							$kolumn = $wierszy/12;//liczba kolumn przy założeniu 12 rekordów w pionie w kolumnie
							// echo '<div class="kod_karty_prod"><a href="?menuadmin=karta_produkcji&zmienne=restart&id='.$wiersz['id'].'&id_wykrojnik='.$wiersz['id_wykrojnik'].'" >';
							// include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							// echo '</a>|</div>'; // dane układająsię w wiersze
?>
						<div class="container" style="border: 1px solid #ccc;">
						  <div class="row">
						    <div class="col-sm">
<?php
								echo '<div class="kod_karty_prod"><a href="?menuadmin=karta_produkcji&zmienne=restart&id='.$wiersz['id'].'&id_wykrojnik='.$wiersz['id_wykrojnik'].'" >';
								include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
								echo '</a></div>';
?>
						    </div>
						  </div>
						</div>
<?php
						}
						print $wierszy.'/12='.$kolumn.'~'.ceil($kolumn);
				?>
<?php	}
	$polaczenie->close();
?>
