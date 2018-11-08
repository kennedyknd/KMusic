<?php
include_once('../cabecalho.php');
include_once 'Banda.php';
include_once '../gravadora/Gravadora.php';
include_once '../genero/Genero.php';

$gravadora = new Gravadora();
$gravadoras = $gravadora->recuperarDados();

$genero = new Genero();
$generos = $genero->recuperarDados();

$banda = new Banda();

if(!empty($_GET['id_banda'])){
    $banda->carregarPorId($_GET['id_banda']);
}
?>

    <head>
        <title>Nova banda</title>

        <script>
            $(function(){

                $('#nome').change(function() {
                    $nome = $('#nome').val();
                    $.ajax({
                        url: 'processamento.php?acao=verificar_nome&nome='+$nome,
                        success: function (dados) {
                            if (dados){
                                // alert(dados);
                                $('#mensagemNome').html(dados);
                                $('#nome').val(' ');
                            }
                        }
                    });
                })

            })
        </script>

    </head>

<div class="container">

    <h2 id="banda">Nova banda</h2>

    <div id="mensagemNome">

    </div>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_banda" class="form-control" value="<?php echo $banda->getIdBanda();?>">

        <!-- area de campos do form -->
        <hr />

        <div class="form-group col-md-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $banda->getNome();?>" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-12">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" value="<?php echo $banda->getCidade();?>" id="cidade" name="cidade" required>
        </div>

        <div class="form-group col-md-12">
            <label for="pais">Pais</label>
            <input type="text" class="form-control" value="<?php echo $banda->getPais();?>" id="pais" name="pais" required>
        </div>

        <div class="form-group col-md-12">
            <label for="datanasci">Nascimento</label>
            <input type="date" class="form-control" value="<?php echo $banda->getDatanasci();?>" id="datanasci" name="datanasci" required>
        </div>

        <div class="form-group col-md-12">
            <label for="afiliacao">Afiliação</label>
            <input type="text" class="form-control" value="<?php echo $banda->getAfiliacao();?>" id="afiliacao" name="afiliacao" required>
        </div>

        <div class="form-group col-md-12">
            <label for="paginaWeb">Pagina Web</label>
            <input type="text" class="form-control" value="<?php echo $banda->getPaginaWeb();?>" id="paginaWeb" name="paginaWeb" required>
        </div>

        <div class="form-group col-md-12">
            <label for="id_genero" class="control-label">Gênero</label>

            <select name="id_genero" id="id_genero" class="form-control">
                <option>Selecione</option>

                <?php foreach ($generos as $genero){
                    $checked = $genero['id_genero'] == $banda->getIdGenero() ? 'selected' : '';
                    echo "<option $checked value='{$genero['id_genero']}'>{$genero['nome']}</option>";
                } ?>
            </select>

        </div>

        <div class="form-group col-md-12">
            <label for="id_gravadora" class="control-label">Gravadora</label>

            <select name="id_gravadora" id="id_gravadora" class="form-control">
                <option>Selecione</option>

                <?php foreach ($gravadoras as $gravadora){
                    $checked = $gravadora['id_gravadora'] == $banda->getIdGravadora() ? 'selected' : '';
                    echo "<option $checked value='{$gravadora['id_gravadora']}'>{$gravadora['razaoSocial']}</option>";
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