<?php
include_once('../cabecalho.php');
include_once 'Gravadora.php';

$gravadora = new Gravadora();

if(!empty($_GET['id_gravadora'])){
    $gravadora->carregarPorId($_GET['id_gravadora']);
}
?>

    <head>
        <title>Nova Gravadora</title>

        <script>

            $(function () {
                $('#telefone').mask('(99) 9999-9999');
                $('#celular').mask('(99) 99999-9999');
                $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
                $('#cnpj').mask('99.999/9999-99');
            })
        </script>

        <script>
            $(function(){

                $('#razaoSocial').change(function() {
                    $razaoSocial = $('#razaoSocial').val();
                    $.ajax({
                        url: 'processamento.php?acao=verificar_razaoSocial&razaoSocial='+$razaoSocial,
                        success: function (dados) {
                            if (dados){
                                // alert(dados);
                                $('#mensagemRazaoSocial').html(dados);
                                $('#razaoSocial').val(' ');
                            }
                        }
                    });
                })

                $('#cnpj').change(function() {
                    $cnpj = $('#cnpj').val();
                    $.ajax({
                        url: 'processamento.php?acao=verificar_cnpj&cnpj='+$cnpj,
                        success: function (dados) {
                            if (dados){
                                // alert(dados);
                                $('#mensagemCnpj').html(dados);
                                $('#cnpj').val(' ');
                            }
                        }
                    });
                })

            })
        </script>

    </head>

<div class="container">

    <h2 id="gravadora">Nova Gravadora</h2>

    <div id="mensagemRazaoSocial">

    </div>

    <div id="mensagemCnpj">

    </div>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_gravadora" class="form-control" value="<?php echo $gravadora->getIdGravadora();?>">

        <!-- area de campos do form -->
        <hr />

        <div class="form-group col-md-12">
            <label for="razaoSocial">Razão Social</label>
            <input type="text" class="form-control" value="<?php echo $gravadora->getRazaoSocial();?>" id="razaoSocial" name="razaoSocial" required>
        </div>

        <div class="form-group col-md-12">
            <label for="nomeFantasia">Nome Fantasia</label>
            <input type="text" class="form-control" value="<?php echo $gravadora->getNomeFantasia();?>" id="nomeFantasia" name="nomeFantasia" required>
        </div>

        <div class="form-group col-md-12">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" value="<?php echo $gravadora->getCnpj();?>" id="cnpj" name="cnpj" required>
        </div>

        <div class="form-group col-md-12">
            <label for="pais">País</label>
            <input type="text" class="form-control" value="<?php echo $gravadora->getPais();?>" id="pais" name="pais" required>
        </div>

        <div class="form-group col-md-12">
            <label for="datanasci">Nascimento</label>
            <input type="date" class="form-control" value="<?php echo $gravadora->getDatanasci();?>" id="datanasci" name="datanasci" required>
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