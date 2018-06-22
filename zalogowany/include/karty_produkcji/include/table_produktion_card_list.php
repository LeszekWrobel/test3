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
?>
			<!--<div class="table_order_printers_grid"> -->
				<?php
					$a=$_SESSION['search_kod_karty_prod'];
					$b=$_SESSION['search_nazwa_wytw'];
					$c=$_SESSION['search_nazwa_wzoru'];
					$d=$_SESSION['search_kod_ean'];
					$rezultat =@$polaczenie->query("SELECT * FROM karty_produkcji WHERE kod_karty_prod LIKE '%$a%' AND nazwa_wytw LIKE '%$b%' AND nazwa_wzoru LIKE '%$c%' AND kod_ean LIKE '%$d%' ORDER BY termin_realizacji DESC");
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							// echo '<div class="kod_karty_prod">'.$wiersz['kod_karty_prod'].'</div>';
							echo '<a href="?menuadmin=karta_produkcji&zmienne=restart&id='.$wiersz['id'].'&id_wykrojnik='.$wiersz['id_wykrojnik'].'" ><div class="kod_karty_prod">';
							include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							echo'</div></a>';
						}
				?>
			<!-- </div> -->
<?php	}
	$polaczenie->close();
?>
