 <?php //include 'kalendarz.php'; ?>
<form method="post" action="">
	<?php echo '<label>Data : '.date('Y-m-d').'</label><br /><br />';?>
    <label>KOD</label>
	<?php echo '<label>= '.$_SESSION['kod_karty_prod'].'</label><br />';?>
    <label>WTWÓRNIA</label>
	<?php echo '<label>= '.$_SESSION['nazwa_wytw'].'</label><br />';?>
	<?php //echo '<input name="nazwa_wytw"  placeholder=" '.$_SESSION['nazwa_wytw'].'"><br />';?>
    <label>WZÓR</label>
	<?php echo '<label>= '.$_SESSION['nazwa_wzoru'].'</label><br />';?>
	<?php //echo '<input name="nazwa_wzoru"  placeholder=" '.$_SESSION['nazwa_wzoru'].'"><br />';?>
    <label>EAN</label>
	<?php echo '<label>= '.$_SESSION['kod_ean'].'</label><br /><br />';?>
	<!--- do zapisania w sesji -->
	<label>Nakład</label><br />
	<?php echo '<input name="circulation"  placeholder=" '.$_SESSION['circulation'].'"><br />';?>
	<label>Termin</label><br />
 	<?php //echo '<input name="date_of_completion" id="indexjQueryDatePicker1" style="" placeholder=" '.$_SESSION['date_of_completion'].'"><br />';?>
  <!-- <form class="" action="" method="post"> -->
  	<?php echo '<input type="date" name="date_of_completion" value="" placeholder=" '.$_SESSION['date_of_completion'].'"><br />';?>
  <!-- </form> -->
<!-- <input type="submit" name="" value=""> -->
	<!-- <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div> -->
<?php
	/*echo value="'.$_POST["termin"].'"
	'<tr><td>Data umowy</td><td>: <input type="text" id="indexjQueryDatePicker1" style="" name="dataum" value="'.$_POST["dataum"].'">';*/?>
	<label>Uwagi</label><br />
	<?php echo '<textarea rows="3" cols="15" input type="text" name="comments_to_order"  placeholder=" '.$_SESSION['comments_to_order'].'"></textarea><br />';
	// echo '<input name="uwagi"  type="textarea" placeholder=" '.$_SESSION['uwagi'].'"><br />';?>
	<input id="submit" name="submit" type="submit" value="Potwierdz">
<?php	/*
echo'<input id="submit" name="submit" type="image" src="'.$link.'/'.$katalog.'/img/button/potw_zam.png" value=" Zatwierdź ">';
*/
?>
 </form>
