<?php
if  (isset($_POST['submit_invoice']) && $_POST['submit_invoice'] =='Tak')
	{	
	
	$id_zamowienia = $_POST['id'];
		if (isset($_POST['invoice_number']) && isset($_POST['id']) && ($_POST['invoice_number'] != ''))
			{
				$invoice_number = $_POST['invoice_number'];
				$_POST['invoice_number'] = strip_tags(trim($_POST['invoice_number']));
				$invoice_number = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_POST['invoice_number']);
				$sprawdz_tekst =  '/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ.:;,()\/ \-_]{1,20}$/D'; //sprawdza tekst i cyfry, zawiera: " \"-spacja, ","-przecinek, "()"-nawias "/"-ukośnik(slech) . : ; , () -
				if(!(preg_match ($sprawdz_tekst,$invoice_number)))
				{
					$error = 'Wypełnij poprawnie pole "Faktura".';
					include $katalogskr.'/include/error.html.php'; 
					//include 'form_completed.php'
					//exit;
				} else 
				{
					require_once "../include/connect.php";
					$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
						if ($polaczenie->query("UPDATE karty_produkcji SET nr_faktury='$invoice_number' WHERE id=$id_zamowienia"))
							{
								$yes = 'Wystawienie faktury zostało potwierdzone.';
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
/*if  (isset($_POST['submit_date']) && $_POST['submit_date'] =='Tak')
	{	
		$id_zamowienia = $_POST['id'];
			if (isset($_POST['end_date']) && isset($_POST['id']) && ($_POST['end_date'] != '0') && ($_POST['end_date'] != '') && ($_POST['id'] != ''))
			{
				$end_date = $_POST['end_date'];
				require_once "../include/connect.php";
				$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);//
				if ($polaczenie->query("UPDATE karty_produkcji SET end_date='$end_date' WHERE id=$id_zamowienia"))
				{
					$yes = 'Data realizacji zamówienia została potwierdzona.';
					include $katalogskr.'/include/yes.html.php';
				}
					else
				{
					throw new Exception($polaczenie->error);
				}	
			}
			else
			{
				$error = 'Sprawdź pole "Data realizacji".';
				include $katalogskr.'/include/error.html.php';
			}
	}*/
?>