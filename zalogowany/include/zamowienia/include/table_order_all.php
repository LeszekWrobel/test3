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
			<div class="order_form_grid">
<?php 	echo '<div class="item1"><b>KOD</b></div>';
				echo '<div class="dimension_y"><b>KLIENT</b></div>';
				echo '<div class="form"><b>WZÓR</b></div>';
				echo '<div class="raw_material"><b>Nakład</b></div>';
				echo '<div class="number_of_teeth"><b>Materiał</b></div>';
				echo '<div class="uzytkow"><b>Szerokość</b></div>';
				echo '<div class="reps"><b>Dł.mat. rzeczywista</b></div>';
				echo '<div class="termin_realizacji"><b>Termin realizacji</b></div>';
				echo '<div class="informacje_dodatkowe"><b>Informacje dodatkowe</b></div>';
				$a=$_SESSION['search_kod_karty_prod'];// zmienne z wyszukiwarki
				$b=$_SESSION['search_nazwa_wytw'];
				$c=$_SESSION['search_nazwa_wzoru'];
				$d=$_SESSION['search_kod_ean'];
				$rezultat =@$polaczenie->query("SELECT * FROM karty_produkcji WHERE kod_karty_prod LIKE '%$a%' AND nazwa_wytw LIKE '%$b%' AND nazwa_wzoru LIKE '%$c%' AND kod_ean LIKE '%$d%' ORDER BY termin_realizacji DESC");
				while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
					{
						echo '<a href="?menuadmin=karta_produkcji&zmienne=restart&mode=edit&id='.$wiersz['id'].'&id_wykrojnik='.$wiersz['id_wykrojnik'].'" style="background-color: rgb(216, 254, 214)">';
				?>
						<div class="kod_karty_prod">
		<?php 	include 'include/color_order_date.php'; //koloraowanie zamówien w/g data $_SESSION['mode']='edit';?>
					</div></a>
		<?php
						echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
						echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
						echo '<div class="ilosc_do_realizacji"> '.$wiersz['ilosc_do_realizacji'].'</div>';
						echo '<div class="material"> '.$wiersz['material'].'</div>';
						echo '<div class="zalecana_szer_mat"> '.$wiersz['zalecana_szer_mat'].'</div>';
						echo '<div class="rzeczywista_ilosc_mat"> '.$wiersz['rzeczywista_ilosc_mat'].'</div>';
						echo '<div class="termin_realizacji"> '.$wiersz['termin_realizacji'].'</div>';
						echo '<div class="uwagi"> '.$wiersz['uwagi'].'</div>';
					}
?>
			</div>
<?php
			echo '<a class="btn btn-primary mr-2" href="index.php?menuadmin=karta_produkcji&zmienne_ini=clear" role="button">Czyść kartę</a>';
			echo '<a class="btn btn-primary" href = "index.php?menuadmin=karta_produkcji&zmienne=restart&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" role="button">Edytuj kartę</a>';
	}
	$polaczenie->close();
?>
