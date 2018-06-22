<!-- Modal -->
<div class="modal fade" id="drukarki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  alert-primary" role="alert">
        <h4 class="modal-title" id="exampleModalLabel"><strong>Uwaga !</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Wprowadzona wartość prawdopodobnie nie jest poprawna.<br>
      <!-- Wybierz TAK aby utworzyć nową kartę.<br> -->
      <!-- Wybierz POPRAW aby powrócić do edycji. -->
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary btn-lg active" data-dismiss="modal">Popraw</button>
        <!-- <button type="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" data-dismiss="modal">Nie</button> -->
        <!-- <a href="include/karta_produkcji/zapis.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit" type="submit" value=" Zamów ">Popraw</a> -->
    <?php //echo '<a href="?menuadmin=karta_produkcji&id='.$_SESSION['id'].'&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit" type="submit" value=" Zamów ">Tak</a>';
        ?>
      </div>
    </div>
  </div>
</div>
