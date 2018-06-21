<title>Karta produkcji</title>
  <!-- Image and text -->
  <?php
  include 'include/potw_karta_prod/necessary_variables.php';// sprawdzenie czy wszystkie wymagane pola są wypełnione
  include 'include/karty_produkcji/include/load_production_card.php';// kasowanie zmiennych i ładowanie danych starego zamówienia z bazy
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 offset-md-4 ">

      <?php if ($_SESSION['mode']==='edit')
        {}else{
          include 'include/karta_produkcji/include/form_img.php';
        }
        ?>
 <?php
      if (isset($_POST['button']) == "  dodaj  ")
      {
        $max_rozmiar = 3024*3024;
        include 'include/karta_produkcji/include/graphic_recording.php'; //ładowanie dowolnej grafiki
      }else{}
      ?>
      </div>
      <div class="col-md-12">
        <form method="post" action="">
          <div class="row text-center">
            <div class="col-md-3 text-center">
              <?php include 'include/karta_produkcji/include/search_prod.php'; ?>
              <div class="col-md-10 offset-md-1 mt-2">
                <div class="row-md-10 mb-0">
                  <a href = "index.php?menuadmin=wykrojniki">
                    <button type="button" class="btn btn-success btn-block">
                     Wykrojnik wybierz
        					  </button></a>
                </div>
                <!-- <div class="row-md-10">
                <?php// if ($_SESSION['mode']==='edit') {}else{
                  ?><a href = "index.php?menuadmin=potw_karta_prod">
                    <button type="button" class="btn btn-primary btn-block">Zamów</button></a>
                <?php // }    ?>
                </div> -->
              </div>
            </div>
            <div class="col-md-9">
              <div class="row pr-5 mr-3">
                <div class="col-md-12">
                  <div id="graphics">
                    <?php echo '<img style height="330px" src="'.$link.'/'.$katalog.'/img/graphics/'.$_SESSION['link_img'].'">';?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-4 text-center row-relative">
            <div class="col-md-5 text-center col-border">
                <?php include 'include/karta_produkcji/include/paper_glue_recording.php'; ?>
            </div>
            <div class="col-md-7">
              <div class="bd-callout bd-callout-warning">
                <div class="row">
                  <div class="col-md-12 ">
                    <?php include 'include/karta_produkcji/include/colour_recording.php'; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <?php include 'include/karta_produkcji/include/table_punch.php'; ?>
                      <?php include 'include/karta_produkcji/include/save_material_width.php';?>
                  </div>
                </div>
                <div class="row ml-3 mr-2">
                  <?php include 'include/karta_produkcji/include/form_and_save_comments_to_order.php'; ?>
    					  </div>
                <div class="row ml-3 mr-2">
                  <?php include 'include/karta_produkcji/include/form_and_save_print_report.php'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 offset-md-4 mt-3 mb-2">
             <input id="submit" class="btn btn-danger btn-block " name="submit" type="submit" value=" Zmień, Przelicz i Zapisz ">
            <!-- <input id="submit" class="btn btn-danger btn-block" data-toggle="modal" data-target="#zpiz" value=" Zmień, Przelicz i Zapisz "> -->
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#zpiz">
              Launch demo modal
            </button> -->
          </div>

          </form>
        </div>
    </div>
  </div>
  <?php include 'include/karta_produkcji/modal/modal_karta_produkcji.php'; ?>
