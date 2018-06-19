<form method="post" action="">
  <div class="inline-block">
    <div class="search_x">
      <label>x od</label>
  	<?php echo '<input name="wymiar_x_od" size="12%" placeholder=" '.$_SESSION['wymiar_x_od'].'" >';?>
      <label>do</label>
  	<?php echo '<input name="wymiar_x_do" size="12%" placeholder=" '.$_SESSION['wymiar_x_do'].'" >';?>
    </div>
    <div class="search_y">

      <label>y od</label>
  	<?php echo '<input name="wymiar_y_od"  size="12%" placeholder=" '.$_SESSION['wymiar_y_od'].'" >';?>
      <label>do</label>
  	<?php echo '<input name="wymiar_y_do"  size="12%" placeholder=" '.$_SESSION['wymiar_y_do'].'" >';?>
    </div>
    <div class="button_inline_block">
      <input id="submit" name="submit" type="submit" value="Szukaj">
      <input id="submit" name="submit" type="submit" value=" Czyść ">
    </div>
  </div>
 </form>
