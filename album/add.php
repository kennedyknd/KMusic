<?php
include_once('../cabecalho.php');
include_once 'Album.php';
include_once '../artista/Artista.php';
include_once '../genero/Genero.php';

$artista = new Artista();
$artistas = $artista->recuperarDados();

$genero = new Genero();
$generos = $genero->recuperarDados();

$album = new Album();

if(!empty($_GET['id_album'])){
    $album->carregarPorId($_GET['id_album']);
}
?>

    <head>
        <title>Novo Album</title>
    </head>
<div class="container">

    <?php
    $teste = $artista->getIdArtista();
    echo "ID artista é $teste";
    ?>

    <h2 id="album">Novo Album</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_album" class="form-control" value="<?php echo $album->getIdAlbum();?>">

        <!-- area de campos do form -->
        <hr />

        <div class="form-group col-md-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $album->getNome();?>" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-12">
            <label for="lancamento">Descrição</label>
            <input type="date" class="form-control" value="<?php echo $album->getLancamento();?>" id="lancamento" name="lancamento" required>
        </div>

        <div class="form-group col-md-12">
            <label for="id_artista" class="control-label">Artista</label>

            <select name="id_artista" id="id_artista" class="form-control">
                <option>Selecione</option>

                <?php foreach ($artistas as $artista){
                    $checked = $artista['id_artista'] == $album->getIdArtista() ? 'selected' : '';
                    echo "<option $checked value='{$artista['id_artista']}'>{$artista['nome']}</option>";
                } ?>
            </select>

        </div>

        <div class="form-group col-md-12">
            <label for="id_genero" class="control-label">Gênero</label>

            <select name="id_genero" id="id_genero" class="form-control">
                <option>Selecione</option>

                <?php foreach ($generos as $genero){
                    $checked = $genero['id_genero'] == $album->getIdGenero() ? 'selected' : '';
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