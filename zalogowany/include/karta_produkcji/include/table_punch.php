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
				<div class="container">
				<div class="grid-container5">
				<!-- <div class="row">
								<div class="col-md-5"> -->
<?php 				echo '<div class="col"><b>Wymiar X mm</b></div>'; // nagłówki kolumn x5
					echo '<div class="col"><b>Wymiar Y mm</b></div>';
					echo '<div class="col"><b>Ilość zębów</b></div>';
					echo '<div class="col"><b>Użytków</b></div>';
					echo '<div class="col"><b>Powtórzeń</b></div>';
					if(isset($_GET['id_wykrojnika'])) // sprawdza czy dane o wykrojniku są importowane z zakładki wykrojniki
						{	$id_wykrojnika = $_GET['id_wykrojnika']; // odczytujemy id wykrojnika

							$rezultat = @$polaczenie->query("SELECT * FROM wykrojniki WHERE id=$id_wykrojnika"); //
							while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
								{
									echo '<div class="dimension_x">'.$wiersz['dimension_x'].'</div>'; //wyświetlamy record "dimension_x"
									$_SESSION['dimension_x']=$wiersz['dimension_x']; // zapisujemy do sesji
									echo '<div class="dimension_y"> '.$wiersz['dimension_y'].'</div>';
									$_SESSION['dimension_y']=$wiersz['dimension_y'];
									echo '<div class="number_of_teeth"> '.$wiersz['number_of_teeth'].'</div>';
									$_SESSION['number_of_teeth']=$wiersz['number_of_teeth'];
									echo '<div class="uzytkow"> '.$wiersz['uzytkow'].'</div>';
									$_SESSION['uzytkow']=$wiersz['uzytkow'];
									echo '<div class="reps"> '.$wiersz['reps'].'</div>';
									$_SESSION['reps']=$wiersz['reps'];

									$_SESSION['id_wykrojnik']=$id_wykrojnika; //przenosimy do sesji pozostałe dane wybranego wykrojnika
									$_SESSION['form']=$wiersz['form'];
									$_SESSION['raw_material']=$wiersz['raw_material'];
									$_SESSION['radius']=$wiersz['radius'];
								}
						}else 				//aby wyświetlić aktualnie wybrany wykrojnik pobieramy dane z sesji
						{	}
?>
				</div>
			</div>
<?php
	}
$polaczenie->close();
?>
