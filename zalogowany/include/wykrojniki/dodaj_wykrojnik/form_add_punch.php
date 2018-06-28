<form method="post" action="" ENCTYPE="multipart/form-data">
    <label><b>Dodaj wykrojnik</b></label><br />
    <label>Wymiar X mm</label><br />
	<?php echo '<input name="dimension_x"  placeholder=" '.$_SESSION['dimension_x'].'" ><br />';?>
    <label>Wymiar Y mm</label><br />
	<?php echo '<input name="dimension_y"  placeholder=" '.$_SESSION['dimension_y'].'"><br />';?>
    <label>Kształt</label><br />
	<?php echo '<input name="form"  placeholder=" '.$_SESSION['form'].'"><br />';?>


  <?php
  //FORMULARZ - START
  // echo '<form action="" method="post" ENCTYPE="multipart/form-data">';
  // echo '</select></td></tr>';
  echo '<tr><td><input type="file" name="plik"/></td><td><br />';
//  echo '</table>';
  // echo '</form>';// STOP -formularz dodawania danych
  ?>


  <!-- <form>
  <div class="form-group"> -->
    <!-- <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="plik" class="form-control-file" id="exampleFormControlFile1"> -->
  <!-- </div>
</form> -->
    <label>Materiał</label><br />
	<?php echo '<input name="raw_material"  placeholder=" '.$_SESSION['raw_material'].'"><br />';?>
	<label>Ilość zębów</label><br />
	<?php echo '<input name="number_of_teeth"  placeholder=" '.$_SESSION['number_of_teeth'].'" ><br />';?>
    <label>Użytków</label><br />
	<?php echo '<input name="uzytkow"  placeholder=" '.$_SESSION['uzytkow'].'"><br />';?>
    <label>Powtórzeń</label><br />
	<?php echo '<input name="reps"  placeholder=" '.$_SESSION['reps'].'"><br />';?>
    <label>Promień</label><br />
	<?php echo '<input name="radius"  placeholder=" '.$_SESSION['radius'].'"><br />';?>
	<input id="submit" name="submit" type="submit" value="Dodaj">
 </form>
