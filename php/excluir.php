<?php
//conexão
include("conexao.php");

//obter código do curso

$idTarefa = $_GET["idTask"];

//SQL

$sql = "DELETE FROM tarefas WHERE idTarefa = $idTarefa";

//Executar o comando
mysqli_query($conexao, $sql)

?>