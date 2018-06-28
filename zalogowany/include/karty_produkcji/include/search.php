<?php
if (isset($_POST['submit']) && ($_POST['submit']) ===' Szukaj ')
{ // Form has been submitted
	if ($_POST['search_kod_karty_prod']!='') $_SESSION['search_kod_karty_prod'] = $_POST['search_kod_karty_prod'];
	if ($_POST['search_nazwa_wytw']!='') $_SESSION['search_nazwa_wytw'] = $_POST['search_nazwa_wytw'];
	if ($_POST['search_nazwa_wzoru']!='') $_SESSION['search_nazwa_wzoru'] = $_POST['search_nazwa_wzoru'];
	if ($_POST['search_kod_ean']!='') $_SESSION['search_kod_ean'] = $_POST['search_kod_ean'];
	include 'form.php';
}
else
{ // Form has not been submitted
	if (isset($_POST['submit']) && ($_POST['submit']) ===' Czyść ')
	{ // czyszczenie zmiennych z wyszukiwarki
		$_SESSION['search_kod_karty_prod']='' ;
		$_SESSION['search_nazwa_wytw']='';
		$_SESSION['search_nazwa_wzoru']='';
		$_SESSION['search_kod_ean']='';
	}else	{}
	include 'form.php';
}
?>
