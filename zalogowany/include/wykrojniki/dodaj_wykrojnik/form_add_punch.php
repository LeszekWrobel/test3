<div class="container">
  <form method="post" action="" ENCTYPE="multipart/form-data">
      <label><b>Dodaj wykrojnik</b></label><br />
      <div class="row">
        <div class="col-sm">
          <label>Wymiar X mm</label><br />
        	<?php echo '<input name="dimension_x"  placeholder=" '.$_SESSION['dimension_x'].'" ><br />';?>
          <label>Wymiar Y mm</label><br />
        	<?php echo '<input name="dimension_y"  placeholder=" '.$_SESSION['dimension_y'].'"><br />';?>
          <label>Kształt</label><br />
        	<?php echo '<input name="form"  placeholder=" '.$_SESSION['form'].'"><br />';?>
          <label>Materiał</label><br />
        <?php echo '<input name="raw_material"  placeholder=" '.$_SESSION['raw_material'].'"><br />';?>
        </div>
        <div class="col-sm">
  <?php  //FORMULARZ - START
         echo '<tr><td><input type="file" name="plik"/></td><td><br />';// grafika wykrojnika
    // STOP -formularz dodawania grafiki
         echo '<img style height="330px" src="../img/punch/'.$_SESSION['form_link'].'">';
?>
        </div>
        <div class="col-sm">
    	    <label>Ilość zębów</label><br />
        	<?php echo '<input name="number_of_teeth"  placeholder=" '.$_SESSION['number_of_teeth'].'" ><br />';?>
          <label>Użytków</label><br />
        	<?php echo '<input name="uzytkow"  placeholder=" '.$_SESSION['uzytkow'].'"><br />';?>
          <label>Powtórzeń</label><br />
        	<?php echo '<input name="reps"  placeholder=" '.$_SESSION['reps'].'"><br />';?>
          <label>Promień</label><br />
        	<?php echo '<input name="radius"  placeholder=" '.$_SESSION['radius'].'"><br />';?>
        </div>
      </div>
  <input id="submit" name="submit" type="submit" value="Dodaj">
  <input id="submit" name="submit" type="submit" value="Czyść">
</form>
</div>
