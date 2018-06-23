<div class="">
  <?php include ('include/table_produktion_card_list.php');?>
</div>
<div class="">
<?php
echo '<a class="btn btn-primary mr-2" href="index.php?menuadmin=karta_produkcji&zmienne_ini=clear" role="button">Czysta karta</a>';
echo '<a class="btn btn-primary" href = "index.php?menuadmin=karta_produkcji&zmienne=restart&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" role="button">Edycja karty</a>';
?>
</div>
