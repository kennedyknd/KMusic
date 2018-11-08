<?php
include_once ('../cabecalho.php');
include_once('Artista.php');
include_once('../genero/Genero.php');
include_once('../gravadora/Gravadora.php');
include_once('../banda/Banda.php');

$genero = new Genero();
$generos = $genero->recuperarDados();

$gravadora = new Gravadora();
$gravadoras = $gravadora->recuperarDados();

$banda = new Banda();
$bandas = $banda->recuperarDados();

$artista = new Artista();

if(!empty($_GET['id_artista'])){
    $artista->carregarPorId($_GET['id_artista']);
}
?>
    <head>

        <title>Novo Artista</title>

        <script>

            $(function () {
                $('#telefone').mask('(99) 9999-9999');
                $('#celular').mask('(99) 99999-9999');
                $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
            })
        </script>

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
    <h2 id="artista">Novo Artista</h2>

            <div id="mensagemNome">

            </div>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_artista" class="form-control" value="<?php echo $artista->getIdArtista();?>">

        <!-- area de campos do form -->
        <hr />
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?php echo $artista->getNome();?>" id="nome" name="nome" required>
            </div>

            <div class="form-group col-md-12">
                <label for="datanasci">Data Nascimento</label>
                <input type="date" class="form-control" value="<?php echo $artista->getDatanasci();?>" id="datanasci" name="datanasci" required>
            </div>
            <div class="form-group col-md-12">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" value="<?php echo $artista->getCidade();?>" id="cidade" name="cidade" required>
            </div>
            <div class="form-group col-md-12">
                <label for="pais">Pais</label>
                <input type="text" class="form-control" value="<?php echo $artista->getPais();?>" id="pais" name="pais" required>
            </div>
            <div class="form-group col-md-12">
                <label for="ocupacao">Ocupacão</label>
                <input type="text" class="form-control" value="<?php echo $artista->getOcupacao();?>" id="ocupacao" name="ocupacao" required>
            </div>
            <div class="form-group col-md-12">
                <label for="instrumento">Instrumento</label>
                <input type="text" class="form-control" value="<?php echo $artista->getInstrumento();?>" id="instrumento" name="instrumento" required>
            </div>
            <div class="form-group col-md-12">
                <label for="paginaWeb">Página Web</label>
                <input type="text" class="form-control" value="<?php echo $artista->getPaginaWeb();?>" id="paginaWeb" name="paginaWeb" required>
            </div>
            <div class="form-group col-md-12">
                <label for="afiliacao">Afiliação</label>
                <input type="text" class="form-control" value="<?php echo $artista->getAfiliacao();?>" id="afiliacao" name="afiliacao" required>
            </div>

            <div class="form-group col-md-12">
                <label for="id_genero" class="control-label">Gênero</label>

                <select name="id_genero" id="id_genero" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($generos as $genero){
                        $checked = $genero['id_genero'] == $artista->getIdGenero() ? 'selected' : '';
                        echo "<option $checked value='{$genero['id_genero']}'>{$genero['nome']}</option>";
                    } ?>
                </select>

            </div>

            <div class="form-group col-md-12">
                <label for="id_gravadora" class="control-label">Gravadora</label>

                <select name="id_gravadora" id="id_gravadora" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($gravadoras as $gravadora){
                        $checked = $gravadora['id_gravadora'] == $artista->getIdGravadora() ? 'selected' : '';
                        echo "<option $checked value='{$gravadora['id_gravadora']}'>{$gravadora['razaoSocial']}</option>";
                    } ?>
                </select>

            </div>

            <div class="form-group col-md-12">
                <label for="id_banda" class="control-label">Banda</label>

                <select name="id_banda" id="id_banda" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($bandas as $banda){
                        $checked = $banda['id_banda'] == $artista->getIdBanda() ? 'selected' : '';
                        echo "<option $checked value='{$banda['id_banda']}'>{$banda['nome']}</option>";
                    } ?>
                </select>

            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a class="btn btn-danger" href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>