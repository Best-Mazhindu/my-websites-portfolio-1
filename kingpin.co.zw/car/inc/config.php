<?php

 try 
 { 
 $pdo= new PDO("mysql:host=localhost;dbname=eliohai_kingpin","eliohai_intelli","intelli2018"); 
 } catch 
(PDOException $exc) 
{ echo $exc->getMessage(); exit(); }

?>