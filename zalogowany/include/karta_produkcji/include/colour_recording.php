<?php
//skrypt zapisywania wpisanych do formularza kolorów
if (isset($_POST['submit']) && ($_POST['submit']!='')) // gdy wcisnięto button formularza
{
	if ((isset($_POST['kolor'])) && ($_POST['kolor']!='') && (implode('',$_POST['kolor']) != "")) // gdy którekolwiek pole formularza zostało wypełnione
	{
		$_SESSION['kolor'] = $_POST['kolor']; // zapisanie nowych zmiennych wysłanych z formularza do sesji
		include 'colour.php'; // wyświetlenie formularza z polami do zapisania kolorów
		print '<small>wybrane kolory - </small> | ';
		$i = 0 ;	// licznik kolorów
		foreach($_SESSION['kolor'] as $value) // wyświetlenie zapisanych w tablicy kolorów
		{
			if($value!='' ) // aby seperatory nie były wyświetlane gdy polo koloru jest puste
			{
				print $value.' | '; // separator kolorów
				//print '<img src='.$value.'  height="30px"> ';
				$i++;
			}
		}
		print '<small>ilość kolorów = </small>'.$i; // Wyświetla ilość kolorów
		//print count($_SESSION['kolor']);
		$_SESSION['ilosc_kolorow'] = $i ; // zapisanie ilości kolorów do sesji
	}
	else // gdy wszystkie pola formularza były puste i naciśnieto button formularza dodawania kolorów
	{
		// $error ='zaznacz kolory do wybrania lub zmiany';
		// include $katalogskr.'/include/error.html.php';
		include 'colour.php';
			if (isset($_SESSION['kolor']) && ($_SESSION['kolor'])!='') // gdy dane o kolorach zostały zapisane do sesji zostają wyświetlone
		{
			print '<small>wybrane kolory - </small> |';
			$i = 0 ;
			foreach($_SESSION['kolor'] as $value)
			if($value!='' )
			{
				print $value.' | ';
				//print '<img src='.$value.'  height="30px"> ';
				$i++;
			}
			print '<small>ilość kolorów = </small>'.$i;
		}
	}
}
else  // gdy nie nacisnięto buttona formularza zmiany kolorów
{
	include 'colour.php';
	if (isset($_SESSION['kolor']) && ($_SESSION['kolor'])!='')
	{
		print '<small>wybrane kolory - </small> | ';
		$i = 0 ;
		foreach($_SESSION['kolor'] as $value)
		{
			if($value!='' )
			{
				print $value.' | ';
				//print '<img src='.$value.'  height="30px"> ';
				$i++;
			}
		}
		//print $i;
		print '<small>ilość kolorów = </small>'.$i;
	}
	else
	{}
}
?>
<br />
