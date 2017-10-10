<?php

session_start();


	include '../../class/clientes.php';
	include '../../class/conmysql.php';

	/*	Variables  */

	 $sql="SELECT cl_nombre FROM clientes WHERE cl_email='".$_SESSION["cl_email"]."'";

	$NewObjeto = new Clientes();
	
	$_SESSION["cl_nombre"] = $NewObjeto->SeleccionarUsuario($sql);
	

?>
