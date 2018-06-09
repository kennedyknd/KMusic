<?php
include_once('../cabecalho.php');
include_once 'Musica.php';
include_once '../artista/Artista.php';
include_once '../album/Album.php';
include_once '../genero/Genero.php';

$artista = new Artista();
$artistas = $artista->recuperarDados();

$album = new Album();
$albums = $album->recuperarDados();

$genero = new Genero();
$generos = $genero->recuperarDados();

$musica = new Musica();

if(!empty($_GET['id_musica'])){
    $musica->carregarPorId($_GET['id_musica']);
}
?>

    <head>
        <title>Nova Música</title>
    </head>

<div class="container">

    <h2 id="musica">Nova Música</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_musica" class="form-control" value="<?php echo $musica->getIdMusica();?>">

        <!-- area de campos do form -->
        <hr />

        <div class="form-group col-md-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $musica->getNome();?>" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-12">
            <label for="duracao">Duração</label>
            <input type="time" class="form-control" value="<?php echo $musica->getDuracao();?>" id="duracao" name="duracao" required>
        </div>

        <div class="form-group col-md-12">
            <label for="lancamento">Lançamento</label>
            <input type="date" class="form-control" value="<?php echo $musica->getLancamento();?>" id="lancamento" name="lancamento" required>
        </div>

        <div class="form-group col-md-12">
            <label for="id_artista" class="control-label">Artista</label>

            <select name="id_artista" id="id_artista" class="form-control">
                <option>Selecione</option>

                <?php foreach ($artistas as $artista){
                    $checked = $artista['id_artista'] == $musica->getIdArtista() ? 'selected' : '';
                    echo "<option $checked value='{$artista['id_artista']}'>{$artista['nome']}</option>";
                } ?>
            </select>

        </div>

        <div class="form-group col-md-12">
            <label for="id_album" class="control-label">Album</label>

            <select name="id_album" id="id_album" class="form-control">
                <option>Selecione</option>

                <?php foreach ($albums  as $album){
                    $checked = $album['id_album'] == $musica->getIdArtista() ? 'selected' : '';
                    echo "<option $checked value='{$album['id_album']}'>{$album['nome']}</option>";
                } ?>
            </select>

        </div>

        <div class="form-group col-md-12">
            <label for="id_genero" class="control-label">Gênero</label>

            <select name="id_genero" id="id_genero" class="form-control">
                <option>Selecione</option>

                <?php foreach ($generos as $genero){
                    $checked = $genero['id_genero'] == $musica->getIdGenero() ? 'selected' : '';
                    echo "<option $checked value='{$genero['id_genero']}'>{$genero['nome']}</option>";
                } ?>
            </select>

        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>
</div>

<?php
include_once('../rodape.php');
?>