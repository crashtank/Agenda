<?php 
	require('./dataBaseConnect.php');
	$con = new ConectorBD(); 
	$response['msg'] = $con->verifyConexion();
	return $response['msg']; 

 ?>