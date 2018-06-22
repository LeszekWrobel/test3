<?php
if  (isset($_POST['submit_invoice']) && $_POST['submit_invoice'] =='Tak')
	{
	$id_zamowienia = $_POST['id'];
		if (isset($_POST['invoice_number']) && isset($_POST['id']) && ($_POST['invoice_number'] != ''))
			{
				$nazwa_wytw = $_POST['nazwa_wytw'];
				$invoice_number = $_POST['invoice_number'];
				$_POST['invoice_number'] = strip_tags(trim($_POST['invoice_number']));
				$invoice_number = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_POST['invoice_number']);
				$sprawdz_tekst =  '/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ.:;,()\/ \-_]{1,20}$/D'; //sprawdza tekst i cyfry, zawiera: " \"-spacja, ","-przecinek, "()"-nawias "/"-ukośnik(slech) . : ; , () -
				if(!(preg_match ($sprawdz_tekst,$invoice_number)))
				{
					$error = 'Wypełnij poprawnie pole "Faktura".';
					include $katalogskr.'/include/error.html.php';
				} else
				{
					require_once "../include/connect.php";
					$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
						if ($polaczenie->query("UPDATE karty_produkcji SET nr_faktury='$invoice_number' WHERE id=$id_zamowienia"))
							{
								$yes = 'Wystawienie faktury nr <big>>'.$invoice_number.'<</big> dla <big>>'.$nazwa_wytw.'<</big> zostało potwierdzone.';
								include $katalogskr.'/include/yes.html.php';
							}
							else
							{
								throw new Exception($polaczenie->error);
							}
				}
			}
			else
			{
				$error = 'Wypełnij poprawnie pole "Faktura".';
				include $katalogskr.'/include/error.html.php';
			}
	}
?>
