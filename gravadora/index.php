<?php
include_once("Gravadora.php");
$gravadora = new Gravadora();

$gravadoras = $gravadora->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 id="gravadora" class="text-center">Gravadoras</h1>
    <br>
<div class="container">
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Gênero</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Razão Social</td>
            <td>Nome Fantasia</td>
            <td>CNPJ</td>
            <td>País</td>
            <td>Nascimento</td>
        </tr>

        <?php foreach ($gravadoras as $gravadora){
            echo "
            <tr>
                <td style='width: 130px'>
                    <a href='add.php?id_gravadora={$gravadora['id_gravadora']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_gravadora={$gravadora['id_gravadora']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$gravadora['id_gravadora']}</td>
                <td>{$gravadora['razaoSocial']}</td>
                <td>{$gravadora['nomeFantasia']}</td>
                <td>{$gravadora['cnpj']}</td>
                <td>{$gravadora['pais']}</td>
                <td>{$gravadora['datanasci']}</td>
            </tr>
        ";
        } ?>

    </table>
</div>
<?php
include_once '../rodape.php';