<?php						
if(isset($_GET['yes'])) 
{	
	//echo 'gdy dane o zamówieniu zostaną zapisane do bazy';
	$yes = $_GET['yes'];
	include $katalogskr.'/include/yes.html.php';
}else
{
		//echo 'gdy dane o zamówieniu NIE zostaną zapisane do bazy';
}
?>