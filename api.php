<?php
 require_once "connection.php";
 require_once "cities.php";

 require_once "street.php";
 
 
 $st=new Street($_POST["newStreet"],$_POST["newCity"]);

 echo $st->test1();
 


  ?>


