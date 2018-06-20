<!-- Large modal -->
<?php echo'<div class="modal fade bd-example-modal-lg" id="modal_window" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">';?>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php //`include 'include\ini_session_variables.php'; ?>
      <!-- ... -->
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">
          <?php
          $id =$_POST['id'];
          print	$id;
          print $wiersz['id'];
          echo 'Termin realizacji = '.$wiersz['termin_realizacji'].' |  Nakład = '.$wiersz['ilosc_do_realizacji'];
          ?>
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<!-- ... -->
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
            <h4> <b>  </b></h4>
            <?php
            //$id=$_POST[id];
            print $wiersz['id'].'<br />';
            print $wiersz['id_wykrojnik'];
            $_GET['id_wykrojnika']=$wiersz['id_wykrojnik'];
          $_GET['id']=$wiersz['id'] ;
           $_GET['zmienne'] = 'restart';

            //include 'include/karty_produkcji/include/load_production_card.php';// kasowanie zmiennych i ładowanie danych starego zamówienia z bazy
            //include 'include/karty_produkcji/include/ini_edi_variables.php';
            include 'include/karta_produkcji/produktion_card.php';
            ?>
          </div>
          </div>
          <div class="row">
            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
          </div>
          <div class="row">
            <div class="col-sm-9">
              Level 1: .col-sm-9
              <div class="row">
                <div class="col-8 col-sm-6">
                  Level 2: .col-8 .col-sm-6
                </div>
                <div class="col-4 col-sm-6">
                  Level 2: .col-4 .col-sm-6
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ... -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <?php echo' <a class="btn btn-primary" href="index.php?menuadmin=podgl_edycja_kp&id='.$id.'&zmienne=restart&id_wykrojnika='.$id_wykrojnika.'" role="button">Edytuj</button></a> ';?>
      </div>
    </div>
  </div>
</div>
