<?php

require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirContato($conexao,$nomeContato,$foneContato)){
echo("As informações do contato foram salvas");
}else{
echo("Alerta!!! As informações do contato não foram salvas");
}

?>