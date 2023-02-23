<?php

//incluir o arquivo de conexão
include("conexao.php");

//Obtendo Tarefas
$tituloTarefa = $_POST["tituloTask"];
$descricaoTarefa = $_POST["descricaoTask"];

//SQL

$sql =  "INSERT INTO tarefas VALUES (null, '$tituloTarefa', '$descricaoTarefa')";


//inserir Dados

mysqli_query($conexao, $sql);

?>