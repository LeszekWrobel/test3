<?php
if (isset($_POST['submit']) && $_POST['submit'] ===" Zmień, Przelicz i Zapisz ")
  {
     // sprawdzamy ustawienia obowiązkowych pól formularzy karty produkcji.
  if ((isset($_SESSION['kod_karty_prod']))&&($_SESSION['kod_karty_prod']=='')&&($_POST['kod_karty_prod']==''))
      {
        $error[]='Nie wypełniłeś pola "KOD".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['nazwa_wytw']))&&($_SESSION['nazwa_wytw']==='')&&($_POST['nazwa_wytw']===''))
      {
        $error[]='Nie wypełniłeś pola "WYTWÓRNIA".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['nazwa_wzoru']))&&($_SESSION['nazwa_wzoru']==='')&&($_POST['nazwa_wzoru']===''))
      {
        $error[]='Nie wypełniłeś pola "WZÓR".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['kod_ean']))&&($_SESSION['kod_ean']==='')&&($_POST['kod_ean']===''))
      {
        $error[]='Nie wypełniłeś pola "EAN".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['kolor']))&&($_SESSION['kolor']===''))
      {
        $error[]='Nie wybrałeś kolorów.';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['uzytkow']))&&($_SESSION['uzytkow']===''))//uzytki w wykrojniki
      {
        $error[]='Nie wybrałeś wykrojnika.';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((!isset($_SESSION['number_of_teeth']))&&($_SESSION['number_of_teeth']==='')&&($_POST['number_of_teeth']===''))
      {
        $error[]='Nie podano wartości "Ilość zębów".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['reps']))&&($_SESSION['reps']===''))
      {
        $error[]='Nie podano wartości "Powtórzeń".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['material_width']))&&($_SESSION['material_width']==='')&&($_POST['material_width']===''))
      {
        $error[]='Nie podałeś zalecanej szerokości materiału.';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['paper']))&&($_SESSION['paper']==='')&&($_POST['paper']===''))
      {
        $error[]='Nie wypełniłeś pola "Papier".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['glue'] ))&&($_SESSION['glue']==='')&&($_POST['glue']===''))
      {
        $error[]='Nie wypełniłeś pola "Klej".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['quantity_er']))&&($_SESSION['quantity_er']==='')&&($_POST['quantity_er']===''))
      {
        $error[]='Nie wypełniłeś pola "Ilość e/r".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['bush']))&&($_SESSION['bush']==='')&&($_POST['bush']===''))
      {
        $error[]='Nie wypełniłeś pola "Tulejka".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['ilosc_uzytkow']))&&($_SESSION['ilosc_uzytkow']==='')&&($_POST['ilosc_uzytkow']===''))
      {
        $error[]='Nie wypełniłeś pola "Ilość użytków".';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['direction_roll']))&&($_SESSION['direction_roll']===''))
      {
        $error[]='Nie określiłeś kierunku nawoju';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['comments_to_order']))&&($_SESSION['comments_to_order']==='')&&($_POST['comments_to_order']===''))
      {
        $error[]='Pole "Uwagi" jest puste.';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['print_report']))&&($_SESSION['print_report']==='')&&($_POST['print_report']===''))
      {
        $error[]='Pole "Raportu wydruku" jest puste.';
        //include $katalogskr.'/include/error.html.php';
      }
  //  $_SESSION['error'] = $error; //zapis błędów do zmiennej sesyjnej
  if ((isset($error)) && $error != '')
      {
          foreach($error as $value) // wyświetlenie zapisanych w tablicy kolorów
          {
            if($value!='' ) // aby seperatory nie były wyświetlane gdy polo koloru jest puste
            {
              $error = $value.'<br /> '; // separator kolorów
              include $katalogskr.'/include/error.html.php';
            }
          }
      }else{}
      $yes='Wprowadzone dane zostały zapisane i przeliczone';
      include $katalogskr.'/include/yes.html.php';
  }
?>
