<?php
include_once("Musica.php");
$musica = new Musica();

$musicas = $musica->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 id="musica" class="text-center">Música</h1>
    <br>
<div class="container">
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Música</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>Duracão</td>
            <td>Lancamento</td>
            <td>ID_Artista</td>
            <td>ID_Album</td>
            <td>ID_Gênero</td>
        </tr>

        <?php foreach ($musicas as $musica){
            echo "
            <tr>
                <td style='width: 130px'>
                    <a href='add.php?id_musica={$musica['id_musica']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_musica={$musica['id_musica']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$musica['id_musica']}</td>
                <td>{$musica['nome']}</td>
                <td>{$musica['duracao']}</td>
                <td>{$musica['lancamento']}</td>
                <td>{$musica['id_artista']}</td>
                <td>{$musica['id_album']}</td>
                <td>{$musica['id_genero']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';