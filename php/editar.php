<?php
//conexão
include("conexao.php");

//
$tituloTarefa = $_POST["tituloTarefa"];
$descricaoTarefa = $_POST["descricaoTarefa"];

//obter código do curso

$idNoticia = $_GET["idNoticia"];

//SQL

$sql = "UPDATE tarefas SET '$tituloTarefa', '$descricaoTarefa' WHERE idNoticia = '$idNoticia'";

//Executar o comando
mysqli_query($conexao, $sql)

?>