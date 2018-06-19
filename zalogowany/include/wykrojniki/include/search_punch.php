<?php
if (isset($_POST['submit']) && ($_POST['submit']) ==='Szukaj')
{ // zapis zmiennych do wyszukiwania
	if ($_POST['wymiar_x_od']!='') $_SESSION['wymiar_x_od'] = $_POST['wymiar_x_od'];
	if ($_POST['wymiar_x_do']!='') $_SESSION['wymiar_x_do'] = $_POST['wymiar_x_do'];
	if ($_POST['wymiar_y_od']!='') $_SESSION['wymiar_y_od'] = $_POST['wymiar_y_od'];
	if ($_POST['wymiar_y_do']!='') $_SESSION['wymiar_y_do'] = $_POST['wymiar_y_do'];
	include 'form_punch.php';
}
else
{ // Form has not been submitted
	if (isset($_POST['submit']) && ($_POST['submit']) ===' Czyść ')
	{ // Form has been submitted
		$_SESSION['wymiar_x_od'] = ''; //czyszczenie zmiennych do wyszukiwania
		$_SESSION['wymiar_x_do'] = 1000 ;
		$_SESSION['wymiar_y_od'] = '';
		$_SESSION['wymiar_y_do'] = 1000 ;
	}
	else{}
	include 'form_punch.php';
}
?>
