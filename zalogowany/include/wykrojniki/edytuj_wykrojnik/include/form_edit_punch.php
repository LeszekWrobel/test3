<?php	
if(isset($_GET['id_wykrojnika'])) // sprawdza czy dane o wykrojniku są importowane z edytuj wykrojnik
{	
	$id_wykrojnika = $_GET['id_wykrojnika']; // odczytujemy id wykrojnika
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
					if($wiersz['id']==$id_wykrojnika)
						{
							$_SESSION['dimension_x']=$wiersz['dimension_x']; // zapisujemy do sesji
							$_SESSION['dimension_y'] =$wiersz['dimension_y'];
							$_SESSION['form'] =$wiersz['form'];
							$_SESSION['raw_material'] =$wiersz['raw_material'];
							$_SESSION['number_of_teeth'] =$wiersz['number_of_teeth'];
							$_SESSION['uzytkow'] =$wiersz['uzytkow'];
							$_SESSION['reps'] =$wiersz['reps'];
							$_SESSION['radius'] =$wiersz['radius'];
							$_SESSION['id'] =$wiersz['id'];
?>
							<form method="post" action="">
								<label><b>Edycja wykrojnika</b></label><br />
								<label>Wymiar X mm</label><br />
								<?php echo '<input name="dimension_x"  placeholder=" '.$_SESSION['dimension_x'].'" ><br />';?>
								<label>Wymiar Y mm</label><br />
								<?php echo '<input name="dimension_y"  placeholder=" '.$_SESSION['dimension_y'].'"><br />';?>
								<label>Kształt</label><br />
								<?php echo '<input name="form"  placeholder=" '.$_SESSION['form'].'"><br />';?>
								<label>Materiał</label><br />
								<?php echo '<input name="raw_material"  placeholder=" '.$_SESSION['raw_material'].'"><br />';?>
								<label>Ilość zębów</label><br />
								<?php echo '<input name="number_of_teeth"  placeholder=" '.$_SESSION['number_of_teeth'].'" ><br />';?>
								<label>Użytków</label><br />
								<?php echo '<input name="uzytkow"  placeholder=" '.$_SESSION['uzytkow'].'"><br />';?>
								<label>Powtórzeń</label><br />
								<?php echo '<input name="reps"  placeholder=" '.$_SESSION['reps'].'"><br />';?>
								<label>Promień</label><br />
								<?php echo '<input name="radius"  placeholder=" '.$_SESSION['radius'].'"><br />';?>
								<input id="submit" name="submit" type="submit" value="Zmien"> 
							</form>
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
	
