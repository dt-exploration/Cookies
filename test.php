<?php
session_start();
//Delete cookie (expire in the past method)
//setcookie("id","",time()-3500);
//echo $_COOKIE["id"];

//Unistavanje sesije (sve varijable, ili sa unset samo odredjene)
session_destroy();
//unset($_SESSION["counter"]);
 ?>
