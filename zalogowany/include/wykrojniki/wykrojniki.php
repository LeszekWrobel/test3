<div id="wykrojniki">
<?php
if(isset($_GET['yes']))
			{
				//echo 'gdy dane o zamówieniu zostaną zapisane do bazy';
				$yes = $_GET['yes'];
				include $katalogskr.'/include/yes.html.php';
			}
include 'include/table_punch.php';

?>
	<div class="col-md-4 offset-md-4">
		<div class="row-md-10 mb-0">
			<a href = "index.php?menuadmin=dodaj_wykrojnik">
				<button type="button" class="btn btn-success btn-block">
				 Dodaj wykrojnik
				</button></a>
		</div>
	</div>
</div>
