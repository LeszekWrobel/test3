<?php
session_start();

	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: ../index.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Karty Produkcji</title>
<?php
include ('../include/display_errors.php');//wyświetlaj błędy
include '../include/config_skrypt.php'; // zmienne i stałe, konfiguracja ustawień programu
include '../include/head_noindex.php';// head noindex
?>
</head>
<body>
<!-- <main> -->
<?php
// skrypt przetwarzający dane z formularza logowania - - - START - - -
header('Content-Type: text/html; charset=utf-8');
$login = $_SESSION['login']; // usun
$haslo = $_SESSION['haslo']; // usun
if ((empty($login)) OR (empty($haslo)))
			{
			echo '<br>Nie byłeś zalogowany albo zostałeś wylogowany.<br><br />';
			//include("include/formlogowanie.php");
			header ('Location: ../index.php');
			}else
			{
		// - - - - tylko dla zalogowanych START  - - - -
?>
			<div id="menuadmin">
				<?php //include '../include/baner.php'; ?>
				<?php //include '../include/menuadmin.php';?>
				<?php include '../include/nav.php'; ?>
			</div>
 		 	<div id="ogloszenia" >
				<?php if ($_SESSION['mode']==='edit')
					{
						$yes='<small>Tryb podglądu i edycji</small>';
						include $katalogskr.'/include/yes.html.php';
					}else{}
					?>
			<?php
				if (isset($_GET['menuadmin']))
				//{$op =  $_GET['menuadmin'];}
				switch ($_GET['menuadmin'])
				{
					case 'zamowienia':
				   {
						include('include/karty_produkcji/include/search.php');
?>
						<div style="clear:both"></div>
<?php
						include('include/zamowienia/menu_zamowienia.php');
						include 'include/zamowienia/include/table_order_all.php';
						include('include/zamowienia/zamowienia.php');
					}
					break;
							case 'zamowienia_wszystkie':
						   {
								include('include/zamowienia/menu_zamowienia.php');
								include('include/zamowienia/index.php');
								include 'include/zamowienia/include/table_order_all.php';
							}
							break;
							case 'zamowienia_drukarki':
						   {
								include('include/zamowienia/menu_zamowienia.php');
								include('include/zamowienia/include/drukarki/table_order_printers.php');
							}
							break;
										case 'zamowienia_drukarki_edycja':
								   {
										//include('include/zamowienia/menu_zamowienia.php');
										include('include/zamowienia/include/drukarki/save_table_order_printers.php');
									}
									break;
							case 'zamowienia_przewijarki':
						   {
								include('include/zamowienia/menu_zamowienia.php');
								include('include/zamowienia/include/przewijarki/table_order_rewinders.php');
							}
							break;
							case 'zamowienia_zrealizowane':
						   {
								include('include/zamowienia/menu_zamowienia.php');
								include('include/zamowienia/include/zrealizowane/form_completed.php');
							}
							break;
					case 'karty_produkcji':
				   {
						include('include/karty_produkcji/include/search.php');
?>
						<div style="clear:both"></div>
<?php
						include('include/karty_produkcji/list_of_produktion_cards.php');
				   }
					break;
							case 'karta_produkcji':
							{
							 include('include/karta_produkcji/produktion_card.php');
							}
							break;
							case 'podgl_edycja_kp':
							 {
								include('include/karta_produkcji/podgl_edycja/pod_edy_prod_card.php');
							 }
							break;
									case 'potw_karta_prod':
								   {
									   include('include/potw_karta_prod/save_the_order.php');
									 }
									break;
					case 'wykrojniki':
				   {
						include('include/wykrojniki/include/search_punch.php');
						include('include/wykrojniki/wykrojniki.php');
				   }
					break;
							case 'dodaj_wykrojnik':
						   {
								include('include/wykrojniki/dodaj_wykrojnik/punch_recording.php');
						   }
							break;
							case 'edytuj_wykrojnik':
						   {
								include('include/wykrojniki/edytuj_wykrojnik/punch_edit.php');
						   }
							break;
				    case 'kalendarz':
				   { 	include('include/kalendarz/kalendarz.php');}
					break;

				   case 'raporty':
				   {	include('include/raporty/raporty.php');}
					break;

				   case ('inf_tech'):
						{include('include/inf_tech/inf_tech.php');}
					break;

				   case ('wyloguj'):
				   {
						// zniszczenie sesji
						session_destroy();
						header ('Location: ../wyloguj.php');
					}
				   break;

	/*			   default:
				   {
 				    include ('include/search.html');
				    include('include/zamowienia/zamowienia.php');
					}
				   break;
	*/			}
			echo'<div style="clear:both"></div>';
			include ('include/zamowienia/include/drukarki/unlink.php');
?>
				</div>
<?php
			}
?>
<!-- </main> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
