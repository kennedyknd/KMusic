<?php
include_once("Banda.php");
$banda = new Banda();

$bandas = $banda->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Album</h1>
    <br>
<div class="container">
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Album</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>Cidade</td>
            <td>Pais</td>
            <td>Nascimento</td>
            <td>ID_Genero</td>
            <td>ID_Gravadora</td>
        </tr>

        <?php foreach ($bandas as $banda){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_banda={$banda['id_banda']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_banda={$banda['id_banda']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                    <a href='view.php?id_banda={$banda['id_banda']}' class=\"btn btn-sm btn-info\">Visualizar</a>
                </td>
                <td>{$banda['id_banda']}</td>
                <td>{$banda['nome']}</td>
                <td>{$banda['cidade']}</td>
                <td>{$banda['pais']}</td>
                <td>{$banda['datanasci']}</td>
                <td>{$banda['id_genero']}</td>
                <td>{$banda['id_gravadora']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';