

<?
 // ---- wysyłanie meila potwierdzającego logowanie do właściciela serwisu START -----
//mail($odbiorca, $temat, $tresc, $headera, '-f maciej.skoczyk@gmail.com')
//$linia[email]="leszek.wrobel@wp.pl";
$email = 'leszek.wrobel@wp.pl';
    $message = " zalogował się na konto do portalu z ogłoszeniami Komisu Sukien Ślubnych - Umowa<br />jego mail to : $email"; 
    $header = 'Strona Logowania Komis Sukien Ślubnych Umowa <biuro@suknieslubne.net.pl>';// zmienna $header zawiera przede wszystkim adres zwrotny 
		$temat = " zalogowł się na konto w Komisie Sukien Ślubnych - Umowa";
		$to = "biuro@suknieslubne.net.pl";// adres odbiorcy z opisem = 'opis <adres@email.com>'  
		//dane  do maila --- END ---
/*	include $katalogskr.'/include/mail_mime.php'; //skrypt wysyłającu mail z powyższymi danymi		*/

    //mail("biuro@suknieslubne.net.pl","$login zalogowł się na konto w Komisie Sukien Ślubnych - Umowa","$message","$header") ;// funkcja wysyła mail() 
// ---- wysyłanie meila potwierdzającego logowanie do właściciela serwisu STOP -----
?>
<?php  

//dane  do maila --- START ---
//$message = 'Witaj '.$nick.'<br /><br />Zarejestrowano konto na portalu z ogłoszeniami <a href=" ';
//$header = "Komis Sukien Ślubnych <biuro@suknieslubne.net.pl>"; 
//$temat = "Zarejestrowano konto w Komisie Sukien Ślubnych";
//$to = $email;
//dane  do maila --- END ---

// skrypt wysyłający mail gdy podano powyżej DANE ---  START  ----
require_once 'Mail.php';  
require_once 'Mail/mime.php';  
// ustawiamy nagłówki naszej wiadomości  
$headers = array('From' => $header,  //Jan Kowalski <jan.kowalski@example.com>
                 'Reply-To' => $header,  //Firma wysylajaca <replyto@example.com>
                 'Subject' => $temat,  //Temat Twojej wiadomości
                 'X-Custom' => 'Dodatkowe naglowki');  //Dodatkowe naglowki
  
// normalnie wystarczy ustawić tylko jeden rodzaj wiadomości zwykłą lub html,   
// jednak aby zabłysnąć profesjonalizmem powinniśmy przygotować dwie wersje   
// tej samej wiadomości, tak żeby każdy klient był wstanie ją odczytać  
$txtMsg = 'To *jest* podstawowa wersja _wiadomości_ email'.$message.'';  
$htmlMsg = $message.'';  
  
// stworzmy instancję Mail_mime z kodowaniem utf-8 dla Polskich znaczków  
$mail = new Mail_mime(array('text_charset' => 'utf-8',  
                            'html_charset' => 'utf-8',  
                            'eol' => "\n"));  
  
// wstawmy treść wiadomości txt i html  
$mail->setTXTBody($txtMsg);  
$mail->setHTMLBody($htmlMsg);  
  
// ustawiamy nagłówki takie jak od kogo wiadomość jest wysyłana,  
// do kogo, jak jest kodowana  
foreach ($headers as $name => $value){  
    $headers[$name] = $mail->encodeHeader($name, $value, 'utf-8',  
                                                 'quoted-printable');  
}  
  
// zakodujmy adres odbiorcy  
$to = $mail->encodeHeader('to', $to, 'utf-8', 'quoted-printable');  
  
// pobieramy skończoną wiadomość  
$msgDone = $mail->get();  
  
// pobieramy obrobione nagłówki  
$headers_done = $mail->headers($headers);  
  
// no i w końcu wysyłamy naszą wiadomość  
$mailSend = Mail::factory('mail');  
$mailSend->send($to, $headers_done, $msgDone);  
// skrypt wysyłający mail gdy podano powyżej DANE ---  END ----

?>