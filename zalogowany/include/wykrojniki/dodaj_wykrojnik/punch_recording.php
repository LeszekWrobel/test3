<?php
if (isset($_POST['submit']) && ($_POST['submit']) =='Dodaj') 
{ // Form has been submitted
	if ($_POST['dimension_x']!='') {$_SESSION['dimension_x'] = $_POST['dimension_x'];}
	if ($_POST['dimension_y']!='') {$_SESSION['dimension_y'] = $_POST['dimension_y'];}
	if ($_POST['form']!='') {$_SESSION['form'] = $_POST['form'];}
	if ($_POST['raw_material']!='') {$_SESSION['raw_material'] = $_POST['raw_material'];}
	if ($_POST['number_of_teeth']!='') {$_SESSION['number_of_teeth'] = $_POST['number_of_teeth'];}
	if ($_POST['uzytkow']!='') {$_SESSION['uzytkow'] = $_POST['uzytkow'];}
	if ($_POST['reps']!='') {$_SESSION['reps'] = $_POST['reps'];}
	if ($_POST['radius']!='') {$_SESSION['radius'] = $_POST['radius'];}
	include $katalogskr.'/zalogowany/include/wykrojniki/dodaj_wykrojnik/walidacja/walidacja.php'; 
	include $katalogskr.'/zalogowany/include/wykrojniki/dodaj_wykrojnik/walidacja/spr.php';
	$data_dodania = date('Y-m-d'); //date dodania ustawiamy na aktualną date('Y-m-d');
	$id_autora=$_SESSION['id_autora'];
	$ip_autora=$_SERVER['REMOTE_ADDR'];//identyfikacja ip

		 //include("../include/connect.php");
		require_once "../include/connect.php";
		$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
					if ($polaczenie->query("INSERT INTO wykrojniki (id,nr,dimension_x,dimension_y,form,raw_material,number_of_teeth,uzytkow,reps,radius,data_dodania,id_autora,ip_autora) VALUES (NULL,$nr,$dimension_x,$dimension_y,'$form','$raw_material',$number_of_teeth,$uzytkow,$reps,$radius,'$data_dodania',$id_autora,'$ip_autora')"))
					{
						//$_SESSION['udanarejestracja']=true;
						header('Location:?menuadmin=wykrojniki&yes=Wykrojnik został dodany.');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
		$polaczenie->close();

	include 'form_add_punch.php';
}
else
{ // Form has not been submitted
	include 'form_add_punch.php';
}
?>

