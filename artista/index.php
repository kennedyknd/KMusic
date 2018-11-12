<?php
include_once("Artista.php");
$artista = new Artista();

$artistas = $artista->recuperarDados();

include_once '../cabecalho.php';
?>
<div class="container">
    <h1 id="artista" class="text-center">Artistas</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo artista</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>Nascimento</td>
            <td>Cidade</td>
            <td>Pais</td>
            <td>Instrumento</td>
            <td>Foto</td>
        </tr>

        <?php foreach ($artistas as $artista){
            echo "
            <tr>
                <td style='width: 210px'>
                    <a href='add.php?id_artista={$artista['id_artista']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_artista={$artista['id_artista']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                    <a href='view.php?id_artista={$artista['id_artista']}' class=\"btn btn-sm btn-info\">Visualizar</a>
                </td>
                <td>{$artista['id_artista']}</td>
                <td>{$artista['nome']}</td>
                <td>{$artista['datanasci']}</td>
                <td>{$artista['cidade']}</td>
                <td>{$artista['pais']}</td>
                <td>{$artista['instrumento']}</td>
                <td>{$artista['foto']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';