<?php
//include 'include/karty_produkcji/include/load_production_card.php';// kasowanie zmiennych i ładowanie danych starego zamówienia z bazy

if (isset($_POST['submit']) && ($_POST['submit']) =='Potwierdz')
{ // Form has been submitted
	if ($_POST['circulation']!='') {$_SESSION['circulation'] = $_POST['circulation'];}
	if ($_POST['date_of_completion']!='') {$_SESSION['date_of_completion'] = $_POST['date_of_completion'];}
	if ($_POST['comments_to_order']!='') {$_SESSION['comments_to_order'] = $_POST['comments_to_order'];}
	//include 'order_edi_conf.php';
	include 'order_confirmation.php';
}
else
{ // Form has not been submitted
	include 'form_order_confirmation.php';
}
?>
