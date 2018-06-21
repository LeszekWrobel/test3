<?php
	if (is_uploaded_file($_FILES['plik']['tmp_name']))
	{
		if ($_FILES['plik']['size'] > $max_rozmiar)
		{
			echo 'Plik jest za duży!';
		//	include 'form_img.php';
		} else
		{
			$zd = $_FILES['plik']['name'];//utworzenie nazwy pliku z grafiką
			include ('remove_pl.php');//usuwa polskie znaki -->
			$zd = remove_pl($zd, 'utf8'); // funkcja usuwanie polskich znaków
			move_uploaded_file($_FILES['plik']['tmp_name'],
			$katalogskr.'/img/graphics/'.$zd);
			$_SESSION['link_img'] = $zd;
			//include 'form_img.php';
		}
	}
	else
	{
		$error ='Wybierz grafikę do wyświetlenia';
		include $katalogskr.'/include/error.html.php';
	//	include 'form_img.php';
	}
?>
<?php
$_POST['submit']='ble';
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

<?php
header('Location: ../../?menuadmin=karta_produkcji');

 ?>
