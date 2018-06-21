<!-- Modal -->
<div class="modal fade" id="zpiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Uwaga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Wprowadzone wartości zostaną przeliczone i zapisane.<br>
      Wybierz TAK aby utworzyć nową kartę.<br>
      Wybierz NIE aby powrócić do edycji.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" data-dismiss="modal">Nie</button>
        <?php echo '<a href="include/karta_produkcji/zapis.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit" type="submit" value=" Zamów ">Tak</a>';?>
    <?php //echo '<a href="?menuadmin=karta_produkcji&id='.$_SESSION['id'].'&id_wykrojnika='.$_SESSION['id_wykrojnik'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="submit" type="submit" value=" Zamów ">Tak</a>';
        ?>
      </div>
    </div>
  </div>
</div>
