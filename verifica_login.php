<?php
/*session_start();*/

if(!isset($_SESSION['usuario']))
{
  $_SESSION['nao_autenticado'] = true;
	/*header('Location: index.php');
	exit();*/
}

//VERIFICADOR DE LOGIN
/*
//session_start();

if(!$_SESSION['usuario'])
{
	header('Location: login.php');
	exit();
}*/

//VERIFICADOR DE LOGIN

