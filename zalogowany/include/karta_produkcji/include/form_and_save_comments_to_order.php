<?php
if (isset($_POST['submit']) && ($_POST['submit']) !='')
{ // Form has been submitted
	if ($_POST['comments_to_order']!='') {$_SESSION['comments_to_order'] = $_POST['comments_to_order'];}
}
else
{ // Form has not been submitted
}
?><!--	<form method="post" action="">-->
	  <div class="col-md-12 bg-primary">Uwagi</div>
		<div class="col-md-12">
			<?php echo '<textarea input type="text"  class="form-control" id="formGroupExampleInput" name="comments_to_order" placeholder=" '.$_SESSION['comments_to_order'].'"></textarea>'; ?>
	 	</div>
	<!--<input id="submit" name="submit" type="submit" value="Zapisz uwagi">
</form>-->
