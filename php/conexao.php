<?php

//Variaveis

$usuario = "root";
$senha = "";
$base = "ajax";
$url = "localhost";

 //Criar a conexao

 $conexao = mysqli_connect($url, $usuario, $senha, $base);

// Caso necessite rodar um teste de conexão com o banco, rode essa condição abaixo:

/*  if (!$conexao) {
    die("Conexão Falhou, ERRO: " . mysqli_connect_error());

 } echo "Bem sucedida";
 */

?>