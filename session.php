<?php
session_start();

if(isset($_SESSION["counter"])) {
    $_SESSION["counter"]++;
} else {
    $_SESSION["counter"]=1;
}

?>


<html>

   <head>
      <title>Setting up a PHP session</title>
   </head>

   <body>
      <?php  echo ( $msg ); ?>
   </body>

</html>
