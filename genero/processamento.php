<?php
include_once("Genero.php");

$genero = new Genero();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_genero'])) {
            $genero->alterar($_POST);
        } else {
            $genero->inserir($_POST);
        }
        break;
    case 'excluir':
        $genero->excluir($_GET['id_genero']);
        break;

    case 'verificar_nome':
        $existe = $genero->existeNome($_GET['nome']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} gênero com o nome {$_GET['nome']}, por favor, informe outro nome</h3></div>";
            }
        }
        die;
        break;
}

// Redireciona para a página index

header('location: index.php');
?>