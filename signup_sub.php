<?php 
include "class/users.php";
$register=new users;
extract($_POST);
$query="insert into signup ('firstname', 'lastname', 'email', 'pass') values ('$f','$l','$e','$p')";
if($register->signup($query))
	
{
	$register->url("/regna/home.php?run=success"); 
}

 ?>