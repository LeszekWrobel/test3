<?php
if (isset($_POST['submit']) && ($_POST['submit']) !='')
{ // Form has been submitted
	if ($_POST['print_report']!='') {$_SESSION['print_report'] = $_POST['print_report'];}
}
else
{ // Form has not been submitted
}
?>
<!--<form method="post" action="">-->
<div class="col-md-12 bg-warning">Raport wydruku</div>
	<div class="col-md-12">
		<?php echo '<textarea input type="text"  class="form-control" id="formGroupExampleInput" name="print_report"  placeholder=" '.$_SESSION['print_report'].'"></textarea>'; ?>
	</div>
	<!--<input type="image" src="obraz2.png" alt="jakis tekst" name="wyslij" value="3">-->
	
