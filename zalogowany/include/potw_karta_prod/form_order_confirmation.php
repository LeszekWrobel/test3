<form method="post" action="">
	<?php //echo '<label>Data : '.date('Y-m-d').'</label><br /><br />';?>
    <label>KOD</label>
	<?php echo '<label>= '.$_SESSION['kod_karty_prod'].'</label><br />';?>
    <label>KLIENT</label>
	<?php echo '<label>= '.$_SESSION['nazwa_wytw'].'</label><br />';?>
    <!-- <label>WZÓR</label>
	<?php //echo '<label>= '.$_SESSION['nazwa_wzoru'].'</label><br />';?>
    <label>EAN</label> -->
	<?php //echo '<label>= '.$_SESSION['kod_ean'].'</label><br /><br />';?>
	<label>Nakład</label><br />
	<?php echo '<input name="circulation"  placeholder=" '.$_SESSION['circulation'].'"><br />';?>
	<label>Termin</label><br />
  	<?php echo '<input type="date" name="date_of_completion" value="" placeholder=" '.$_SESSION['date_of_completion'].'"><br />';?>
	<label>Uwagi</label><br />
	<div class="col-md-12">
			<div class="row text-center">
				<div class="col-md-4 offset-md-4 text-center">
					<?php echo '<textarea rows="3" cols="15" input type="text" name="comments_to_order"  placeholder=" '.$_SESSION['comments_to_order'].'"></textarea><br />';?>
				</div>
			</div>
	</div>
	<input id="submit" name="submit" type="submit" value="Potwierdz">
 </form>
