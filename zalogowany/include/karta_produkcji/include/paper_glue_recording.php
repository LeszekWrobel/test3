<?php
if (isset($_POST['submit']) && ($_POST['submit'] !=''))
{ // Form has been submitted
	// if (($_POST['paper']=='' && $_SESSION['paper']=='') || ($_POST['glue']=='' && $_SESSION['glue']=='') || ($_POST['quantity_er']=='' && $_SESSION['quantity_er']=='') || ($_POST['bush']=='' && $_SESSION['bush']=='') || ($_POST['ilosc_uzytkow']=='' && $_SESSION['ilosc_uzytkow']=='') || ($_POST['direction_roll']=='' && $_SESSION['direction_roll']==''))
	// {
		// $error ='nie wypełniłeś wszystkich pól formularza';
		// include $katalogskr.'/include/error.html.php';
		// include 'form_paper_glue.php';
	// }
	// else
	// {
		if ($_POST['paper']!='') {$_SESSION['paper'] = $_POST['paper'];}
		if ($_POST['glue']!='')  {$_SESSION['glue'] = $_POST['glue']; }
		if ($_POST['ilosc_uzytkow']!='')  {$_SESSION['ilosc_uzytkow'] = $_POST['ilosc_uzytkow'];}
		if ($_POST['bush']!='')  {$_SESSION['bush'] = $_POST['bush'];}
		if ($_POST['quantity_er']!='') {$_SESSION['quantity_er'] = $_POST['quantity_er'];}
		if ((isset($_POST['direction_roll']))&&($_POST['direction_roll']!='')) {$_SESSION['direction_roll'] = $_POST['direction_roll'];}
		// if ($_SESSION['roll_length']=='') {}
		if ((isset($_SESSION['number_of_teeth']))&&($_SESSION['number_of_teeth']!='')&&(isset($_SESSION['reps']))&&($_SESSION['reps']!='')&&(isset($_SESSION['quantity_er']))&&($_SESSION['quantity_er']!='')&&(isset($_SESSION['ilosc_uzytkow']))&&($_SESSION['ilosc_uzytkow']!=''))
		{
			$_SESSION['roll_length'] = (((($_SESSION['number_of_teeth']*3.175)/$_SESSION['reps'])*$_SESSION['quantity_er'])/$_SESSION['ilosc_uzytkow'])/1000; // długość rolki obliczana ze wzoru.
			$_SESSION['roll_length'] = round($_SESSION['roll_length'],2); // zaokrąglenie do 2 miejsca po przecinku
		}
		if (isset($_SESSION['direction_roll']) && ($_SESSION['direction_roll']) !='')
			{
				print 'wybrany nawój -- <img src = "include/karta_produkcji/nawoj_gif/'.$_SESSION['direction_roll'].'.gif">';
			}
			include 'form_paper_glue.php';
	// }
}
else
{ // Form has not been submitted
	if (isset($_SESSION['direction_roll']) && ($_SESSION['direction_roll']) !='')
		{
			print 'wybrany nawój - <img src = "include/karta_produkcji/nawoj_gif/'.$_SESSION['direction_roll'].'.gif">';
		}
		include 'form_paper_glue.php';
}
?>
