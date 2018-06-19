<form method="post" action="">
	<div class="search">   <label>KOD</label>
	<?php echo '<input name="search_kod_karty_prod" size="11%" placeholder=" '.$_SESSION['search_kod_karty_prod'].'" >';?></div>
	<div class="search">  <label> &nbsp;WYTWÓRNIA</label>
	<?php echo '<input name="search_nazwa_wytw"  size="11%" placeholder=" '.$_SESSION['search_nazwa_wytw'].'">';?></div>
	<div class="search">  <label> &nbsp;WZÓR</label>
	<?php echo '<input name="search_nazwa_wzoru"  size="11%" placeholder=" '.$_SESSION['search_nazwa_wzoru'].'">';?></div>
	<div class="search">  <label> &nbsp;EAN</label>
	<?php echo '<input name="search_kod_ean"  size="11%" placeholder=" '.$_SESSION['search_kod_ean'].'">';?></div>
	<div class="submit"><input id="submit" name="submit" type="submit" value=" Szukaj ">
	<input id="submit" name="submit" type="submit" value=" Czyść "></div>
 </form>
