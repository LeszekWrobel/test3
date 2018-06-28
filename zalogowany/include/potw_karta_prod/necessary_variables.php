<?php
if (isset($_POST['submit']) && $_POST['submit'] ===" Zmień, Przelicz i Zapisz ")
  {
     // sprawdzamy ustawienia obowiązkowych pól formularzy karty produkcji.
  if ((isset($_SESSION['kod_karty_prod']))&&($_SESSION['kod_karty_prod']=='')&&($_POST['kod_karty_prod']==''))
      {
        $error[]=' KOD,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['nazwa_wytw']))&&($_SESSION['nazwa_wytw']==='')&&($_POST['nazwa_wytw']===''))
      {
        $error[]=' KLIENT,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['nazwa_wzoru']))&&($_SESSION['nazwa_wzoru']==='')&&($_POST['nazwa_wzoru']===''))
      {
        $error[]=' WZÓR,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['kod_ean']))&&($_SESSION['kod_ean']==='')&&($_POST['kod_ean']===''))
      {
        $error[]=' EAN,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['kolor']))&&($_SESSION['kolor']===''))
      {
        $error[]=' Kolory,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['uzytkow']))&&($_SESSION['uzytkow']===''))//uzytki w wykrojniki
      {
        $error[]=' Wykrojnik,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((!isset($_SESSION['number_of_teeth']))&&($_SESSION['number_of_teeth']==='')&&($_POST['number_of_teeth']===''))
      {
        $error[]=' Ilość zębów,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['reps']))&&($_SESSION['reps']===''))
      {
        $error[]=' Powtórzeń,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['material_width']))&&($_SESSION['material_width']==='')&&($_POST['material_width']===''))
      {
        $error[]=' Zalecana szerokość materiału,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['paper']))&&($_SESSION['paper']==='')&&($_POST['paper']===''))
      {
        $error[]=' Papier,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['glue'] ))&&($_SESSION['glue']==='')&&($_POST['glue']===''))
      {
        $error[]=' Klej,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['quantity_er']))&&($_SESSION['quantity_er']==='')&&($_POST['quantity_er']===''))
      {
        $error[]= ' Ilość e/r,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['bush']))&&($_SESSION['bush']==='')&&($_POST['bush']===''))
      {
        $error[]=' Tulejka,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['ilosc_uzytkow']))&&($_SESSION['ilosc_uzytkow']==='')&&($_POST['ilosc_uzytkow']===''))
      {
        $error[]=' Ilość użytków,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['direction_roll']))&&($_SESSION['direction_roll']===''))
      {
        $error[]=' Kierunek nawoju,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['comments_to_order']))&&($_SESSION['comments_to_order']==='')&&($_POST['comments_to_order']===''))
      {
        $error[]=' Uwagi,';
        //include $katalogskr.'/include/error.html.php';
      }
  if ((isset($_SESSION['print_report']))&&($_SESSION['print_report']==='')&&($_POST['print_report']===''))
      {
        $error[]=' Raportu wydruku,';
        //include $katalogskr.'/include/error.html.php';
      }
  //  $_SESSION['error'] = $error; //zapis błędów do zmiennej sesyjnej
  if ((isset($error)) && $error != '')
      {
  ?>    <div style="margin: 0 20px 0 20px;">
          <p style="color: red; font-weight: bold; margin: 5px; border: 2px solid red;">
            <span style="text-decoration: underline; text-alighn: right;">UWAGA !!! </span><br>
            Następujące pola karty produkcji pozostają nie wypełnione :
<?php       foreach($error as $value) // wyświetlenie zapisanych w tablicy błędów
            {
                $error = $value;
                print $error;
            } ?>
          </p>
        </div>
<?php  }else
       {  }
      //button zatwierdzający dane do zamówienia
       $yes='Wprowadzone dane zostały zapisane i przeliczone';
       include $katalogskr.'/include/yes.html.php';?>
       <div class="col-md-2 offset-md-5 mb-4">
    <?php if ($_SESSION['mode']==='edit')
         {  ?>
           <a href = "index.php?menuadmin=potw_karta_prod">
           <button type="button" class="btn btn-primary btn-block"  title="Przycisk zakończy procedurę w tym oknie">Zapisz zmiany</button></a>
             <!-- powyżej button w trybie tworzenia nwej karty produkcji z katalogu "zamowienia" -->
    <?php }else{  ?>
           <a href = "index.php?menuadmin=potw_karta_prod">
           <button type="button" class="btn btn-primary btn-block">Zamów</button></a>
           <!-- powyżej button w trybie tworzenia nwej karty produkcji z "list_of_produktion_cards.php" -->
    <?php  }    ?>
  </div> <?php
  }
?>
