<?php 
include "class/users.php";
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
	$signin->url("/regna/here.php");
}else{
 	
 	$signin->url("/regna/home.php?run=failed");	
}

 ?>




