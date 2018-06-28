<?php
if(isset($_GET['id_wykrojnik'])) // sprawdza czy dane o wykrojniku są importowane z edytuj wykrojnik
{
	$id_wykrojnik = $_GET['id_wykrojnik']; // odczytujemy id wykrojnika
	require_once "../include/connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
			$rezultat = @$polaczenie->query("SELECT * FROM wykrojniki ORDER BY id ASC"); // szukamy w bazie wykrojnika o id
			while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
				{
					if($wiersz['id']==$id_wykrojnik)
						{
							$_SESSION['dimension_x']=$wiersz['dimension_x']; // zapisujemy do sesji
							$_SESSION['dimension_y'] =$wiersz['dimension_y'];
							$_SESSION['form'] =$wiersz['form'];
							$_SESSION['raw_material'] =$wiersz['raw_material'];
							$_SESSION['form_link'] =$wiersz['form_link'];
							$_SESSION['number_of_teeth'] =$wiersz['number_of_teeth'];
							$_SESSION['uzytkow'] =$wiersz['uzytkow'];
							$_SESSION['reps'] =$wiersz['reps'];
							$_SESSION['radius'] =$wiersz['radius'];
							$_SESSION['id'] =$wiersz['id'];
?>
							<div class="container">
							  <form method="post" action="" ENCTYPE="multipart/form-data">
									<label><b>Edycja wykrojnika</b></label><br />
									<div class="row">
						        <div class="col-sm">
											<label>Wymiar X mm</label><br />
											<?php echo '<input name="dimension_x"  placeholder=" '.$_SESSION['dimension_x'].'" ><br />';?>
											<label>Wymiar Y mm</label><br />
											<?php echo '<input name="dimension_y"  placeholder=" '.$_SESSION['dimension_y'].'"><br />';?>
											<label>Kształt</label><br />
											<?php echo '<input name="form"  placeholder=" '.$_SESSION['form'].'"><br />';?>
											<label>Materiał</label><br />
											<?php echo '<input name="raw_material"  placeholder=" '.$_SESSION['raw_material'].'"><br />';?>
										</div>
										<div class="col-sm">
											<?php  //FORMULARZ - START
										         echo '<tr><td><input type="file" name="plik"/></td><td><br />';// grafika wykrojnika
										    // STOP -formularz dodawania grafiki
										         echo '<img style height="330px" src="../img/punch/'.$_SESSION['form_link'].'">';
										?>
						        </div>
										<div class="col-sm">
											<label>Ilość zębów</label><br />
											<?php echo '<input name="number_of_teeth"  placeholder=" '.$_SESSION['number_of_teeth'].'" ><br />';?>
											<label>Użytków</label><br />
											<?php echo '<input name="uzytkow"  placeholder=" '.$_SESSION['uzytkow'].'"><br />';?>
											<label>Powtórzeń</label><br />
											<?php echo '<input name="reps"  placeholder=" '.$_SESSION['reps'].'"><br />';?>
											<label>Promień</label><br />
											<?php echo '<input name="radius"  placeholder=" '.$_SESSION['radius'].'"><br />';?>
										</div>
									</div>
									<input id="submit" name="submit" type="submit" value="Zmien">
							</form>
						</div>
<?php
						}
				}
		}
	$polaczenie->close();
}else 				//aby wyświetlić aktualnie wybrany wykrojnik pobieramy dane z sesji
{
	echo 'gdy id wykrojnika jest nie znane';
}
?>
