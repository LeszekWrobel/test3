<!-- Modal -->
<div class="modal fade" id="zpiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Large modal -->
<?php echo'<div class="modal fade bd-example-modal-lg" id="'.$wiersz['id'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">';?>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">
          <?php echo $wiersz['nazwa_wytw']; ?>
          Podgląd karty produkcji KOD:
          <?php echo $wiersz['kod_karty_prod']; ?>
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php
        echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
        echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
 ?>
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
<h4> <b>Jakie dane w podglądzie ?</b></h4>
            <?php echo'<img src="../img/graphics/'.$wiersz['grafika'].'" class="img-fluid" alt="">';  ?>

          </div>

            <!-- <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div> -->
          </div>
          <!-- <div class="row">
            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
          </div> -->
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

      ...
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij--</button>
<?php echo' <a class="btn btn-primary" href="?menuadmin=podgl_edycja_karta_produkcji&id='.$wiersz['id'].'&zmienne=restart" role="button">Edytuj</button> ';?>
 <!-- <button type="button" class="btn btn-primary" href="?menuadmin=podgl_edycja_karta_produkcji&id='.$wiersz['id'].'&zmienne=restart">Edytuj</button> '; -->


      </div>
    </div>
  </div>
</div>
