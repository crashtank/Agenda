<?php 

 require('dataBaseConnect.php');

 	$con= new conectorBD;
	echo $con->userSession();

 ?>