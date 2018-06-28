<!-- zapisywanie i wyświetlanie danych o szerokości materiału -->
<?php
if (isset($_POST['submit']) && ($_POST['submit']) !='') 
{ // Form has been submitted
	if ($_POST['material_width']!='') {$_SESSION['material_width'] = $_POST['material_width'];}
	include 'form_material_width.php'; // formularz wpisywania zalecanej szerokości materiału
}
else
{ // Form has not been submitted
	include 'form_material_width.php';
}
?>
