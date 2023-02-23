$(document).ready(function () {

    // Ao carregar o documento, será exibidbela de Tasks
    selecionar();

    //Ação do botão cadastrar
    $("#btnCadastrar").click(function () {

        // Variaveis
        var tituloTarefa = $("#tituloTarefa").val();
        var descricaoTarefa = $("#descricaoTarefa").val();

        //Cadastrando com Ajax

        if (tituloTarefa == "") {

            alert("Digite o titulo para adicionar")

        } else {

            var dados = "tituloTask=" + tituloTarefa + "&descricaoTask=" + descricaoTarefa;

            $.ajax({
                type: "POST",
                url: "php/cadastrar.php",
                data: dados,
                success() {
                    selecionar();
                }
            });

            $("#tituloTarefa").val("");
            $("#descricaoTarefa").val("");

        }
    });

    //Ação ao clicar no botão Excluir
    $(document).on('click', '.btnExcluir', function () {
        excluir($(this).attr('id'));

        alert("funciona")

    });

});

//Selecionar Dados
function selecionar() {

    // Ajax
    $.ajax({
        type: "POST",
        url: "php/selecionar.php",
        success(obterDados) {
            $("#tabela").html(obterDados);
        }
    });

};

function excluir(idTarefa) {
    $.ajax({
        type: "GET",
        url: "php/excluir.php",
        data: 'idTask=' + idTarefa,
        success() {
            selecionar();
        }
    });
};
