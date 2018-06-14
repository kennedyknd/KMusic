<?php
include_once ('../cabecalho.php');
include_once('Artista.php');

$artista = new Artista();

if(!empty($_GET['id_artista'])){
    $artista->carregarPorId($_GET['id_artista']);
}
?>
    <head>

        <title>Visualizar Artista</title>

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
    <h2>Dados do Artista</h2>


        <input type="hidden" name="id_artista" class="form-control" value="<?php echo $artista->getIdArtista();?>">

        <!-- area de campos do form -->
        <hr />

        <tr>
            <td><strong>Nome: </strong> <?php echo $artista->getNome();?></td> <br/>
            <td><strong>Data de Nascimento: </strong> <?php echo $artista->getDatanasci();?></td> <br/>
            <td><strong>Cidade: </strong> <?php echo $artista->getCidade();?></td> <br/>
            <td><strong>País: </strong> <?php echo $artista->getPais();?></td> <br/>
            <td><strong>Ocupação: </strong> <?php echo $artista->getOcupacao();?></td> <br/>
            <td><strong>Instrumento: </strong> <?php echo $artista->getInstrumento();?></td> <br/>
            <td><strong>Página Web: </strong> <?php echo $artista->getPaginaWeb();?></td> <br/>
            <td><strong>Afiliação: </strong> <?php echo $artista->getAfiliacao();?></td> <br/>
            <td><strong>ID Gênero: </strong> <?php echo $artista->getIdGenero();?></td> <br/>
            <td><strong>ID Gravadora: </strong> <?php echo $artista->getIdGravadora();?></td> <br/>
            <td><strong>ID Banda: </strong> <?php echo $artista->getIdBanda();?></td> <br/>
        </tr>

    </div>

<?php
include_once ('../rodape.php');
?>