<?php
include_once("Genero.php");
$genero = new Genero();

$generos = $genero->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 id="genero" class="text-center">Gênero</h1>
    <br>
<div class="container">
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Gênero</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>Descrição</td>
        </tr>

        <?php foreach ($generos as $genero){
            echo "
            <tr>
                <td style='width: 130px'>
                    <a href='add.php?id_genero={$genero['id_genero']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_genero={$genero['id_genero']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$genero['id_genero']}</td>
                <td>{$genero['nome']}</td>
                <td>{$genero['descricao']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';