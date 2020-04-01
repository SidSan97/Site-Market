<?php
/*session_start();*/
if(!$_SESSION['usuario'])
{
	header('Location: index.php');
	exit();
}

//VERIFICADOR DE LOGIN

