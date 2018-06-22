<?php
print ' LISTA KART PRODUKCYJNYCH <br />';
echo '<a class="btn btn-primary mr-2" href="index.php?menuadmin=karta_produkcji&zmienne_ini=clear" role="button">Czyść kartę</a>';
echo '<a class="btn btn-primary" href = "index.php?menuadmin=karta_produkcji&zmienne=restart&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" role="button">Edytuj kartę</a>';
include ('include/table_produktion_card_list.php');
?>
