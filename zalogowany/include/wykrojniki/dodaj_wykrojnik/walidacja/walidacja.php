<?php
//przetwarzanie zmiennych przesłanych z formularza w bezpieczną formę  - - - - -  START - - - - - -
$nr = '1';		 $dimension_x = ''; $dimension_y = '';	 $form  = '';	 $raw_material = '';	 $number_of_teeth = '';		 $uzytkow = '';		  $reps = '';		 $radius = '';		  $uwagi = '';		 $data_dodania = '';		 $data_aktualizacji = '';		 $id_autora = '';		 $ip_autora = '';
//przetwarzanie danych tekstowych w bezpieczną formę   $_SESSION['opis'] = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['opis']);//usuwa spacje i tabulatory ze stringa aby zapisać czysty texst do bazy danych
//$_SESSION['nr'] = strip_tags(trim($_SESSION['nr']));
$_SESSION['dimension_x'] = strip_tags(trim($_SESSION['dimension_x']));
$_SESSION['dimension_y'] = strip_tags(trim($_SESSION['dimension_y']));
$_SESSION['form'] = strip_tags(trim($_SESSION['form']));
$_SESSION['raw_material'] = strip_tags(trim($_SESSION['raw_material']));
$_SESSION ['number_of_teeth'] = strip_tags(trim($_SESSION['number_of_teeth']));
$_SESSION ['uzytkow'] = strip_tags(trim($_SESSION['uzytkow']));
$_SESSION ['reps'] = strip_tags(trim($_SESSION['reps']));
$_SESSION ['radius'] = strip_tags(trim($_SESSION['radius']));
//$_SESSION['uwagi'] = strip_tags(trim($_SESSION['uwagi']));
/*
$_SESSION['data_dodania'] = strip_tags(trim($_SESSION['data_dodania']));
$_SESSION['data_aktualizacji'] = strip_tags(trim($_SESSION['data_aktualizacji']));
*/
//$nr = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['nr']);
$dimension_x = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['dimension_x']);
$dimension_y = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['dimension_y']);
$form = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['form']);
$raw_material = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['raw_material']);
$number_of_teeth = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['number_of_teeth']);
$uzytkow = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['uzytkow']);
$reps = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['reps']);
$radius = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['radius']);
/*$uwagi = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['uwagi']);
$data_dodania = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['data_dodania']);
$data_aktualizacji = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_SESSION['data_aktualizacji']);*/
$ip = $_SERVER['REMOTE_ADDR'];//identyfikacja ip
$date = date('Y-m-d');
//	$max_rozmiar = 2000*2000; //okreslenie maxymalnego rozmiaru przesyłanej grafiki
//$id = $_SESSION['id'];
// poprawność imienia,tel i email
$sprawdznr = '/^[0-9]{1,4}$/D';  // cyfry od 0 do 9 , min 1 znaków max 4
$sprawdzdimension_x = '/^[0-9]{1,4}$/D';  // cyfry od 0 do 9 , min 1 znaków max 4
$sprawdzdimension_y = '/^[0-9]{1,4}$/D';  // cyfry od 0 do 9 , min 1 znaków max 4
$sprawdzraw_material =  '/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ.:;,() \-_]{1,100}$/D'; //sprawdza tekst i cyfry, zawiera: " \"-spacja, ","-przecinek, "()"-nawias . : ; , () -
$sprawdzform =  '/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ.:;,() \-_]{1,50}$/D'; //sprawdza tekst i cyfry, zawiera: " \"-spacja, ","-przecinek, "()"-nawias . : ; , () -
$sprawdznumber_of_teeth =  '/^[0-9]{1,9}$/D';
$sprawdzuzytkow =  '/^[0-9]{1,9}$/D';
$sprawdzreps =  '/^[0-9]{1,9}$/D';
$sprawdzradius =  '/^[0-9]{1,9}$/D';
$sprawdzuwagi =  '/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ.:;,() \-_]{1,50}$/D'; //sprawdza tekst i cyfry, zawiera: " \"-spacja, ","-przecinek, "()"-nawias . : ; , () -
//przetwarzanie zmiennych przesłanych z formularza w bezpieczną formę  - - - - -  STOP  - - - - - -
?>