<div class="col-md-12 ">
	<div class="row">
		<div class="col-md-2 offset-md-1">
			<div class="row-md-10 mt-2">
				<a href = "index.php?menuadmin=dodaj_wykrojnik">
					<button type="button" class="btn btn-success btn-block">
					 Dodaj wykrojnik
					</button></a>
			</div>
		</div>
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
	</div>
</div>
