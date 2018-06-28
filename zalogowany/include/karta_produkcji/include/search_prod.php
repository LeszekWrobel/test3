<?php
if (isset($_POST['submit']) && ($_POST['submit']) !='') 
{ // Form has been submitted
	if ($_POST['kod_karty_prod']!='') $_SESSION['kod_karty_prod'] = $_POST['kod_karty_prod'];
	if ($_POST['nazwa_wytw']!='') $_SESSION['nazwa_wytw'] = $_POST['nazwa_wytw'];
	if ($_POST['nazwa_wzoru']!='') $_SESSION['nazwa_wzoru'] = $_POST['nazwa_wzoru'];
	if ($_POST['kod_ean']!='') $_SESSION['kod_ean'] = $_POST['kod_ean'];
	include 'form_prod.php';
}
else
{ // Form has not been submitted
	include 'form_prod.php';
}
?>
