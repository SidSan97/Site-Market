<?php

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$database = "market";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database) or die ('Não foi possivel conectar');