<div id="wykrojniki">
<?php 
if(isset($_GET['yes'])) 
			{	
				//echo 'gdy dane o zamówieniu zostaną zapisane do bazy';
				$yes = $_GET['yes'];
				include $katalogskr.'/include/yes.html.php';
			}
include 'include/table_punch.php';
echo '<a href = "index.php?menuadmin=dodaj_wykrojnik"><img src="'.$link.'/'.$katalog.'/img/button/dodaj_wykrojnik.png" ></a>';
?>
</div>
