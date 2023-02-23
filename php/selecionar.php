<?php


//conexão
include("conexao.php");

//SQL

$sql = "SELECT * FROM tarefas";

//Executar o comando

$executar = mysqli_query($conexao, $sql);

//Estrutura da Tabela
echo "<table>";
echo "<th>Tarefa</th>";
echo "<th>Descrição</th>";
echo "<th>Ação</th>";

//Exibir Dados

while($indice = mysqli_fetch_assoc($executar)){
    echo "<tr>";   
        echo "<td>".$indice["tituloTarefa"]."</td>";
        echo "<td>".$indice["descricaoTarefa"]."</td>";
        echo "<td><button class='btnExcluir' id='".$indice['idTarefa']."'>Concluído</button></td>";
    echo "</tr>";
}

//Finalizar tabela
echo "</table>";

?>