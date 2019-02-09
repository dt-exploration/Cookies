<?php

//Create and modify cookie
if(!isset($_COOKIE["id"]))  {
    setcookie("id","j23sj942Ajola2042p",time()+300);
}

 ?>

<?php
if(isset($_COOKIE["id"])) {
    echo $_COOKIE["id"];
}

?>
