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
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="bg-secondary">
	<?php 	echo '<th><div class="dimension_x">Wymiar X mm</th></div>';
					echo '<th><div class="dimension_y">Wymiar Y mm</th></div>';
					echo '<th><div class="form">Kształt</th></div>';
					echo '<th><div class="raw_material">Materiał</th></div>';
					echo '<th><div class="number_of_teeth">Ilość zębów</th></div>';
					echo '<th><div class="uzytkow">Użytków</th></div>';
					echo '<th><div class="reps">Powtórzeń</th></div>';
					echo '<th><div class="radius">Promień</th></div>';
					echo '<th><div class="informacje_dodatkowe">Wybierz</th></div>';
					echo '<th><div class="informacje_dodatkowe">Edytuj</th></div>';
				?>
				</tr>
			</thead>
			<tbody>
<?php

	 $a=$_SESSION['wymiar_x_od'];
	 $b=$_SESSION['wymiar_x_do'];
	 $c=$_SESSION['wymiar_y_od'];
	 $d=$_SESSION['wymiar_y_do'];
	// $rezultat =@$polaczenie->query("SELECT * FROM karty_produkcji WHERE kod_karty_prod LIKE '%$a%' AND nazwa_wytw LIKE '%$b%' AND nazwa_wzoru LIKE '%$c%' AND kod_ean LIKE '%$d%' ORDER BY termin_realizacji DESC");

					$rezultat = @$polaczenie->query("SELECT * FROM wykrojniki WHERE (dimension_x >= '$a') AND (dimension_x <= '$b') AND (dimension_y >= '$c') AND (dimension_y <= '$d') ORDER BY dimension_x ASC"); //
					while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
						{
							?><tr><?php
							echo '<td><div class="dimension_x">'.$wiersz['dimension_x'].'</div></td>';
							echo '<td><div class="dimension_y"> '.$wiersz['dimension_y'].'</div></td>';
							echo '<td><div class="form"> '.$wiersz['form'].'</div></td>';
							echo '<td><div class="raw_material"> '.$wiersz['raw_material'].'</div></td>';
							echo '<td><div class="number_of_teeth"> '.$wiersz['number_of_teeth'].'</div></td>';
							echo '<td><div class="uzytkow"> '.$wiersz['uzytkow'].'</div></td>';
							echo '<td><div class="reps"> '.$wiersz['reps'].'</div></td>';
							echo '<td><div class="radius"> '.$wiersz['radius'].'</div></td>';
							echo '<td><div class="choice"> <a href="?menuadmin=karta_produkcji&id_wykrojnik='.$wiersz['id'].'"><button type="button" class="btn btn-success">Wybierz</button>
</a></div></td>' ;
							echo '<td><div class="edit"> <a href="?menuadmin=edytuj_wykrojnik&id_wykrojnik='.$wiersz['id'].'"><button type="button" class="btn btn-warning">Edytuj</button></a></div></td>' ;
							?></tr><?php
						}
						?>
			</tbody>
		</table>
		<?php	}
$polaczenie->close();
?>
