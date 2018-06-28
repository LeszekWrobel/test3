<div class="center">
	<div class="search_form">
		<?php	echo '<a class="btn btn-primary" style="margin: 4px;" href="index.php?menuadmin=karta_produkcji&zmienne_ini=czysc" role="button">Czysta karta</a>';
		?>
		<?php	echo '<a class="btn btn-primary" style="margin: 4px;" href = "index.php?menuadmin=karta_produkcji&zmienne=restart&id_wykrojnik='.$_SESSION['id_wykrojnik'].'" role="button">Edycja karty</a>';
		?>
	</div>
	<div class="search_form">
		<form method="post" action="">
			<div class="search">   <label>KOD</label>
			<?php echo '<input name="search_kod_karty_prod" size="11%" placeholder=" '.$_SESSION['search_kod_karty_prod'].'" >';?></div>
			<div class="search">  <label> &nbsp;KLIENT</label>
			<?php echo '<input name="search_nazwa_wytw"  size="11%" placeholder=" '.$_SESSION['search_nazwa_wytw'].'">';?></div>
			<div class="search">  <label> &nbsp;WZÓR</label>
			<?php echo '<input name="search_nazwa_wzoru"  size="11%" placeholder=" '.$_SESSION['search_nazwa_wzoru'].'">';?></div>
			<div class="search">  <label> &nbsp;EAN</label>
			<?php echo '<input name="search_kod_ean"  size="11%" placeholder=" '.$_SESSION['search_kod_ean'].'">';?></div>
			<div class="search"><input id="submit" name="submit" type="submit" value=" Szukaj ">
			<input  id="submit" name="submit" type="submit" value=" Czyść "></div>
	 </form>
	</div>
</div>
