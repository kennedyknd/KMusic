<?php
include_once("Album.php");
$album = new album();

$albums = $album->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 id="album" class="text-center">Album</h1>
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
            <td>Lancamento</td>
            <td>ID_Artista</td>
            <td>ID_Genero</td>
        </tr>

        <?php foreach ($albums as $album){
            echo "
            <tr>
                <td style='width: 130px'>
                    <a href='add.php?id_album={$album['id_album']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_album={$album['id_album']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$album['id_album']}</td>
                <td>{$album['nome']}</td>
                <td>{$album['lancamento']}</td>
                <td>{$album['id_artista']}</td>
                <td>{$album['id_genero']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';