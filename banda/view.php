<?php
include_once ('../cabecalho.php');
include_once('Banda.php');

$banda = new Banda();

if(!empty($_GET['id_banda'])){
    $banda->carregarPorId($_GET['id_banda']);
}
?>
    <head>

        <title>Visualizar Banda</title>

        <script>

            $(function () {
                $('#telefone').mask('(99) 9999-9999');
                $('#celular').mask('(99) 99999-9999');
                $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
            })
        </script>

    </head>

    <div class="container">
    <h2>Dados do Banda</h2>


        <input type="hidden" name="id_banda" class="form-control" value="<?php echo $banda->getIdBanda();?>">

        <!-- area de campos do form -->
        <hr />

        <tr>
            <td><strong>Nome: </strong> <?php echo $banda->getNome();?></td> <br/>
            <td><strong>Data de Nascimento: </strong> <?php echo $banda->getDatanasci();?></td> <br/>
            <td><strong>Cidade: </strong> <?php echo $banda->getCidade();?></td> <br/>
            <td><strong>País: </strong> <?php echo $banda->getPais();?></td> <br/>
            <td><strong>Página Web: </strong> <?php echo $banda->getPaginaWeb();?></td> <br/>
            <td><strong>Afiliação: </strong> <?php echo $banda->getAfiliacao();?></td> <br/>
            <td><strong>ID Gênero: </strong> <?php echo $banda->getIdGenero();?></td> <br/>
            <td><strong>ID Gravadora: </strong> <?php echo $banda->getIdGravadora();?></td> <br/>
        </tr>

    </div>

<?php
include_once ('../rodape.php');
?>