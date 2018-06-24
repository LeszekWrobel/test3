<?php
print 'teraz się ładują dane';
print 'Swiersz[id_wykrojnik]='.$wiersz['id_wykrojnik'];
$_SESSION['id'] = $wiersz['id'];
$_SESSION['kod_karty_prod'] = $wiersz['kod_karty_prod'];//   $wiersz['kod_karty_prod'];
$_SESSION['nazwa_wytw'] = $wiersz['nazwa_wytw'];
$_SESSION['nazwa_wzoru'] = $wiersz['nazwa_wzoru'];
$_SESSION['kod_ean'] = $wiersz['kod_ean'];
$_SESSION['link_img'] = $wiersz['grafika'];
$_SESSION['paper'] = $wiersz['material'];
$_SESSION['glue'] = $wiersz['klej'];
$_SESSION['quantity_er'] = $wiersz['ilosc_er'];
$_SESSION['bush'] = $wiersz['tulejka'];
$_SESSION['ilosc_uzytkow'] = $wiersz['ilosc_uzytkow'];
$_SESSION['roll_length'] = $wiersz['dl_rolki'];
$_SESSION['kolor'] = explode( ",",$wiersz['kolory'] ); // tablica kolorów
$i = 0 ;	// licznik kolorów
foreach($_SESSION['kolor'] as $value) // wyświetlenie zapisanych w tablicy kolorów
{ if($value!='' ) // aby seperatory nie były wyświetlane gdy polo koloru jest puste
  {  $i++;  }
}
$_SESSION['ilosc_kolorow'] = $i ; // zapisanie ilości kolorów do sesji
//print $_SESSION['ilosc_kolorow'];
$_SESSION['direction_roll'] = $wiersz['nawoj'];
$_SESSION['circulation'] = $wiersz['ilosc_do_realizacji'];
//$_SESSION['termin'] = '';//   $wiersz['termin_realizacji'];=date_of_completion ???
$_SESSION['date_of_completion'] = '';//  $wiersz['termin_realizacji'];
$_SESSION['raw_material_lenght'] = '';// $wiersz['dlugosc_materialu']; //zerujemy a poniżej wyliczamy ze wzoru
$_SESSION['form_material_width'] = '';
$_SESSION['material_width'] = $wiersz['zalecana_szer_mat'];
$_SESSION['link_img'] = $wiersz['grafika'];
$_SESSION['comments_to_order'] = $wiersz['uwagi'];
$_SESSION['print_report'] = $wiersz['raport_druku'];
$_SESSION['date_of_insertion'] = '';//  $wiersz['data_dodania'];
$_SESSION['date_of_edition'] = '';//  $wiersz['data_aktualizacji'];
//$_SESSION['id_autora'] = $wiersz['id_autora'];
$_SESSION['number_of_rolls'] = '';//  $wiersz['ilosc_rolek'];//zerujemy a poniżej wyliczamy ze wzoru
$_SESSION['actual_amount_of_material_used'] = '';//  $wiersz['rzeczywista_ilosc_mat'];
$_SESSION['scrolled_amount'] = '';//  = $wiersz['ilosc_przewinieta'];
$_SESSION['invoice_number'] = '';// $wiersz['nr_faktury'];
$_SESSION['end_date'] = '';//$wiersz['end_date'];
//odczytujemy dane wykrojnika
$_SESSION['id_wykrojnik'] = $wiersz['id_wykrojnik'];
//header ('Location: ?menuadmin=karta_produkcji&id_wykrojnik='.$wiersz['id_wykrojnik'].'');
//$polaczenie->close();
// require_once "../include/connect.php";
// $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
//   if ($polaczenie->connect_errno!=0)
//   {
//     echo "Error: ".$polaczenie->connect_errno;
//   }
//   else
//   {

print 'Sid='.$id=$_SESSION['id_wykrojnik'];
//SELECT * FROM pierwsza INNER JOIN druga WHERE id.pierwsza = id.druga
     $rezultat =@$polaczenie->query("SELECT * FROM wykrojniki WHERE id=$id");
    while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
      {
         $_SESSION['dimension_x'] = $wiersz['dimension_x'];
				 $_SESSION['dimension_y'] = $wiersz['dimension_y'];
				 $_SESSION['form'] = $wiersz['form'];
				 $_SESSION['raw_material'] = $wiersz['raw_material'];
				 $_SESSION['number_of_teeth'] = $wiersz['number_of_teeth'];
				 $_SESSION['uzytkow'] = $wiersz['uzytkow'];;
				 $_SESSION['reps'] = $wiersz['reps'];
				 $_SESSION['radius'] = $wiersz['radius'];
      }
//print $_SESSION['dimension_y'].'lllllllllllooooppp';
  // }
  // 	$polaczenie->close();
// obliczamy i ustawiamy pozostałe zmienne:
$_SESSION['raw_material_lenght']=($_SESSION['circulation']/$_SESSION['uzytkow'])*($_SESSION['number_of_teeth']*3.175/$_SESSION['reps'])+($_SESSION['ilosc_kolorow']*25)+40;   // długość materiału
$_SESSION['raw_material_lenght']=round($_SESSION['raw_material_lenght'],2);
$_SESSION['number_of_rolls']=$_SESSION['circulation']*1000/$_SESSION['quantity_er'];   //ilość rolek
$_SESSION['number_of_rolls']=ceil($_SESSION['number_of_rolls']);
$_SESSION['date_of_insertion'] = date('Y-m-d'); //date dodania ustawiamy na aktualną date('Y-m-d');
//$_SESSION['date_of_edition'] = '';
//$_SESSION['id_autora'] ;
$_SESSION['ip_autor'] = $_SERVER['REMOTE_ADDR'];//identyfikacja ip
 ?>
