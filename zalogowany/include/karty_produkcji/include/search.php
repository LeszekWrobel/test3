<div class="col-md-12 ">
	<div class="row">
		<div class="col-md-1 ">

<?php
			echo '<a class="btn btn-primary" href="index.php?menuadmin=karta_produkcji&zmienne_ini=clear" role="button">Czyść kartę</a>';
			?>


			</div>
				<div class="col-md-1">

<?php				echo '<a class="btn btn-primary" href = "index.php?menuadmin=karta_produkcji&zmienne=restart&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" role="button">Edytuj kartę</a>';
?>

		</div>
		<div class="col-md-10">
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
</div>
</div>
</div>
