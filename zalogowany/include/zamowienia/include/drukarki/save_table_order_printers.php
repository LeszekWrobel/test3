<?php
 if  (isset($_POST['submit']) && $_POST['submit'] == $_POST['id'])
 	{
		$id_zamowienia = $_POST['id'];
		//$id_zamowienia = $wiersz['id'];

		$actual_amount_of_material_used = $_POST['actual_amount_of_material_used'];
		$_POST['actual_amount_of_material_used'] = strip_tags(trim($_POST['actual_amount_of_material_used']));
		$rzecz_ilosc_mat = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_POST['actual_amount_of_material_used']);
		$sprawdznr = '/^[0-9]{2,6}$/D';  // cyfry od 0 do 9 , min 1 znaków max 6
		print '$_POST[id]= '.$id_zamowienia.'<br>$_POST[submit]= '.$_POST['submit'].'<br>$_POST[actual_amount_of_material_used]= '.$rzecz_ilosc_mat;
		//print '<br>$wiersz[id] = '.$wiersz['id'];
			if(!(preg_match ($sprawdznr,$rzecz_ilosc_mat)))
			{
				$error = 'Wypełnij poprawnie pole "Rzeczywista ilość materiału."';
				include $katalogskr.'/include/error.html.php';
				include 'include/modal/modal_karta_produkcji.php';
			} else
			{
				//include("../include/connect.php");
				require_once "../include/connect.php";
				$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
					if ($polaczenie->query("UPDATE karty_produkcji SET rzeczywista_ilosc_mat=$rzecz_ilosc_mat WHERE id=$id_zamowienia"))
						{
							$yes = 'Zamówienie zostało potwierdzone na stanowisku drukarki.';
							include $katalogskr.'/include/yes.html.php';
						}
						else
						{
							throw new Exception($polaczenie->error);
						}
				$polaczenie->close();

			}
	 }
?>
