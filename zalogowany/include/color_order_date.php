<!-- skrypt koloruje tekst w zależności od daty realizacji zamówienia -->
<?php
$dnido = ceil((time() -  strtotime($wiersz['termin_realizacji'])) / (60 * 60 * 24));//obliczamy ilość dni jaka pozostała
							//$dnido = abs($dnido); //wartość bezwzględna
							$kod_kolor = '<span style="color: black; font-weight: bold;">'.$wiersz['kod_karty_prod'].'</span>';
								if($dnido>-7)
									{$kod_kolor = '<span style="color: green; font-weight: bold;">'.$wiersz['kod_karty_prod'].'</span>';
										if($dnido>-3)
											{$kod_kolor = '<span style="color: orange; font-weight: bold;">'.$wiersz['kod_karty_prod'].'</span>';												if($dnido>0)
														{$kod_kolor = '<span style="color: red; font-weight: bold;">'.$wiersz['kod_karty_prod'].'</span>';						
														}
											}
									}
							echo $kod_kolor;
?>
