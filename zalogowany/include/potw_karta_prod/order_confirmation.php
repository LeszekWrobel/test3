<!--Skrypt zapisuje wszystkie dane zamówienia do bazy -->
<?php
if ((isset($_SESSION['kod_karty_prod'])&&($_SESSION['kod_karty_prod']) !='')&&(isset($_SESSION['nazwa_wytw'])&&($_SESSION['nazwa_wytw']) !='')&&(isset($_SESSION['nazwa_wzoru'])&&($_SESSION['nazwa_wzoru']) !='')&&(isset($_SESSION['kod_ean']))&&($_SESSION['kod_ean']!='')&&(isset($_SESSION['circulation'])&&($_SESSION['circulation']) !='')&&(isset($_SESSION['paper'])&&($_SESSION['paper']) !='')&&(isset($_SESSION['glue'] ))&&($_SESSION['glue']!='')&&(isset($_SESSION['ilosc_uzytkow']))&&($_SESSION['ilosc_uzytkow']!='')&&(isset($_SESSION['material_width'])&&($_SESSION['material_width']) !='')&&(isset($_SESSION['date_of_completion'])&&($_SESSION['date_of_completion']) !='')&&(isset($_SESSION['comments_to_order'])&&($_SESSION['comments_to_order']) !='')&&(isset($_SESSION['kolor'])&&($_SESSION['kolor']) !='')&&(isset($_SESSION['number_of_teeth'])&&($_SESSION['number_of_teeth']) !='')&&(isset($_SESSION['bush'])&&($_SESSION['bush']) !='')&&(isset($_SESSION['quantity_er'])&&($_SESSION['quantity_er']) !='')&&(isset($_SESSION['direction_roll'])&&($_SESSION['direction_roll']) !='')&&(isset($_SESSION['uzytkow'])&&($_SESSION['uzytkow']) !='')) // sprawdzamy ustawienia obowiązkowych pól formularzy
{	// obliczamy i ustawiamy pozostałe zmienne
	$_SESSION['raw_material_lenght']=($_SESSION['circulation']/$_SESSION['uzytkow'])*($_SESSION['number_of_teeth']*3.175/$_SESSION['reps'])+($_SESSION['ilosc_kolorow']*25)+40;   // długość materiału
	$_SESSION['raw_material_lenght']=round($_SESSION['raw_material_lenght'],2);
	$_SESSION['number_of_rolls']=$_SESSION['circulation']*1000/$_SESSION['quantity_er'];   //ilość rolek
	$_SESSION['number_of_rolls']=ceil($_SESSION['number_of_rolls']);
	$_SESSION['date_of_insertion'] = date('Y-m-d'); //date dodania ustawiamy na aktualną date('Y-m-d');
	//$_SESSION['date_of_edition'] = '';
	//$_SESSION['id_autora'] ;
	$_SESSION['ip_autor'] = $_SERVER['REMOTE_ADDR'];//identyfikacja ip


	include("../include/connect.php");
	//require_once "include/connect.php";
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

$kod_karty_prod=$_SESSION['kod_karty_prod'];$nazwa_wytw=$_SESSION['nazwa_wytw'];$nazwa_wzoru=$_SESSION['nazwa_wzoru'];$kod_ean=$_SESSION['kod_ean'];$material=$_SESSION['paper'];$klej=$_SESSION['glue'];$id_wykrojnik=$_SESSION['id_wykrojnik'];$ilosc_zebow=$_SESSION['number_of_teeth'];$nawoj=$_SESSION['direction_roll'];
$quantity_er=$_SESSION['quantity_er'];$bush=$_SESSION['bush'];$roll_length=$_SESSION['roll_length'];$ilosc_rolek=$_SESSION['number_of_rolls'];$ilosc_uzytkow=$_SESSION['ilosc_uzytkow'];$zalecana_szer_mat=$_SESSION['material_width'];$dlugosc_materialu=$_SESSION['raw_material_lenght'];$ilosc_do_realizacji=$_SESSION['circulation'];$termin_realizacji=$_SESSION['date_of_completion'];
$kolory=$_SESSION['kolor'];$grafika=$_SESSION['link_img'];$uwagi=$_SESSION['comments_to_order'];$raport_druku=$_SESSION['print_report'];$data_dodania=$_SESSION['date_of_insertion'];$data_aktualizacji=$_SESSION['date_of_edition'];$id_autora=$_SESSION['id_autora'];$ip_autora=$_SESSION['ip_autor'];
						// $string = '';
						// foreach($kolory as $value)
								// {
									//print '<img src='.$value.'  height="30px">';
									// $value.'<br /> ';
									// $string = $value.','.$string; // zapisanie kolorów w stringu z separatorem "," jako zmienna $string
								// }
								$string = implode (",",$kolory);  // zapisanie kolorów w stringu z separatorem "," jako zmienna $string

					if ($polaczenie->query("INSERT INTO karty_produkcji (id,kod_karty_prod,nazwa_wytw,nazwa_wzoru,kod_ean,material,klej,id_wykrojnik,ilosc_zebow, nawoj,ilosc_er,tulejka,dl_rolki,ilosc_rolek,ilosc_uzytkow,zalecana_szer_mat,dlugosc_materialu,ilosc_do_realizacji,termin_realizacji,kolory,grafika,uwagi,raport_druku,data_dodania,data_aktualizacji,id_autora,ip_autora) VALUES (NULL,'$kod_karty_prod','$nazwa_wytw','$nazwa_wzoru',$kod_ean,'$material','$klej',$id_wykrojnik,$ilosc_zebow,'$nawoj',$quantity_er,$bush,$roll_length,$ilosc_rolek,$ilosc_uzytkow,$zalecana_szer_mat,$dlugosc_materialu,$ilosc_do_realizacji,'$termin_realizacji','$string','$grafika','$uwagi','$raport_druku','$data_dodania','$data_aktualizacji',$id_autora,'$ip_autora')"))
					{
						//$_SESSION['udanarejestracja']=true;
						include 'include/ini_session_variables.php'; // kasowanie zmiennych do ustawień startowych
						header('Location: ?menuadmin=zamowienia_wszystkie&yes=Zamówienie zostało dodane.');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
		$polaczenie->close();
}
else
{
$error ='Brak wszystkich danych do zapisania zamówienia';
include $katalogskr.'/include/error.html.php';
print $_SESSION['kod_karty_prod'].' - kod_karty_prod <br />';
print $_SESSION['nazwa_wytw'].' - nazwa_wytw <br />';
print $_SESSION['nazwa_wzoru'].' - nazwa_wzoru <br />';
print $_SESSION['kod_ean'].' - kod_ean <br />';
print $_SESSION['link_img'] = $link.'/'.$katalog.'/img/etygrafika-logo1.png <br />';
print $_SESSION['paper'].' - paper <br />';
print $_SESSION['glue'].' - glue <br />';
print $_SESSION['quantity_er'].' - quantity_er <br />';
print $_SESSION['bush'].' - bush <br />';
print $_SESSION['ilosc_uzytkow'].' - ilosc_uzytkow <br />';
print $_SESSION['roll_length'].' - roll_length <br />';
print $_SESSION['ilosc_kolorow'].' - ilość kolorów <br />';
//print $_SESSION['kolor'].' - kolory <br />';
//$_POST['kolor'].'<br />';
print $_SESSION['direction_roll'].' - direction_roll = nawoj <br />';
print $_SESSION['wymiar_x_od'].' - wymiar_x_od <br />';
print $_SESSION['wymiar_x_do'].' - wymiar_x_do <br />';
print $_SESSION['wymiar_y_do'].' - wymiar_y_do <br />';
print $_SESSION['wymiar_y_od'].' - wymiar_x_od <br />';
print $_SESSION['circulation'].' - circulation <br />';
print $_SESSION['comments_to_order'].' - comments_to_order <br />';
print $_SESSION['termin'].' - termin <br />';
print $_SESSION['dimension_x'].' - dimension_x <br />';
print $_SESSION['dimension_y'].' - dimension_y <br />';
print $_SESSION['form'].' - form <br />';
print $_SESSION['raw_material'].' - raw_material <br />';
print $_SESSION['number_of_teeth'].' - number_of_teeth <br />';
print $_SESSION['uzytkow'].' - uzytkow <br />';
print $_SESSION['reps'].' - reps <br />';
print $_SESSION['radius'].' - radius <br />';
print $_SESSION['date_of_completion'].' - date_of_completion <br />';
print $_SESSION['raw_material_lenght'].' - raw_material <br />';
print $_SESSION['material_width'].' - material_width <br />';
}
?>
