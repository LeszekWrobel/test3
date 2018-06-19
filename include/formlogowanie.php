<?php 
if(isset($_SESSION['blad']))
{
$error = $_SESSION['blad'];
include 'include/error.html.php';
}
 ?>
<form method="POST" action="">
<table cellpadding="2%" cellspacing="2%" >
<tr><td >Login:</td><td><input type="text" name="login" maxlength="32"></td></tr>
<tr><td >Hasło:</td><td><input type="password" name="haslo" maxlength="32"></td></tr>
<tr><td></td><td><input type="submit" value="  Zaloguj  "></td></tr>
</table>
</form>
 
 

