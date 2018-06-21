<?php
//usuwanie zawartości katalogu tymczasowego ze zdjęciami/org/ gdy już zdjęcie zostanie zapisane w katalogu /min/ i /max/.
				$sciezka_un = 'img/graphics/';
				$katalog_un = opendir($sciezka_un);
				while ( $file_un = readdir($katalog_un) )
				{
					if ( ($file_un != '.') && ($file_un != '..') )
					unlink($sciezka_un.$file_un);
				}
?>