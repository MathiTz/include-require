<?php

//include "exemplo-01.php"; DA ACESSO AO INCLUDE_PATH E INCLUDE DINAMICO (PELA URL)
//include_once
//require "exemplo-01.php"; OBRIGA A EXISTENCIA DO ARQUIVO E QUE FUNCIONE
//require_once
require_once "exemplo-01.php";

$resultado = somar(10, 15);

echo $resultado;

?>