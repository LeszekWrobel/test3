<?php
if(isset($_GET['menuadmin'])) 
{
	$menuadmin = strtoupper($_GET['menuadmin']); //zamiana na wielkie litery
	print'<span style="color: green; font-weight: bold;">'.$menuadmin.'</span>';
}
?>
<div id="menu_order">
<?php
echo '<ul>';
echo '<li><a href="?menuadmin=zamowienia_wszystkie">Wszystkie</a></li>' ;
echo '<li><a href="?menuadmin=zamowienia_drukarki">Drukarki</a></li>' ;
echo '<li><a href="?menuadmin=zamowienia_przewijarki">Przewijarki</a></li>' ;
echo '<li><a href="?menuadmin=zamowienia_zrealizowane">Zrealizowane</a></li>' ;
echo '</ul>';
?>
</div>
