<?php
if  (isset($_POST['submit']) && $_POST['submit'] =='Tak')
	{
		$end_date = date('Y-m-d H:i:s'); // formatowanie czasu z godzinami
		$id_zamowienia = $_POST['id'];
		$kod_karty_prod = $_POST['kod_karty_prod'];
		$scrolled_amount = $_POST['scrolled_amount'];
		$_POST['scrolled_amount'] = strip_tags(trim($_POST['scrolled_amount']));
		$ilosc_przewinieta = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_POST['scrolled_amount']);
		$sprawdznr = '/^[0-9]{2,6}$/D';  // cyfry od 0 do 9 , min 1 znaków max 6
			if(!(preg_match ($sprawdznr,$ilosc_przewinieta)))
			{
				$error = 'Wypełnij poprawnie pole "Ilość przewinięta."';
				include $katalogskr.'/include/error.html.php';
			} else
			{
				require_once "../include/connect.php";
				$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
					if ($polaczenie->query("UPDATE karty_produkcji SET ilosc_przewinieta=$ilosc_przewinieta,end_date='$end_date' WHERE id=$id_zamowienia"))
						{
							$yes = 'Wykonanie zamówienia <big>>'.$kod_karty_prod.'<</big> zostało potwierdzone na stanowisku przewijarki.<br>Wpisano wartość <big>>'.$ilosc_przewinieta.'<</big> w polu "Ilość przewinięta"';
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
