<?php
include_once('../cabecalho.php');
include_once 'Genero.php';

$genero = new Genero();

if(!empty($_GET['id_genero'])){
    $genero->carregarPorId($_GET['id_genero']);
}
?>

    <head>
        <title>Novo Gênero</title>
    </head>

<div class="container">

    <h2 id="genero">Novo Gênero</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_genero" class="form-control" value="<?php echo $genero->getIdGenero();?>">

        <!-- area de campos do form -->
        <hr />

        <div class="form-group col-md-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $genero->getNome();?>" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-12">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" value="<?php echo $genero->getDescricao();?>" id="descricao" name="descricao" required>
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